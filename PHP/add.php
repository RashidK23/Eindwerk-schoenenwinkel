<h2>Producten</h2>
    <table id="producten">

<?php
include 'connetion.php';

$naam = $_POST['naam'];
$merk = $_POST['merk'];
$kleur = $_POST['kleur'];
$prijs = $_POST['prijs'];
$omschrijving = $_POST['omschrijving'];
$afbeelding = $_POST['afbeelding'];


$sql = "INSERT INTO 'shop' , 'tblSchoenen' ('id', 'naam', 'merk', 'omschrijving', 'prijs', 'kleur', 'afbeelding') VALUES (NULL, '$naam', '$merk', '$omschrijving', '$prijs', '$kleur', '$omschrijving')";


if ($conn->query($sql) === TRUE) {
    header("Location: addpage.php?melding=Record toegevoegd");

} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();



    
?>