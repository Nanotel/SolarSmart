<?php

require_once('connect.php'); 


$timestamp = time();
$timestamp = (int)($timestamp);
$sql = "UPDATE time SET timestamp = $timestamp WHERE id_time = 1";
$result = $conn->query($sql);


$temperatura_atelier = $_POST['temperatura_atelier'];
$temperatura_parter = $_POST['temperatura_parter'];
$temperatura_etaj = $_POST['temperatura_etaj'];
$temperatura_dormitor_mic = $_POST['temperatura_dormitor_mic'];
$temperatura_foisor = $_POST['temperatura_foisor'];
$temperatura_exterior = $_POST['temperatura_exterior'];
$temperatura_meteo = $_POST['temperatura_meteo'];
$umiditate_parter = $_POST['umiditate_parter'];
$umiditate_etaj = $_POST['umiditate_etaj'];

$sql = "UPDATE temperaturi SET atelier = $temperatura_atelier, parter = $temperatura_parter, etaj = $temperatura_etaj, dormitor_mic = $temperatura_dormitor_mic, foisor = $temperatura_foisor, exterior = $temperatura_exterior, meteo = $temperatura_meteo, uparter = $umiditate_parter, uetaj = $umiditate_etaj WHERE id_t = 1";
$result = $conn->query($sql);


$voltaj_baterie = $_POST['voltaj_baterie'];
$putere_consumata_ac = $_POST['putere_consumata_ac'];
$incarcare_pv1 = $_POST['incarcare_pv1'];
$putere_incarcare_baterii = $_POST['putere_incarcare_baterii'];
$consum_aparent = $_POST['consum_aparent'];
$procent_incarcare_baterii = $_POST['procent_incarcare_baterii'];
$procent_consum = $_POST['procent_consum'];
$mod_de_lucru = $_POST['mod_de_lucru'];
$voltaj_pv1 = $_POST['voltaj_pv1'];
$curent_descarcare_bat = $_POST['curent_descarcare_bat'];

$sql = "UPDATE invertor SET 
voltaj_baterie = $voltaj_baterie,
putere_consumata_ac = $putere_consumata_ac,
incarcare_pv1 = $incarcare_pv1,
putere_incarcare_baterii = $putere_incarcare_baterii,
consum_aparent = $consum_aparent,
procent_incarcare_baterii = $procent_incarcare_baterii,
procent_consum = $procent_consum,
mod_de_lucru = '$mod_de_lucru',
voltaj_pv1 = $voltaj_pv1,
curent_descarcare_bat = $curent_descarcare_bat
WHERE id = 1";

$result = $conn->query($sql);


$tp01_power_mw = $_POST['tp01_power_mw'];
$tp02_power_mw = $_POST['tp02_power_mw'];
$tp03_power_mw = $_POST['tp03_power_mw'];
$sql = "UPDATE prize SET tp01_power_mw = $tp01_power_mw, tp02_power_mw = $tp02_power_mw, tp03_power_mw = $tp03_power_mw WHERE id_p = 1";
$result = $conn->query($sql);



$bat01_voltaj_baterie = $_POST["bat01_voltaj_baterie"];
$bat01_procent_baterie = $_POST["bat01_procent_baterie"];
$bat01_temperatura_baterie = $_POST["bat01_temperatura_baterie"];
$bat01_cell01_voltaj = $_POST["bat01_cell01_voltaj"];
$bat01_cell02_voltaj = $_POST["bat01_cell02_voltaj"];
$bat01_cell03_voltaj = $_POST["bat01_cell03_voltaj"];
$bat01_cell04_voltaj = $_POST["bat01_cell04_voltaj"];
$bat01_cell05_voltaj = $_POST["bat01_cell05_voltaj"];
$bat01_cell06_voltaj = $_POST["bat01_cell06_voltaj"];
$bat01_cell07_voltaj = $_POST["bat01_cell07_voltaj"];
$bat01_cell08_voltaj = $_POST["bat01_cell08_voltaj"];
$bat01_cell09_voltaj = $_POST["bat01_cell09_voltaj"];
$bat01_cell10_voltaj = $_POST["bat01_cell10_voltaj"];
$bat01_cell11_voltaj = $_POST["bat01_cell11_voltaj"];
$bat01_cell12_voltaj = $_POST["bat01_cell12_voltaj"];
$bat01_cell13_voltaj = $_POST["bat01_cell13_voltaj"];
$bat01_cell14_voltaj = $_POST["bat01_cell14_voltaj"];
$bat01_cell15_voltaj = $_POST["bat01_cell15_voltaj"];


$sql = "UPDATE pylontech SET 
voltaj_baterie = $bat01_voltaj_baterie,
procent_baterie = $bat01_procent_baterie,
temperatura_baterie = $bat01_temperatura_baterie,
cell01_voltaj = $bat01_cell01_voltaj,
cell02_voltaj = $bat01_cell02_voltaj,
cell03_voltaj = $bat01_cell03_voltaj,
cell04_voltaj = $bat01_cell04_voltaj,
cell05_voltaj = $bat01_cell05_voltaj,
cell06_voltaj = $bat01_cell06_voltaj,
cell07_voltaj = $bat01_cell07_voltaj,
cell08_voltaj = $bat01_cell08_voltaj,
cell09_voltaj = $bat01_cell09_voltaj,
cell10_voltaj = $bat01_cell10_voltaj,
cell11_voltaj = $bat01_cell11_voltaj,
cell12_voltaj = $bat01_cell12_voltaj,
cell13_voltaj = $bat01_cell13_voltaj,
cell14_voltaj = $bat01_cell14_voltaj,
cell15_voltaj = $bat01_cell15_voltaj
WHERE id_bat = 1";
$result = $conn->query($sql);



$bat02_voltaj_baterie = $_POST["bat02_voltaj_baterie"];
$bat02_procent_baterie = $_POST["bat02_procent_baterie"];
$bat02_temperatura_baterie = $_POST["bat02_temperatura_baterie"];
$bat02_cell01_voltaj = $_POST["bat02_cell01_voltaj"];
$bat02_cell02_voltaj = $_POST["bat02_cell02_voltaj"];
$bat02_cell03_voltaj = $_POST["bat02_cell03_voltaj"];
$bat02_cell04_voltaj = $_POST["bat02_cell04_voltaj"];
$bat02_cell05_voltaj = $_POST["bat02_cell05_voltaj"];
$bat02_cell06_voltaj = $_POST["bat02_cell06_voltaj"];
$bat02_cell07_voltaj = $_POST["bat02_cell07_voltaj"];
$bat02_cell08_voltaj = $_POST["bat02_cell08_voltaj"];
$bat02_cell09_voltaj = $_POST["bat02_cell09_voltaj"];
$bat02_cell10_voltaj = $_POST["bat02_cell10_voltaj"];
$bat02_cell11_voltaj = $_POST["bat02_cell11_voltaj"];
$bat02_cell12_voltaj = $_POST["bat02_cell12_voltaj"];
$bat02_cell13_voltaj = $_POST["bat02_cell13_voltaj"];
$bat02_cell14_voltaj = $_POST["bat02_cell14_voltaj"];
$bat02_cell15_voltaj = $_POST["bat02_cell15_voltaj"];


$sql = "UPDATE pylontech SET 
voltaj_baterie = $bat02_voltaj_baterie,
procent_baterie = $bat02_procent_baterie,
temperatura_baterie = $bat02_temperatura_baterie,
cell01_voltaj = $bat02_cell01_voltaj,
cell02_voltaj = $bat02_cell02_voltaj,
cell03_voltaj = $bat02_cell03_voltaj,
cell04_voltaj = $bat02_cell04_voltaj,
cell05_voltaj = $bat02_cell05_voltaj,
cell06_voltaj = $bat02_cell06_voltaj,
cell07_voltaj = $bat02_cell07_voltaj,
cell08_voltaj = $bat02_cell08_voltaj,
cell09_voltaj = $bat02_cell09_voltaj,
cell10_voltaj = $bat02_cell10_voltaj,
cell11_voltaj = $bat02_cell11_voltaj,
cell12_voltaj = $bat02_cell12_voltaj,
cell13_voltaj = $bat02_cell13_voltaj,
cell14_voltaj = $bat02_cell14_voltaj,
cell15_voltaj = $bat02_cell15_voltaj
WHERE id_bat = 2";
$result = $conn->query($sql);



$bat03_voltaj_baterie = $_POST["bat03_voltaj_baterie"];
$bat03_procent_baterie = $_POST["bat03_procent_baterie"];
$bat03_temperatura_baterie = $_POST["bat03_temperatura_baterie"];
$bat03_cell01_voltaj = $_POST["bat03_cell01_voltaj"];
$bat03_cell02_voltaj = $_POST["bat03_cell02_voltaj"];
$bat03_cell03_voltaj = $_POST["bat03_cell03_voltaj"];
$bat03_cell04_voltaj = $_POST["bat03_cell04_voltaj"];
$bat03_cell05_voltaj = $_POST["bat03_cell05_voltaj"];
$bat03_cell06_voltaj = $_POST["bat03_cell06_voltaj"];
$bat03_cell07_voltaj = $_POST["bat03_cell07_voltaj"];
$bat03_cell08_voltaj = $_POST["bat03_cell08_voltaj"];
$bat03_cell09_voltaj = $_POST["bat03_cell09_voltaj"];
$bat03_cell10_voltaj = $_POST["bat03_cell10_voltaj"];
$bat03_cell11_voltaj = $_POST["bat03_cell11_voltaj"];
$bat03_cell12_voltaj = $_POST["bat03_cell12_voltaj"];
$bat03_cell13_voltaj = $_POST["bat03_cell13_voltaj"];
$bat03_cell14_voltaj = $_POST["bat03_cell14_voltaj"];
$bat03_cell15_voltaj = $_POST["bat03_cell15_voltaj"];


$sql = "UPDATE pylontech SET 
voltaj_baterie = $bat03_voltaj_baterie,
procent_baterie = $bat03_procent_baterie,
temperatura_baterie = $bat03_temperatura_baterie,
cell01_voltaj = $bat03_cell01_voltaj,
cell02_voltaj = $bat03_cell02_voltaj,
cell03_voltaj = $bat03_cell03_voltaj,
cell04_voltaj = $bat03_cell04_voltaj,
cell05_voltaj = $bat03_cell05_voltaj,
cell06_voltaj = $bat03_cell06_voltaj,
cell07_voltaj = $bat03_cell07_voltaj,
cell08_voltaj = $bat03_cell08_voltaj,
cell09_voltaj = $bat03_cell09_voltaj,
cell10_voltaj = $bat03_cell10_voltaj,
cell11_voltaj = $bat03_cell11_voltaj,
cell12_voltaj = $bat03_cell12_voltaj,
cell13_voltaj = $bat03_cell13_voltaj,
cell14_voltaj = $bat03_cell14_voltaj,
cell15_voltaj = $bat03_cell15_voltaj
WHERE id_bat = 3";
$result = $conn->query($sql);



$bat04_voltaj_baterie = $_POST["bat04_voltaj_baterie"];
$bat04_procent_baterie = $_POST["bat04_procent_baterie"];
$bat04_temperatura_baterie = $_POST["bat04_temperatura_baterie"];
$bat04_cell01_voltaj = $_POST["bat04_cell01_voltaj"];
$bat04_cell02_voltaj = $_POST["bat04_cell02_voltaj"];
$bat04_cell03_voltaj = $_POST["bat04_cell03_voltaj"];
$bat04_cell04_voltaj = $_POST["bat04_cell04_voltaj"];
$bat04_cell05_voltaj = $_POST["bat04_cell05_voltaj"];
$bat04_cell06_voltaj = $_POST["bat04_cell06_voltaj"];
$bat04_cell07_voltaj = $_POST["bat04_cell07_voltaj"];
$bat04_cell08_voltaj = $_POST["bat04_cell08_voltaj"];
$bat04_cell09_voltaj = $_POST["bat04_cell09_voltaj"];
$bat04_cell10_voltaj = $_POST["bat04_cell10_voltaj"];
$bat04_cell11_voltaj = $_POST["bat04_cell11_voltaj"];
$bat04_cell12_voltaj = $_POST["bat04_cell12_voltaj"];
$bat04_cell13_voltaj = $_POST["bat04_cell13_voltaj"];
$bat04_cell14_voltaj = $_POST["bat04_cell14_voltaj"];
$bat04_cell15_voltaj = $_POST["bat04_cell15_voltaj"];


$sql = "UPDATE pylontech SET 
voltaj_baterie = $bat04_voltaj_baterie,
procent_baterie = $bat04_procent_baterie,
temperatura_baterie = $bat04_temperatura_baterie,
cell01_voltaj = $bat04_cell01_voltaj,
cell02_voltaj = $bat04_cell02_voltaj,
cell03_voltaj = $bat04_cell03_voltaj,
cell04_voltaj = $bat04_cell04_voltaj,
cell05_voltaj = $bat04_cell05_voltaj,
cell06_voltaj = $bat04_cell06_voltaj,
cell07_voltaj = $bat04_cell07_voltaj,
cell08_voltaj = $bat04_cell08_voltaj,
cell09_voltaj = $bat04_cell09_voltaj,
cell10_voltaj = $bat04_cell10_voltaj,
cell11_voltaj = $bat04_cell11_voltaj,
cell12_voltaj = $bat04_cell12_voltaj,
cell13_voltaj = $bat04_cell13_voltaj,
cell14_voltaj = $bat04_cell14_voltaj,
cell15_voltaj = $bat04_cell15_voltaj
WHERE id_bat = 4";
$result = $conn->query($sql);





$conn->close();

?>
