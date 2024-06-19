<?php

include 'Connection.php';
include 'sessionCheckUser.php';

// session_start();

$result=0;
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['paswoord']);

$result = $conn->query("SELECT * FROM user WHERE gebruikersnaam='$user' AND paswoord='$pass'");

if($result->num_rows) {
    print "Welkom";
    // session_start();
    $row = $result->fetch_assoc();
    $_SESSION["user"]=$user;
    $_SESSION["klantID"]=$row["ID"];
    print "user " . $_SESSION["user"];
    print "klantid " . $_SESSION["klantID"];

    header("Location: Home.php?melding=Je bent aangemeld");

}

else{
    header("Location: Login.php?melding=Gebruikersnaam of paswoord is niet correct");

}

$conn->close();

?>
