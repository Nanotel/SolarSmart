#!/usr/bin/env python

import os
import glob
import time
import datetime
import smtplib
import urllib
import urllib2
import sys
import subprocess
import socket
import json
from struct import pack

#import requests
#import re
#import paho.mqtt.client as paho

#os.system('modprobe w1-gpio')
#os.system('modprobe w1-therm')

#base_dir = '/sys/bus/w1/devices/'
#device_folder = glob.glob(base_dir + '28-0517a21e13ff')[0]
#device_file = device_folder + '/w1_slave'

#device2_folder = glob.glob(base_dir + '28-0517a21cfeff')[0]
#device2_file = device2_folder + '/w1_slave'

#def read_temp_raw():
#    f = open(device_file, 'r')
#    lines = f.readlines()
#    f.close()
#    return lines

#def read_temp_raw2():
#    f2 = open(device2_file, 'r')
#    lines2 = f2.readlines()
#    f2.close()
#    return lines2

 
#def read_temp():
#    lines = read_temp_raw()
#    while lines[0].strip()[-3:] != 'YES':
#        time.sleep(0.2)
#        lines = read_temp_raw()
#    equals_pos = lines[1].find('t=')
#    if equals_pos != -1:
#        temp_string = lines[1][equals_pos+2:]
#        temp_c = float(temp_string) / 1000.0
#        temp_f = temp_c * 9.0 / 5.0 + 32.0
#        return temp_c

#def read_temp2():
#    lines2 = read_temp_raw2()
#    while lines2[0].strip()[-3:] != 'YES':
#        time2.sleep(0.2)
#        lines2 = read_temp_raw2()
#    equals_pos2 = lines2[1].find('t=')
#    if equals_pos2 != -1:
#        temp2_string = lines2[1][equals_pos2+2:]
#        temp2_c = float(temp2_string) / 1000.0
#        temp2_f = temp2_c * 9.0 / 5.0 + 32.0
#        return temp2_c
	


# Encryption and Decryption of TP-Link Smart Home Protocol
# XOR Autokey Cipher with starting key = 171
def encrypt(string):
        key = 171
        result = pack('>I', len(string))
        for i in string:
                a = key ^ ord(i)
                key = a
                result += chr(a)
        return result

def decrypt(string):
        key = 171
        result = ""
        for i in string:
                a = key ^ ord(i)
                key = ord(i)
                result += chr(a)
        return result


commands = {'info'     : '{"system":{"get_sysinfo":{}}}',
			'on'       : '{"system":{"set_relay_state":{"state":1}}}',
			'off'      : '{"system":{"set_relay_state":{"state":0}}}',
			'cloudinfo': '{"cnCloud":{"get_info":{}}}',
			'wlanscan' : '{"netif":{"get_scaninfo":{"refresh":0}}}',
			'time'     : '{"time":{"get_time":{}}}',
			'schedule' : '{"schedule":{"get_rules":{}}}',
			'countdown': '{"count_down":{"get_rules":{}}}',
			'antitheft': '{"anti_theft":{"get_rules":{}}}',
			'reboot'   : '{"system":{"reboot":{"delay":1}}}',
			'reset'    : '{"system":{"reset":{"delay":1}}}',
			'energy'   : '{"emeter":{"get_realtime":{}}}'
}

def tplink_controler (ip, cmd):
        port = 9999
        cmd = commands[cmd]
        # Send command and receive reply
        try:
                sock_tcp = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
                sock_tcp.connect((ip, port))
                sock_tcp.send(encrypt(cmd))
                data = sock_tcp.recv(2048)
                sock_tcp.close()

                # print "Sent:     ", cmd
                # print "Received: ", decrypt(data[4:])
		return decrypt(data[4:])
        except socket.error:
                quit("Cound not connect to host " + ip + ":" + str(port))



#server = smtplib.SMTP('smtp.gmail.com', 587)
#server.starttls()

# citeste senzorii de temperatura 
#temps1 = read_temp()
#temps1 = round(temps1,1)
#ts1 = str(temps1)
#temps2 = read_temp2()
#temps2 = round (temps2,1)
#ts2 = str(temps2)




# Sonoff TH10 - 02 citire PARTER casa - temperatura si umiditate
try:
	url_SonoffTH10_parter = "http://123.123.123.42/cm?cmnd=Status%2010"
	response = urllib.urlopen(url_SonoffTH10_parter)
	date_sonoffTH10_parter_json = json.loads(response.read())
	tparter = date_sonoffTH10_parter_json['StatusSNS']['SI7021']['Temperature']
	uparter = date_sonoffTH10_parter_json['StatusSNS']['SI7021']['Humidity']	

except:
	tparter = 99
	uparter = 99
	

# Sonoff TH10 - 03 citire ETAJ casa - temperatura si umiditate

try:
	url_SonoffTH10_etaj = "http://123.123.123.143/cm?cmnd=Status%2010"
	response = urllib.urlopen(url_SonoffTH10_etaj)
	date_sonoffTH10_etaj_json = json.loads(response.read())
	tetaj = date_sonoffTH10_etaj_json['StatusSNS']['SI7021']['Temperature']
	uetaj = date_sonoffTH10_etaj_json['StatusSNS']['SI7021']['Humidity']

except:
	tetaj = 99
	uetaj = 99



# NodeMCU - 01 citire Atelier - temperatura 

try:
	url_NodeMCU01 = "http://123.123.123.144/cm?cmnd=Status%2010"
	response = urllib.urlopen(url_NodeMCU01)
	date_NodeMCU01 = json.loads(response.read())
	tatelier = date_NodeMCU01['StatusSNS']['DS18B20']['Temperature']

except:
	tatelier = 99



# NodeMCU - 02 citire Exterior - temperatura 

try:
	url_NodeMCU02 = "http://123.123.123.145/cm?cmnd=Status%2010"
	response = urllib.urlopen(url_NodeMCU02)
	date_NodeMCU02 = json.loads(response.read())
	texterior = date_NodeMCU02['StatusSNS']['DS18B20']['Temperature']

except:
	texterior = 99



# NodeMCU - 03 citire Foisor - temperatura 

try:
	url_NodeMCU03 = "http://123.123.123.146/cm?cmnd=Status%2010"
	response = urllib.urlopen(url_NodeMCU03)
	date_NodeMCU03 = json.loads(response.read())
	tfoisor = date_NodeMCU03['StatusSNS']['DS18B20']['Temperature']

except:
	tfoisor = 99


# NodeMCU - 03 citire Foisor - temperatura 

try:
	url_NodeMCU04 = "http://123.123.123.147/cm?cmnd=Status%2010"
	response = urllib.urlopen(url_NodeMCU04)
	date_NodeMCU04 = json.loads(response.read())
	tdormitor_mic = date_NodeMCU04['StatusSNS']['DS18B20']['Temperature']

except:
	tdormitor_mic = 99





#temperatura luata de la meteo
url = "https://api.openweathermap.org/data/2.5/weather?q=Baicoi,ro&units=metric&appid=1b7d0d4fcf933748918c1108c32e0ac3"
raspuns = urllib.urlopen(url)
date = json.loads(raspuns.read())

tmeteo = date['main']['temp']



#citeste datele de la invertor
link = 'http://123.123.123.130/basicInfoP30.cgi?sid=0.27713826556912813'
f = urllib2.urlopen(link).read()
lines = f.splitlines()


AC_input_voltage = lines[0]
AC_output_voltage = lines[1]
AC_inpuy_frequency = lines[2]
AC_output_grequency = lines[3]

AC_output_apparent_power = lines[6]     # consum aparent VA
battery_voltage = lines[7]              # voltaj baterie


AC_output_active_power = lines[8]       # consum W
battery_capacity = lines[9]             # procent capacitate bterie
output_load_percent = lines[10]         # procent consum 

battery_discharge_current = lines[11]	# Amperi descarcat din baterie
PV1_charging_power = lines[12]          #PV1 incarcare W
battery_charge_current = lines[13]       # curent de incarcare baterii
working_mode = lines[14]                #mod de lucru


PV1_input_voltage = lines[20]
PV1_input_voltage = float(PV1_input_voltage)/10
#PV1_input_voltage = round(PV1_input_voltage,1)





# ---------------------------------------------
#  decide daca opreste sau nu prizele tp-link
# ---------------------------------------------
rig01 = '123.123.123.200'    # tplink01
rig02 = '123.123.123.201'    # tplink02
tpl03 = '123.123.123.202'    # tplink03   DEFECT

tp01_power_mw = tplink_controler (rig01,'energy')
tp01_power_mw = json.loads(tp01_power_mw)
tp01_power_mw = (tp01_power_mw['emeter']['get_realtime']['power_mw'])
#print tp01_power_mw

tp02_power_mw = tplink_controler (rig02,'energy')
tp02_power_mw = json.loads(tp02_power_mw)
tp02_power_mw = (tp02_power_mw['emeter']['get_realtime']['power_mw'])
#print tp02_power_mw

#tp03_power_mw = tplink_controler (tpl03,'energy')
#tp03_power_mw = json.loads(tp03_power_mw)
#tp03_power_mw = (tp03_power_mw['emeter']['get_realtime']['power_mw'])
tp03_power_mw = 0
#print tp03_power_mw


battery_voltage = float(battery_voltage)/100
battery_voltage = round(battery_voltage,2)



#citeste datele de la pylontech   BATERIA 01  === PWR
link = 'http://123.123.123.132/req?code=pwr+1'
f = urllib2.urlopen(link).read()
lines = f.splitlines()

bat01_voltaj_baterie = float(filter(str.isdigit, lines[10]))/1000
bat01_temperatura_baterie = float(filter(str.isdigit, lines[14]))/1000
bat01_procent_baterie = int(filter(str.isdigit, lines[16]))



#citeste datele de la pylontech   BATERIA 02  === PWR
link = 'http://123.123.123.132/req?code=pwr+2'
f = urllib2.urlopen(link).read()
lines = f.splitlines()

bat02_voltaj_baterie = float(filter(str.isdigit, lines[10]))/1000
bat02_temperatura_baterie = float(filter(str.isdigit, lines[14]))/1000
bat02_procent_baterie = int(filter(str.isdigit, lines[16]))


#citeste datele de la pylontech   BATERIA 03  === PWR
link = 'http://123.123.123.132/req?code=pwr+3'
f = urllib2.urlopen(link).read()
lines = f.splitlines()

bat03_voltaj_baterie = float(filter(str.isdigit, lines[10]))/1000
bat03_temperatura_baterie = float(filter(str.isdigit, lines[14]))/1000
bat03_procent_baterie = int(filter(str.isdigit, lines[16]))


#citeste datele de la pylontech   BATERIA 04  === PWR
link = 'http://123.123.123.132/req?code=pwr+4'
f = urllib2.urlopen(link).read()
lines = f.splitlines()

bat04_voltaj_baterie = float(filter(str.isdigit, lines[10]))/1000
bat04_temperatura_baterie = float(filter(str.isdigit, lines[14]))/1000
bat04_procent_baterie = int(filter(str.isdigit, lines[16]))



# citeste datele de la pylontecj BATERIA 01 - voltajul cellelor
link = 'http://123.123.123.132/req?code=bat+1'
f = urllib2.urlopen(link).read()
lines = f.splitlines()

bat01_cell01_voltaj = lines[6]
bat01_cell01_voltaj = float(bat01_cell01_voltaj.split(' ')[8])/1000
bat01_cell02_voltaj = lines[8]
bat01_cell02_voltaj = float(bat01_cell02_voltaj.split(' ')[8])/1000
bat01_cell03_voltaj = lines[10]
bat01_cell03_voltaj = float(bat01_cell03_voltaj.split(' ')[8])/1000
bat01_cell04_voltaj = lines[12]
bat01_cell04_voltaj = float(bat01_cell04_voltaj.split(' ')[8])/1000
bat01_cell05_voltaj = lines[14]
bat01_cell05_voltaj = float(bat01_cell05_voltaj.split(' ')[8])/1000
bat01_cell06_voltaj = lines[16]
bat01_cell06_voltaj = float(bat01_cell06_voltaj.split(' ')[8])/1000
bat01_cell07_voltaj = lines[18]
bat01_cell07_voltaj = float(bat01_cell07_voltaj.split(' ')[8])/1000
bat01_cell08_voltaj = lines[20]
bat01_cell08_voltaj = float(bat01_cell08_voltaj.split(' ')[8])/1000
bat01_cell09_voltaj = lines[22]
bat01_cell09_voltaj = float(bat01_cell09_voltaj.split(' ')[8])/1000
bat01_cell10_voltaj = lines[24]
bat01_cell10_voltaj = float(bat01_cell10_voltaj.split(' ')[8])/1000
bat01_cell11_voltaj = lines[26]
bat01_cell11_voltaj = float(bat01_cell11_voltaj.split(' ')[7])/1000
bat01_cell12_voltaj = lines[28]
bat01_cell12_voltaj = float(bat01_cell12_voltaj.split(' ')[7])/1000
bat01_cell13_voltaj = lines[30]
bat01_cell13_voltaj = float(bat01_cell13_voltaj.split(' ')[7])/1000
bat01_cell14_voltaj = lines[32]
bat01_cell14_voltaj = float(bat01_cell14_voltaj.split(' ')[7])/1000
bat01_cell15_voltaj = lines[34]
bat01_cell15_voltaj = float(bat01_cell15_voltaj.split(' ')[7])/1000

# citeste datele de la pylontecj BATERIA 02 - voltajul cellelor
link2 = 'http://123.123.123.132/req?code=bat+2'
f2 = urllib2.urlopen(link2).read()
lines2 = f2.splitlines()

bat02_cell01_voltaj = lines2[6]
bat02_cell01_voltaj = float(bat02_cell01_voltaj.split(' ')[8])/1000
bat02_cell02_voltaj = lines2[8]
bat02_cell02_voltaj = float(bat02_cell02_voltaj.split(' ')[8])/1000
bat02_cell03_voltaj = lines2[10]
bat02_cell03_voltaj = float(bat02_cell03_voltaj.split(' ')[8])/1000
bat02_cell04_voltaj = lines2[12]
bat02_cell04_voltaj = float(bat02_cell04_voltaj.split(' ')[8])/1000
bat02_cell05_voltaj = lines2[14]
bat02_cell05_voltaj = float(bat02_cell05_voltaj.split(' ')[8])/1000
bat02_cell06_voltaj = lines2[16]
bat02_cell06_voltaj = float(bat02_cell06_voltaj.split(' ')[8])/1000
bat02_cell07_voltaj = lines2[18]
bat02_cell07_voltaj = float(bat02_cell07_voltaj.split(' ')[8])/1000
bat02_cell08_voltaj = lines2[20]
bat02_cell08_voltaj = float(bat02_cell08_voltaj.split(' ')[8])/1000
bat02_cell09_voltaj = lines2[22]
bat02_cell09_voltaj = float(bat02_cell09_voltaj.split(' ')[8])/1000
bat02_cell10_voltaj = lines2[24]
bat02_cell10_voltaj = float(bat02_cell10_voltaj.split(' ')[8])/1000
bat02_cell11_voltaj = lines2[26]
bat02_cell11_voltaj = float(bat02_cell11_voltaj.split(' ')[7])/1000
bat02_cell12_voltaj = lines2[28]
bat02_cell12_voltaj = float(bat02_cell12_voltaj.split(' ')[7])/1000
bat02_cell13_voltaj = lines2[30]
bat02_cell13_voltaj = float(bat02_cell13_voltaj.split(' ')[7])/1000
bat02_cell14_voltaj = lines2[32]
bat02_cell14_voltaj = float(bat02_cell14_voltaj.split(' ')[7])/1000
bat02_cell15_voltaj = lines2[34]
bat02_cell15_voltaj = float(bat02_cell15_voltaj.split(' ')[7])/1000


# citeste datele de la pylontecj BATERIA 03 - voltajul cellelor
link3 = 'http://123.123.123.132/req?code=bat+3'
f3 = urllib2.urlopen(link3).read()
lines3 = f3.splitlines()

bat03_cell01_voltaj = lines3[6]
bat03_cell01_voltaj = float(bat03_cell01_voltaj.split(' ')[8])/1000
bat03_cell02_voltaj = lines3[8]
bat03_cell02_voltaj = float(bat03_cell02_voltaj.split(' ')[8])/1000
bat03_cell03_voltaj = lines3[10]
bat03_cell03_voltaj = float(bat03_cell03_voltaj.split(' ')[8])/1000
bat03_cell04_voltaj = lines3[12]
bat03_cell04_voltaj = float(bat03_cell04_voltaj.split(' ')[8])/1000
bat03_cell05_voltaj = lines3[14]
bat03_cell05_voltaj = float(bat03_cell05_voltaj.split(' ')[8])/1000
bat03_cell06_voltaj = lines3[16]
bat03_cell06_voltaj = float(bat03_cell06_voltaj.split(' ')[8])/1000
bat03_cell07_voltaj = lines3[18]
bat03_cell07_voltaj = float(bat03_cell07_voltaj.split(' ')[8])/1000
bat03_cell08_voltaj = lines3[20]
bat03_cell08_voltaj = float(bat03_cell08_voltaj.split(' ')[8])/1000
bat03_cell09_voltaj = lines3[22]
bat03_cell09_voltaj = float(bat03_cell09_voltaj.split(' ')[8])/1000
bat03_cell10_voltaj = lines3[24]
bat03_cell10_voltaj = float(bat03_cell10_voltaj.split(' ')[8])/1000
bat03_cell11_voltaj = lines3[26]
bat03_cell11_voltaj = float(bat03_cell11_voltaj.split(' ')[7])/1000
bat03_cell12_voltaj = lines3[28]
bat03_cell12_voltaj = float(bat03_cell12_voltaj.split(' ')[7])/1000
bat03_cell13_voltaj = lines3[30]
bat03_cell13_voltaj = float(bat03_cell13_voltaj.split(' ')[7])/1000
bat03_cell14_voltaj = lines3[32]
bat03_cell14_voltaj = float(bat03_cell14_voltaj.split(' ')[7])/1000
bat03_cell15_voltaj = lines3[34]
bat03_cell15_voltaj = float(bat03_cell15_voltaj.split(' ')[7])/1000



# citeste datele de la pylontecj BATERIA 04 - voltajul cellelor
link4 = 'http://123.123.123.132/req?code=bat+4'
f4 = urllib2.urlopen(link4).read()
lines4 = f4.splitlines()

bat04_cell01_voltaj = lines4[6]
bat04_cell01_voltaj = float(bat04_cell01_voltaj.split(' ')[8])/1000
bat04_cell02_voltaj = lines4[8]
bat04_cell02_voltaj = float(bat04_cell02_voltaj.split(' ')[8])/1000
bat04_cell03_voltaj = lines4[10]
bat04_cell03_voltaj = float(bat04_cell03_voltaj.split(' ')[8])/1000
bat04_cell04_voltaj = lines4[12]
bat04_cell04_voltaj = float(bat04_cell04_voltaj.split(' ')[8])/1000
bat04_cell05_voltaj = lines4[14]
bat04_cell05_voltaj = float(bat04_cell05_voltaj.split(' ')[8])/1000
bat04_cell06_voltaj = lines4[16]
bat04_cell06_voltaj = float(bat04_cell06_voltaj.split(' ')[8])/1000
bat04_cell07_voltaj = lines4[18]
bat04_cell07_voltaj = float(bat04_cell07_voltaj.split(' ')[8])/1000
bat04_cell08_voltaj = lines4[20]
bat04_cell08_voltaj = float(bat04_cell08_voltaj.split(' ')[8])/1000
bat04_cell09_voltaj = lines4[22]
bat04_cell09_voltaj = float(bat04_cell09_voltaj.split(' ')[8])/1000
bat04_cell10_voltaj = lines4[24]
bat04_cell10_voltaj = float(bat04_cell10_voltaj.split(' ')[8])/1000
bat04_cell11_voltaj = lines4[26]
bat04_cell11_voltaj = float(bat04_cell11_voltaj.split(' ')[7])/1000
bat04_cell12_voltaj = lines4[28]
bat04_cell12_voltaj = float(bat04_cell12_voltaj.split(' ')[7])/1000
bat04_cell13_voltaj = lines4[30]
bat04_cell13_voltaj = float(bat04_cell13_voltaj.split(' ')[7])/1000
bat04_cell14_voltaj = lines4[32]
bat04_cell14_voltaj = float(bat04_cell14_voltaj.split(' ')[7])/1000
bat04_cell15_voltaj = lines4[34]
bat04_cell15_voltaj = float(bat04_cell15_voltaj.split(' ')[7])/1000



##############################
#
# se calculeaza ca media celor patru pylontechuri pentru ca inversorul da o valoarea aiurea
#
##############################

capacitate_baterie = int((bat01_procent_baterie+bat02_procent_baterie+bat03_procent_baterie+bat04_procent_baterie)/4)





##################################################
#  
#   DECIZII PORNIRE PRIZE RIGURI
#
##################################################
now = datetime.datetime.now()
curent_hour = now.hour


# PORNIRE RIG01 (3placi) 
if (curent_hour<=15):
	if int(capacitate_baterie)>=92 and int(PV1_charging_power)>800:
		tplink_controler (rig01,'on')
else :
	if int(capacitate_baterie)>=98 and int(PV1_charging_power)>1300:
		tplink_controler (rig01,'on')
	

# PORNIRE RIG02 - 6 placi
if (curent_hour<=15):
	if (capacitate_baterie)>=97 and int(PV1_charging_power)>1200:
		tplink_controler (rig02,'on')

	
##################################################
#  
#   DECIZII OPRIRE PRIZE RIGURI 
#
##################################################

# OPRIRE RIG01
if (curent_hour>15):
	if (capacitate_baterie)<=70  and int(PV1_charging_power)<800:
		tplink_controler (rig01,'off')


# OPRIRE RIG02
if (curent_hour>15):
	if (capacitate_baterie)<=90 and int(PV1_charging_power)<800:
		tplink_controler (rig02,'off')


if (capacitate_baterie)<=60  and int(PV1_charging_power)<400:
	tplink_controler (rig01,'off')
	tplink_controler (rig02,'off')


#########################
#
# face push data catre serverul online
#
#########################


mydata=[('temperatura_atelier',tatelier),
('temperatura_parter',tparter),
('temperatura_etaj',tetaj),
('temperatura_dormitor_mic',tdormitor_mic),
('temperatura_foisor',tfoisor),
('temperatura_exterior',texterior),
('temperatura_meteo',tmeteo),
('umiditate_parter',uparter),
('umiditate_etaj',uetaj),
('tp01_power_mw',tp01_power_mw),
('tp02_power_mw',tp02_power_mw),
('tp03_power_mw',tp03_power_mw),
('voltaj_baterie',battery_voltage),
('putere_consumata_ac',AC_output_active_power),
('incarcare_pv1',PV1_charging_power),
('putere_incarcare_baterii',battery_charge_current),
('consum_aparent',AC_output_apparent_power),
('procent_incarcare_baterii',battery_capacity),
('procent_consum',output_load_percent),
('mod_de_lucru',working_mode),
('voltaj_pv1',PV1_input_voltage),
('curent_descarcare_bat',battery_discharge_current),
('bat01_voltaj_baterie',bat01_voltaj_baterie),
('bat01_temperatura_baterie',bat01_temperatura_baterie),
('bat01_procent_baterie',bat01_procent_baterie),
('bat01_cell01_voltaj',bat01_cell01_voltaj),
('bat01_cell02_voltaj',bat01_cell02_voltaj),
('bat01_cell03_voltaj',bat01_cell03_voltaj),
('bat01_cell04_voltaj',bat01_cell04_voltaj),
('bat01_cell05_voltaj',bat01_cell05_voltaj),
('bat01_cell06_voltaj',bat01_cell06_voltaj),
('bat01_cell07_voltaj',bat01_cell07_voltaj),
('bat01_cell08_voltaj',bat01_cell08_voltaj),
('bat01_cell09_voltaj',bat01_cell09_voltaj),
('bat01_cell10_voltaj',bat01_cell10_voltaj),
('bat01_cell11_voltaj',bat01_cell11_voltaj),
('bat01_cell12_voltaj',bat01_cell12_voltaj),
('bat01_cell13_voltaj',bat01_cell13_voltaj),
('bat01_cell14_voltaj',bat01_cell14_voltaj),
('bat01_cell15_voltaj',bat01_cell15_voltaj),
('bat02_voltaj_baterie',bat02_voltaj_baterie),
('bat02_temperatura_baterie',bat02_temperatura_baterie),
('bat02_procent_baterie',bat02_procent_baterie),
('bat02_cell01_voltaj',bat02_cell01_voltaj),
('bat02_cell02_voltaj',bat02_cell02_voltaj),
('bat02_cell03_voltaj',bat02_cell03_voltaj),
('bat02_cell04_voltaj',bat02_cell04_voltaj),
('bat02_cell05_voltaj',bat02_cell05_voltaj),
('bat02_cell06_voltaj',bat02_cell06_voltaj),
('bat02_cell07_voltaj',bat02_cell07_voltaj),
('bat02_cell08_voltaj',bat02_cell08_voltaj),
('bat02_cell09_voltaj',bat02_cell09_voltaj),
('bat02_cell10_voltaj',bat02_cell10_voltaj),
('bat02_cell11_voltaj',bat02_cell11_voltaj),
('bat02_cell12_voltaj',bat02_cell12_voltaj),
('bat02_cell13_voltaj',bat02_cell13_voltaj),
('bat02_cell14_voltaj',bat02_cell14_voltaj),
('bat02_cell15_voltaj',bat02_cell15_voltaj),
('bat03_voltaj_baterie',bat03_voltaj_baterie),
('bat03_temperatura_baterie',bat03_temperatura_baterie),
('bat03_procent_baterie',bat03_procent_baterie),
('bat03_cell01_voltaj',bat03_cell01_voltaj),
('bat03_cell02_voltaj',bat03_cell02_voltaj),
('bat03_cell03_voltaj',bat03_cell03_voltaj),
('bat03_cell04_voltaj',bat03_cell04_voltaj),
('bat03_cell05_voltaj',bat03_cell05_voltaj),
('bat03_cell06_voltaj',bat03_cell06_voltaj),
('bat03_cell07_voltaj',bat03_cell07_voltaj),
('bat03_cell08_voltaj',bat03_cell08_voltaj),
('bat03_cell09_voltaj',bat03_cell09_voltaj),
('bat03_cell10_voltaj',bat03_cell10_voltaj),
('bat03_cell11_voltaj',bat03_cell11_voltaj),
('bat03_cell12_voltaj',bat03_cell12_voltaj),
('bat03_cell13_voltaj',bat03_cell13_voltaj),
('bat03_cell14_voltaj',bat03_cell14_voltaj),
('bat03_cell15_voltaj',bat03_cell15_voltaj),
('bat04_voltaj_baterie',bat04_voltaj_baterie),
('bat04_temperatura_baterie',bat04_temperatura_baterie),
('bat04_procent_baterie',bat04_procent_baterie),
('bat04_cell01_voltaj',bat04_cell01_voltaj),
('bat04_cell02_voltaj',bat04_cell02_voltaj),
('bat04_cell03_voltaj',bat04_cell03_voltaj),
('bat04_cell04_voltaj',bat04_cell04_voltaj),
('bat04_cell05_voltaj',bat04_cell05_voltaj),
('bat04_cell06_voltaj',bat04_cell06_voltaj),
('bat04_cell07_voltaj',bat04_cell07_voltaj),
('bat04_cell08_voltaj',bat04_cell08_voltaj),
('bat04_cell09_voltaj',bat04_cell09_voltaj),
('bat04_cell10_voltaj',bat04_cell10_voltaj),
('bat04_cell11_voltaj',bat04_cell11_voltaj),
('bat04_cell12_voltaj',bat04_cell12_voltaj),
('bat04_cell13_voltaj',bat04_cell13_voltaj),
('bat04_cell14_voltaj',bat04_cell14_voltaj),
('bat04_cell15_voltaj',bat04_cell15_voltaj)]

#print mydata
mydata=urllib.urlencode(mydata)
path='http://monitorizare.ro/actualizare-date.php'    #the url you want to POST to
req=urllib2.Request(path, mydata)
req.add_header("Content-type", "application/x-www-form-urlencoded")
page=urllib2.urlopen(req).read()
print page

