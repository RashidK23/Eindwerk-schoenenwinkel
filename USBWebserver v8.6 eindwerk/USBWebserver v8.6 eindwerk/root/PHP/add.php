<h2>Producten</h2>
    <table id="producten">

<?php
include 'Connection.php';
include 'sessionCheckUser.php';

$naam = $_POST['naam'];
$merk = $_POST['merk'];
$kleur = $_POST['kleur'];
$prijs = $_POST['prijs'];
$omschrijving = $_POST['omschrijving'];
$afbeelding = $_POST['afbeelding'];


$sql = "INSERT INTO 'tblschoenen' ('id', 'naam', 'merk', 'prijs', 'kleur', 'omschrijving', 'afbeelding') VALUES (NULL, '$naam', '$merk', '$prijs', '$kleur', '$omschrijving', '$afbeelding')";


if ($conn->query($sql) === TRUE) {
    header("Location: addPage.php?melding=Record toegevoegd");

} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>