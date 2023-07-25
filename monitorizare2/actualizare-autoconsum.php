<?php

require_once('connect.php');

setlocale(LC_TIME, 'ro_RO.UTF-8');

// Definim cheia
$keya = "KEYE UNICA CARE SA IMPIEDICE UPDATEUL NEAUTORIZAT";

// Preluam data curenta
$dataCurenta = new DateTime();
$lunaCurenta = strftime('%b', $dataCurenta->getTimestamp());
$lunaCurenta = $dataCurenta->format('M');
$anulCurent = $dataCurenta->format('Y');
$dataAfisare = $dataCurenta->format('M Y');

// Verificam daca s-a trimis formularul
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kw = $_POST["kw"];
    $key = $_POST["key"];

    // Verificam daca cheia este corecta
    if ($key == $keya) {
        // Facem update in baza de date
        $sql = "UPDATE consum_lunar SET consumul = '".$kw."' WHERE luna = '".$lunaCurenta."' AND anul = '".$anulCurent."'";
		
		
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("isi", $kw, $lunaCurenta, $anulCurent);

            if ($stmt->execute()) {
                echo "Update efectuat cu succes!";
            } else {
                echo "Eroare la efectuarea update-ului: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Eroare la pregatirea interogarii: " . $conn->error;
        }
    } else {
        echo "Cheia introdusa nu este corecta.";
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular update consum</title>
</head>
<body>
    <h1>Update consum lunar</h1>
    <p>Data curenta: <?php echo $dataAfisare; ?></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="kw">Valoare consum (kW):</label>
        <input type="number" name="kw" id="kw" required>
        <br><br>
        <label for="key">Introduceti cheia:</label>
        <input type="password" name="key" id="key" required>
        <br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>

