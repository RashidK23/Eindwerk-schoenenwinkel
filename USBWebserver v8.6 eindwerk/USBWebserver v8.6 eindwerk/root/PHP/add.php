<h2>Producten</h2>
    <table id="producten">

<?php
include 'Connection.php';
include_once ("sessionCheckUser.php");

$naam = $_POST['naam'];
$merk = $_POST['merk'];
$kleur = $_POST['kleur'];
$prijs = $_POST['prijs'];
$omschrijving = $_POST['omschrijving'];
$afbeelding = $_POST['afbeelding'];
$maat = $_POST['maat'];


$sql = "INSERT INTO 'tblschoenen' ('id', 'naam', 'merk', 'omschrijving', 'prijs', 'kleur', 'omschrijving', 'maat', 'afbeelding', ) VALUES (NULL, '$naam', '$merk', '$omschrijving', '$prijs', '$kleur', '$omschrijving', '$maat', '$afbeelding')";


if ($conn->query($sql) === TRUE) {
    header("Location: addPage.php?melding=Record toegevoegd");

} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();



    
?>