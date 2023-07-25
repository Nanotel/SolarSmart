<?php

require_once('connect.php'); 

echo '<head><meta http-equiv="refresh" content="120"></head>';


echo "</br></br>";
echo "<center><h2>Solar Smart - Monitorizare Casa Haotik</h2></center>";

?>

<link rel="stylesheet" type="text/css" href="style.css">

<?php

$sql_timestamp = "SELECT id_time, timestamp FROM time";
$result_time = $conn->query($sql_timestamp);

if ($result_time->num_rows > 0) {
    // output data of each row
    while($row = $result_time->fetch_assoc()) {
		$ultima_actualizare = $row["timestamp"];
    }
} else {
    echo "0 results";
}


// selectam temperaturile
$sql = "SELECT * FROM temperaturi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$temperatura_atelier = $row["atelier"];
		$temperatura_parter = $row["parter"];
		$temperatura_etaj = $row["etaj"];
		$temperatura_foisor = $row["foisor"];		
		$temperatura_exterior = $row["exterior"];
		$temperatura_meteo = $row["meteo"];
		$umiditate_parter = $row["uparter"];
		$umiditate_etaj = $row["uetaj"];
    }
} else {
    echo "0 results";
}


$sql_invertor = "SELECT * FROM invertor";
$result_invertor = $conn->query($sql_invertor);

if ($result_invertor->num_rows > 0) {
    // output data of each row
    while($row_invertor = $result_invertor->fetch_assoc()) {
		$voltaj_baterie = $row_invertor["voltaj_baterie"];
		$putere_consumata_ac = $row_invertor["putere_consumata_ac"];
		$incarcare_pv1 = $row_invertor["incarcare_pv1"];
		$putere_incarcare_baterii = $row_invertor["putere_incarcare_baterii"];
		$consum_aparent = $row_invertor["consum_aparent"];
		$procent_incarcare_baterii = $row_invertor["procent_incarcare_baterii"];
		$procent_consum = $row_invertor["procent_consum"];
		$mod_de_lucru = $row_invertor["mod_de_lucru"];	
		$voltaj_pv1 = $row_invertor["voltaj_pv1"];	
		$curent_descarcare_bat = $row_invertor["curent_descarcare_bat"];
    }
} else {
    echo "0 results";
}



$sql_prize = "SELECT * FROM prize";
$result_prize = $conn->query($sql_prize);

if ($result_prize->num_rows > 0) {
    // output data of each row
    while($row_prize = $result_prize->fetch_assoc()) {
		$tp01_power_mw = $row_prize["tp01_power_mw"];
		$tp02_power_mw = $row_prize["tp02_power_mw"];
		$tp03_power_mw = $row_prize["tp03_power_mw"];
		
    }
} else {
    echo "0 results";
}


// citim datele de la PYLONTECH 01

$sql_pylontech01 = "SELECT * FROM pylontech WHERE id_bat=1";
$result_pylontech01 = $conn->query($sql_pylontech01);

if ($result_pylontech01->num_rows > 0) {
    // output data of each row
    while($row_pylontech01 = $result_pylontech01->fetch_assoc()) {
		$bat01_voltaj_baterie = $row_pylontech01["voltaj_baterie"];
		$bat01_procent_baterie = $row_pylontech01["procent_baterie"];
		$bat01_temperatura_baterie = $row_pylontech01["temperatura_baterie"];
		$bat01_cell01_voltaj = $row_pylontech01["cell01_voltaj"];
		$bat01_cell02_voltaj = $row_pylontech01["cell02_voltaj"];
		$bat01_cell03_voltaj = $row_pylontech01["cell03_voltaj"];
		$bat01_cell04_voltaj = $row_pylontech01["cell04_voltaj"];
		$bat01_cell05_voltaj = $row_pylontech01["cell05_voltaj"];
		$bat01_cell06_voltaj = $row_pylontech01["cell06_voltaj"];
		$bat01_cell07_voltaj = $row_pylontech01["cell07_voltaj"];
		$bat01_cell08_voltaj = $row_pylontech01["cell08_voltaj"];
		$bat01_cell09_voltaj = $row_pylontech01["cell09_voltaj"];
		$bat01_cell10_voltaj = $row_pylontech01["cell10_voltaj"];
		$bat01_cell11_voltaj = $row_pylontech01["cell11_voltaj"];
		$bat01_cell12_voltaj = $row_pylontech01["cell12_voltaj"];
		$bat01_cell13_voltaj = $row_pylontech01["cell13_voltaj"];
		$bat01_cell14_voltaj = $row_pylontech01["cell14_voltaj"];
		$bat01_cell15_voltaj = $row_pylontech01["cell15_voltaj"];

    }
} else {
    echo "0 results";
}

$sql_pylontech02 = "SELECT * FROM pylontech WHERE id_bat=2";
$result_pylontech02 = $conn->query($sql_pylontech02);

if ($result_pylontech02->num_rows > 0) {
    // output data of each row
    while($row_pylontech02 = $result_pylontech02->fetch_assoc()) {
		$bat02_voltaj_baterie = $row_pylontech02["voltaj_baterie"];
		$bat02_procent_baterie = $row_pylontech02["procent_baterie"];
		$bat02_temperatura_baterie = $row_pylontech02["temperatura_baterie"];
		$bat02_cell01_voltaj = $row_pylontech02["cell01_voltaj"];
		$bat02_cell02_voltaj = $row_pylontech02["cell02_voltaj"];
		$bat02_cell03_voltaj = $row_pylontech02["cell03_voltaj"];
		$bat02_cell04_voltaj = $row_pylontech02["cell04_voltaj"];
		$bat02_cell05_voltaj = $row_pylontech02["cell05_voltaj"];
		$bat02_cell06_voltaj = $row_pylontech02["cell06_voltaj"];
		$bat02_cell07_voltaj = $row_pylontech02["cell07_voltaj"];
		$bat02_cell08_voltaj = $row_pylontech02["cell08_voltaj"];
		$bat02_cell09_voltaj = $row_pylontech02["cell09_voltaj"];
		$bat02_cell10_voltaj = $row_pylontech02["cell10_voltaj"];
		$bat02_cell11_voltaj = $row_pylontech02["cell11_voltaj"];
		$bat02_cell12_voltaj = $row_pylontech02["cell12_voltaj"];
		$bat02_cell13_voltaj = $row_pylontech02["cell13_voltaj"];
		$bat02_cell14_voltaj = $row_pylontech02["cell14_voltaj"];
		$bat02_cell15_voltaj = $row_pylontech02["cell15_voltaj"];
    }
} else {
    echo "0 results";
}


$sql_pylontech03 = "SELECT * FROM pylontech WHERE id_bat=3";
$result_pylontech03 = $conn->query($sql_pylontech03);

if ($result_pylontech03->num_rows > 0) {
    // output data of each row
    while($row_pylontech03 = $result_pylontech03->fetch_assoc()) {
		$bat03_voltaj_baterie = $row_pylontech03["voltaj_baterie"];
		$bat03_procent_baterie = $row_pylontech03["procent_baterie"];
		$bat03_temperatura_baterie = $row_pylontech03["temperatura_baterie"];
		$bat03_cell01_voltaj = $row_pylontech03["cell01_voltaj"];
		$bat03_cell02_voltaj = $row_pylontech03["cell02_voltaj"];
		$bat03_cell03_voltaj = $row_pylontech03["cell03_voltaj"];
		$bat03_cell04_voltaj = $row_pylontech03["cell04_voltaj"];
		$bat03_cell05_voltaj = $row_pylontech03["cell05_voltaj"];
		$bat03_cell06_voltaj = $row_pylontech03["cell06_voltaj"];
		$bat03_cell07_voltaj = $row_pylontech03["cell07_voltaj"];
		$bat03_cell08_voltaj = $row_pylontech03["cell08_voltaj"];
		$bat03_cell09_voltaj = $row_pylontech03["cell09_voltaj"];
		$bat03_cell10_voltaj = $row_pylontech03["cell10_voltaj"];
		$bat03_cell11_voltaj = $row_pylontech03["cell11_voltaj"];
		$bat03_cell12_voltaj = $row_pylontech03["cell12_voltaj"];
		$bat03_cell13_voltaj = $row_pylontech03["cell13_voltaj"];
		$bat03_cell14_voltaj = $row_pylontech03["cell14_voltaj"];
		$bat03_cell15_voltaj = $row_pylontech03["cell15_voltaj"];
    }
} else {
    echo "0 results";
}




$sql_pylontech04 = "SELECT * FROM pylontech WHERE id_bat=4";
$result_pylontech04 = $conn->query($sql_pylontech04);

if ($result_pylontech04->num_rows > 0) {
    // output data of each row
    while($row_pylontech04 = $result_pylontech04->fetch_assoc()) {
		$bat04_voltaj_baterie = $row_pylontech04["voltaj_baterie"];
		$bat04_procent_baterie = $row_pylontech04["procent_baterie"];
		$bat04_temperatura_baterie = $row_pylontech04["temperatura_baterie"];
		$bat04_cell01_voltaj = $row_pylontech04["cell01_voltaj"];
		$bat04_cell02_voltaj = $row_pylontech04["cell02_voltaj"];
		$bat04_cell03_voltaj = $row_pylontech04["cell03_voltaj"];
		$bat04_cell04_voltaj = $row_pylontech04["cell04_voltaj"];
		$bat04_cell05_voltaj = $row_pylontech04["cell05_voltaj"];
		$bat04_cell06_voltaj = $row_pylontech04["cell06_voltaj"];
		$bat04_cell07_voltaj = $row_pylontech04["cell07_voltaj"];
		$bat04_cell08_voltaj = $row_pylontech04["cell08_voltaj"];
		$bat04_cell09_voltaj = $row_pylontech04["cell09_voltaj"];
		$bat04_cell10_voltaj = $row_pylontech04["cell10_voltaj"];
		$bat04_cell11_voltaj = $row_pylontech04["cell11_voltaj"];
		$bat04_cell12_voltaj = $row_pylontech04["cell12_voltaj"];
		$bat04_cell13_voltaj = $row_pylontech04["cell13_voltaj"];
		$bat04_cell14_voltaj = $row_pylontech04["cell14_voltaj"];
		$bat04_cell15_voltaj = $row_pylontech04["cell15_voltaj"];
    }
} else {
    echo "0 results";
}



$conn->close();


echo "<div class='content'>";


$timestamp = time();
//echo "Timestamp: ",$timestamp ;
//echo "</br>Timestamp db: ",$ultima_actualizare ;
$dif_secunde = $timestamp-$ultima_actualizare;
$minute = (int)($dif_secunde / 60);
//echo "</br>M: ",$minute," ";


echo "<table border='0' cellpadding='30' cellspacing='0'><tr><td valign='top'>";

	# echo "Voltaj baterie : <b>", $voltaj_baterie, " V </b></br>";
	if ($minute<6) {echo "<img src='/monitorizare/icons/effekta-semafor-verde.png' title='".$minute."'/>";}
	else if ($minute<=10) {echo "<img src='/monitorizare/icons/effekta-semafor-galben.png' title='".$minute."'/>";}
	else {echo "<img src='/monitorizare/icons/effekta-semafor-rosu.png' title='".$minute."'/>";}

	$medie_baterii = ($bat01_procent_baterie + $bat02_procent_baterie + $bat03_procent_baterie + $bat04_procent_baterie)/4 ;
	
	//echo "<img src='/monitorizare/icons/effekta.png'/>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/baterie.png'/>";
		echo "</td><td style='padding-top:15px'>";
		echo "<b>", $voltaj_baterie, " V </br>", $medie_baterii, " % </b></br>";
	echo "</td></tr></table>";
	
		
	echo "</br>Cunsum [AC] : <b>", $putere_consumata_ac, " W </b></br>";
	echo "Incarcare PV1 : <b>", $incarcare_pv1, " W </b></br>";
	echo "Incarcare bat. : <b>", $putere_incarcare_baterii, " A </b></br>";
	echo "Descarcare bat. : <b>",$curent_descarcare_bat , " A </b></br>";
	echo "Consum aparent : <b>", $consum_aparent, " VA </b></br>";
	echo "</br>";
	echo "Procent consum : <b>", $procent_consum, " % </b></br>";
	echo "Mod : <b>", $mod_de_lucru, " </b></br>";
	echo "Incarcare bat. : <b style='color:#b38f00;'>", $procent_incarcare_baterii, " % </b></br>";
	echo "Tensiune panouri : <b>", $voltaj_pv1, " V </b></br>";



	



echo "</td><td valign='top'> ";


	echo "<img src='/monitorizare/icons/pylontech-01.png'/>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/voltmetru.png'/>";
		echo "</td><td>";

		echo "<b>", $bat01_voltaj_baterie, " </b> Volti";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/procent-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat01_procent_baterie, " </b> %";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/temperatura-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat01_temperatura_baterie, " </b> &deg;C";

	echo "</td></tr></table></br>";
	
	echo "<table border='0' cellpadding='0' cellspacing='0'><tr><td>";
		echo "Cell 01 <b>", $bat01_cell01_voltaj, " </b> V </br>";
		echo "Cell 02 <b>", $bat01_cell02_voltaj, " </b> V </br>";
		echo "Cell 03 <b>", $bat01_cell03_voltaj, " </b> V </br>";
		echo "Cell 04 <b>", $bat01_cell04_voltaj, " </b> V </br>";
		echo "Cell 05 <b>", $bat01_cell05_voltaj, " </b> V </br>";
		echo "Cell 06 <b>", $bat01_cell06_voltaj, " </b> V </br>";
		echo "Cell 07 <b>", $bat01_cell07_voltaj, " </b> V </br>";
		echo "Cell 08 <b>", $bat01_cell08_voltaj, " </b> V </br>";
		echo "Cell 09 <b>", $bat01_cell09_voltaj, " </b> V </br>";
		echo "Cell 10 <b>", $bat01_cell10_voltaj, " </b> V </br>";
		echo "Cell 11 <b>", $bat01_cell11_voltaj, " </b> V </br>";
		echo "Cell 12 <b>", $bat01_cell12_voltaj, " </b> V </br>";
		echo "Cell 13 <b>", $bat01_cell13_voltaj, " </b> V </br>";
		echo "Cell 14 <b>", $bat01_cell14_voltaj, " </b> V </br>";
		echo "Cell 15 <b>", $bat01_cell15_voltaj, " </b> V </br>";
	echo "</td></tr></table>";
	
		
	
echo "</td><td valign='top'>";	

	echo "<img src='/monitorizare/icons/pylontech-02.png'/>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/voltmetru.png'/>";
		echo "</td><td>";

		echo "<b>", $bat02_voltaj_baterie, " </b> Volti";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/procent-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat02_procent_baterie, " </b> %";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/temperatura-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat02_temperatura_baterie, " </b> &deg;C";

	echo "</td></tr></table></br>";
	
		echo "<table border='0' cellpadding='0' cellspacing='0'><tr><td>";
		echo "Cell 01 <b>", $bat02_cell01_voltaj, " </b> V </br>";
		echo "Cell 02 <b>", $bat02_cell02_voltaj, " </b> V </br>";
		echo "Cell 03 <b>", $bat02_cell03_voltaj, " </b> V </br>";
		echo "Cell 04 <b>", $bat02_cell04_voltaj, " </b> V </br>";
		echo "Cell 05 <b>", $bat02_cell05_voltaj, " </b> V </br>";
		echo "Cell 06 <b>", $bat02_cell06_voltaj, " </b> V </br>";
		echo "Cell 07 <b>", $bat02_cell07_voltaj, " </b> V </br>";
		echo "Cell 08 <b>", $bat02_cell08_voltaj, " </b> V </br>";
		echo "Cell 09 <b>", $bat02_cell09_voltaj, " </b> V </br>";
		echo "Cell 10 <b>", $bat02_cell10_voltaj, " </b> V </br>";
		echo "Cell 11 <b>", $bat02_cell11_voltaj, " </b> V </br>";
		echo "Cell 12 <b>", $bat02_cell12_voltaj, " </b> V </br>";
		echo "Cell 13 <b>", $bat02_cell13_voltaj, " </b> V </br>";
		echo "Cell 14 <b>", $bat02_cell14_voltaj, " </b> V </br>";
		echo "Cell 15 <b>", $bat02_cell15_voltaj, " </b> V </br>";

	echo "</td></tr></table>";	

echo "</td><td valign='top'>";	

		echo "<img src='/monitorizare/icons/pylontech-03.png'/>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/voltmetru.png'/>";
		echo "</td><td>";

		echo "<b>", $bat03_voltaj_baterie, " </b> Volti";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/procent-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat03_procent_baterie, " </b> %";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/temperatura-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat03_temperatura_baterie, " </b> &deg;C";

	echo "</td></tr></table></br>";
	
		echo "<table border='0' cellpadding='0' cellspacing='0'><tr><td>";
		echo "Cell 01 <b>", $bat03_cell01_voltaj, " </b> V </br>";
		echo "Cell 02 <b>", $bat03_cell02_voltaj, " </b> V </br>";
		echo "Cell 03 <b>", $bat03_cell03_voltaj, " </b> V </br>";
		echo "Cell 04 <b>", $bat03_cell04_voltaj, " </b> V </br>";
		echo "Cell 05 <b>", $bat03_cell05_voltaj, " </b> V </br>";
		echo "Cell 06 <b>", $bat03_cell06_voltaj, " </b> V </br>";
		echo "Cell 07 <b>", $bat03_cell07_voltaj, " </b> V </br>";
		echo "Cell 08 <b>", $bat03_cell08_voltaj, " </b> V </br>";
		echo "Cell 09 <b>", $bat03_cell09_voltaj, " </b> V </br>";
		echo "Cell 10 <b>", $bat03_cell10_voltaj, " </b> V </br>";
		echo "Cell 11 <b>", $bat03_cell11_voltaj, " </b> V </br>";
		echo "Cell 12 <b>", $bat03_cell12_voltaj, " </b> V </br>";
		echo "Cell 13 <b>", $bat03_cell13_voltaj, " </b> V </br>";
		echo "Cell 14 <b>", $bat03_cell14_voltaj, " </b> V </br>";
		echo "Cell 15 <b>", $bat03_cell15_voltaj, " </b> V </br>";

	echo "</td></tr></table>";	




	
echo "</td><td valign='top'>";	

		echo "<img src='/monitorizare/icons/pylontech-04.png'/>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/voltmetru.png'/>";
		echo "</td><td>";

		echo "<b>", $bat04_voltaj_baterie, " </b> Volti";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/procent-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat04_procent_baterie, " </b> %";

	echo "</td></tr></table>";
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		echo "<img src='/monitorizare/icons/temperatura-baterie.png'/>";
		echo "</td><td>";

		echo "<b>", $bat04_temperatura_baterie, " </b> &deg;C";

	echo "</td></tr></table></br>";
	
		echo "<table border='0' cellpadding='0' cellspacing='0'><tr><td>";
		echo "Cell 01 <b>", $bat04_cell01_voltaj, " </b> V </br>";
		echo "Cell 02 <b>", $bat04_cell02_voltaj, " </b> V </br>";
		echo "Cell 03 <b>", $bat04_cell03_voltaj, " </b> V </br>";
		echo "Cell 04 <b>", $bat04_cell04_voltaj, " </b> V </br>";
		echo "Cell 05 <b>", $bat04_cell05_voltaj, " </b> V </br>";
		echo "Cell 06 <b>", $bat04_cell06_voltaj, " </b> V </br>";
		echo "Cell 07 <b>", $bat04_cell07_voltaj, " </b> V </br>";
		echo "Cell 08 <b>", $bat04_cell08_voltaj, " </b> V </br>";
		echo "Cell 09 <b>", $bat04_cell09_voltaj, " </b> V </br>";
		echo "Cell 10 <b>", $bat04_cell10_voltaj, " </b> V </br>";
		echo "Cell 11 <b>", $bat04_cell11_voltaj, " </b> V </br>";
		echo "Cell 12 <b>", $bat04_cell12_voltaj, " </b> V </br>";
		echo "Cell 13 <b>", $bat04_cell13_voltaj, " </b> V </br>";
		echo "Cell 14 <b>", $bat04_cell14_voltaj, " </b> V </br>";
		echo "Cell 15 <b>", $bat04_cell15_voltaj, " </b> V </br>";

	echo "</td></tr></table>";		






	
echo "</td><td valign='top'> ";
	
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($tp01_power_mw>0) 
			{ echo "<img src='/monitorizare/icons/priza_on.png'/>";}
			else 
				{ echo "<img src='/monitorizare/icons/priza_off.png'/>";}
		echo "</td><td>";

		echo "<b>", round($tp01_power_mw/1000,0), " W </b></br>TPL01";

	echo "</td></tr></table>";
	
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($tp02_power_mw>0) 
			{ echo "<img src='/monitorizare/icons/priza_on.png'/>";}
			else 
				{ echo "<img src='/monitorizare/icons/priza_off.png'/>";}
		echo "</td><td>";

		echo "<b>", round($tp02_power_mw/1000,0), " W </b></br>TPL02";

	echo "</td></tr></table>";
	
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($tp03_power_mw>0) 
			{ echo "<img src='/monitorizare/icons/priza_on.png'/>";}
			else 
				{ echo "<img src='/monitorizare/icons/priza_off.png'/>";}
		echo "</td><td>";

		echo "<b>", round($tp03_power_mw/1000,0), " W </b></br>TPL03";

	echo "</td></tr></table>";
	
echo "</td><td valign='top'> ";	

	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($temperatura_atelier>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($temperatura_atelier>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $temperatura_atelier, " &deg;C </b></br>Atelier";

	echo "</td></tr></table>";
	
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($temperatura_parter>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($temperatura_parter>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $temperatura_parter, " &deg;C </b></br>Parter";

	echo "</td></tr></table>";
	
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($temperatura_etaj>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($temperatura_etaj>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $temperatura_etaj, " &deg;C </b></br>Etaj";


	echo "</td></tr></table>";	
	
	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($temperatura_foisor>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($temperatura_foisor>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $temperatura_foisor, " &deg;C </b></br>Foisor";

	echo "</td></tr></table>";	


	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($temperatura_exterior>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($temperatura_exterior>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $temperatura_exterior, " &deg;C </b></br>Exterior";

	echo "</td></tr></table>";	


	echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($temperatura_meteo>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($temperatura_meteo>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $temperatura_meteo, " &deg;C </b></br>Meteo";

	echo "</td></tr></table>";	
	
		echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($umiditate_parter>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($umiditate_parter>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $umiditate_parter, " % </b></br>Umididate Parter";

	echo "</td></tr></table>";	
	
		echo "<table border='0' cellpadding='4' cellspacing='0'><tr><td>";
		if ($umiditate_etaj>90) { echo "<img src='/monitorizare/icons/tempna.png'/>"; } 
			else { 
			if ($umiditate_etaj>23) {
					echo "<img src='/monitorizare/icons/tempup.png'/>";
				}
				else { echo "<img src='/monitorizare/icons/tempdown.png'/>"; }
			}
		echo "</td><td>";

		echo "<b>", $umiditate_etaj, " % </b></br>Umiditate etaj";

	echo "</td></tr></table>";	
	

echo "</td><td valign='top'> ";

	echo "<img src='/monitorizare/icons/generator.png'/></br>";
	echo "Status: N/A</br>";
	echo "Ore de functionare: N/A</br>";

	
echo "</td></tr>";
echo "</table>";



echo "</div>";


?>
