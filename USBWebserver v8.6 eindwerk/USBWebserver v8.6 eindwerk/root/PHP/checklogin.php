<?php

include_once("Connection.php");
session_start();

$result=0;
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['paswoord']);

$result = $conn->query("SELECT * FROM user WHERE gebruikersnaam='$user' AND paswoord='$pass'");

if($result->num_rows) {
    print "Welkom";
    session_start();
    $_SESSION["user"]=$user;
    header("Location: Login.php?melding=Je bent aangemeld");

}

else{
    header("Location: Login.php?melding=Gebruikersnaam of paswoord is niet correct");

}

$conn->close();

?>
