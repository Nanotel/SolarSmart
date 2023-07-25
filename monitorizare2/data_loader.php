<?php

require_once('connect.php'); 

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
		$temperatura_dormitor_mic = $row["dormitor_mic"];
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





$medie_baterii = ($bat01_procent_baterie + $bat02_procent_baterie + $bat03_procent_baterie + $bat04_procent_baterie)/4 ;
if ($medie_baterii>100) $medie_baterii=100;

$timestamp = time();
$dif_secunde = $timestamp-$ultima_actualizare;
$dif_minute = (int)($dif_secunde / 60);



// Interogați tabela pentru a prelua datele din 2023
$sql = "SELECT id, anul, luna, consumul FROM consum_lunar WHERE anul = 2023 ORDER BY id ASC";
$result = $conn->query($sql);

	// Procesați rezultatele și creați structura de date
	$data_anul_2023 = [
	  "labels" => [],
	  "values" => []
	];

	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
		$data_anul_2023['labels'][] = $row['luna'];
		$data_anul_2023['values'][] = $row['consumul'];
	  }
	} else {
	  echo "0 results";
	}

// Interogați tabela pentru a prelua datele din 2022
$sql = "SELECT id, anul, luna, consumul FROM consum_lunar WHERE anul = 2022 ORDER BY id ASC";
$result = $conn->query($sql);

	// Procesați rezultatele și creați structura de date
	$data_anul_2022 = [
	  "labels" => [],
	  "values" => []
	];

	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
		$data_anul_2022['labels'][] = $row['luna'];
		$data_anul_2022['values'][] = $row['consumul'];
	  }
	} else {
	  echo "0 results";
	}

// Interogați tabela pentru a prelua datele din 2021
$sql = "SELECT id, anul, luna, consumul FROM consum_lunar WHERE anul = 2021 ORDER BY id ASC";
$result = $conn->query($sql);

	// Procesați rezultatele și creați structura de date
	$data_anul_2021 = [
	  "labels" => [],
	  "values" => []
	];

	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
		$data_anul_2021['labels'][] = $row['luna'];
		$data_anul_2021['values'][] = $row['consumul'];
	  }
	} else {
	  echo "0 results";
	}
	
// Interogați tabela pentru a prelua datele din 2020
$sql = "SELECT id, anul, luna, consumul FROM consum_lunar WHERE anul = 2020 ORDER BY id ASC";
$result = $conn->query($sql);

	// Procesați rezultatele și creați structura de date
	$data_anul_2020 = [
	  "labels" => [],
	  "values" => []
	];

	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
		$data_anul_2020['labels'][] = $row['luna'];
		$data_anul_2020['values'][] = $row['consumul'];
	  }
	} else {
	  echo "0 results";
	}
	
// Interogați tabela pentru a prelua datele din 2019
$sql = "SELECT id, anul, luna, consumul FROM consum_lunar WHERE anul = 2019 ORDER BY id ASC";
$result = $conn->query($sql);

	// Procesați rezultatele și creați structura de date
	$data_anul_2019 = [
	  "labels" => [],
	  "values" => []
	];

	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
		$data_anul_2019['labels'][] = $row['luna'];
		$data_anul_2019['values'][] = $row['consumul'];
	  }
	} else {
	  echo "0 results";
	}

// Interogați tabela pentru a prelua datele din 2018
$sql = "SELECT id, anul, luna, consumul FROM consum_lunar WHERE anul = 2018 ORDER BY id ASC";
$result = $conn->query($sql);

	// Procesați rezultatele și creați structura de date
	$data_anul_2018 = [
	  "labels" => [],
	  "values" => []
	];

	if ($result->num_rows > 0) {
	  while ($row = $result->fetch_assoc()) {
		$data_anul_2018['labels'][] = $row['luna'];
		$data_anul_2018['values'][] = $row['consumul'];
	  }
	} else {
	  echo "0 results";
	}


// date json baterii

$data_pylontech_01 = [
  "labels" => ["Cel 01", "Cel 02", "Cel 03", "Cel 04", "Cel 05", "Cel 06", "Cel 07", "Cel 08", "Cel 09", "Cel 10", "Cel 11", "Cel 12", "Cel 13", "Cel 14", "Cel 15"],
  "values" => [
  		$bat01_cell01_voltaj, 
  		$bat01_cell02_voltaj, 
  		$bat01_cell03_voltaj, 
  		$bat01_cell04_voltaj, 
  		$bat01_cell05_voltaj, 
  		$bat01_cell06_voltaj, 
  		$bat01_cell07_voltaj, 
  		$bat01_cell08_voltaj, 
  		$bat01_cell09_voltaj, 
  		$bat01_cell10_voltaj, 
  		$bat01_cell11_voltaj, 
  		$bat01_cell12_voltaj, 
  		$bat01_cell13_voltaj, 
  		$bat01_cell14_voltaj, 
  		$bat01_cell15_voltaj]
];

$data_pylontech_02 = [
  "labels" => ["Cel 01", "Cel 02", "Cel 03", "Cel 04", "Cel 05", "Cel 06", "Cel 07", "Cel 08", "Cel 09", "Cel 10", "Cel 11", "Cel 12", "Cel 13", "Cel 14", "Cel 15"],
  "values" => [
  		$bat02_cell01_voltaj, 
  		$bat02_cell02_voltaj, 
  		$bat02_cell03_voltaj, 
  		$bat02_cell04_voltaj, 
  		$bat02_cell05_voltaj, 
  		$bat02_cell06_voltaj, 
  		$bat02_cell07_voltaj, 
  		$bat02_cell08_voltaj, 
  		$bat02_cell09_voltaj, 
  		$bat02_cell10_voltaj, 
  		$bat02_cell11_voltaj, 
  		$bat02_cell12_voltaj, 
  		$bat02_cell13_voltaj, 
  		$bat02_cell14_voltaj, 
  		$bat02_cell15_voltaj]
];

$data_pylontech_03 = [
  "labels" => ["Cel 01", "Cel 02", "Cel 03", "Cel 04", "Cel 05", "Cel 06", "Cel 07", "Cel 08", "Cel 09", "Cel 10", "Cel 11", "Cel 12", "Cel 13", "Cel 14", "Cel 15"],
  "values" => [
  		$bat03_cell01_voltaj, 
  		$bat03_cell02_voltaj, 
  		$bat03_cell03_voltaj, 
  		$bat03_cell04_voltaj, 
  		$bat03_cell05_voltaj, 
  		$bat03_cell06_voltaj, 
  		$bat03_cell07_voltaj, 
  		$bat03_cell08_voltaj, 
  		$bat03_cell09_voltaj, 
  		$bat03_cell10_voltaj, 
  		$bat03_cell11_voltaj, 
  		$bat03_cell12_voltaj, 
  		$bat03_cell13_voltaj, 
  		$bat03_cell14_voltaj, 
  		$bat03_cell15_voltaj]
];

$data_pylontech_04 = [
  "labels" => ["Cel 01", "Cel 02", "Cel 03", "Cel 04", "Cel 05", "Cel 06", "Cel 07", "Cel 08", "Cel 09", "Cel 10", "Cel 11", "Cel 12", "Cel 13", "Cel 14", "Cel 15"],
  "values" => [
  		$bat04_cell01_voltaj, 
  		$bat04_cell02_voltaj, 
  		$bat04_cell03_voltaj, 
  		$bat04_cell04_voltaj, 
  		$bat04_cell05_voltaj, 
  		$bat04_cell06_voltaj, 
  		$bat04_cell07_voltaj, 
  		$bat04_cell08_voltaj, 
  		$bat04_cell09_voltaj, 
  		$bat04_cell10_voltaj, 
  		$bat04_cell11_voltaj, 
  		$bat04_cell12_voltaj, 
  		$bat04_cell13_voltaj, 
  		$bat04_cell14_voltaj, 
  		$bat04_cell15_voltaj]
];


$conn->close();



