<?php

include_once("connection.php");
$result=0;
$user = $_POST['username'];
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];

if ($pass1!=$pass2)
{
    $melding= "Allebei de wachtwoorden zijn niet dezelfde";
    header("Location: signupForm.php?melding=$melding");
}

else
{
    $result = $conn->query("SELECT * FROM users WHERE gebruikersnaam='$user'");

    if ($result->num_rows==0)
    {

        $sql = "INSERT INTO users (gebruikersnaam, paswoord) VALUES ('$user', '$pass1')";

        if ($conn->query($sql) === TRUE) {
            $melding="Account is toegevoegd";
            session_start();
            $_SESSION["user"]=$user;
        }
    else{
        $melding= "Error: " . $sql . "<br>" . $conn->error;

    }
     }

     else
     {
        $melding= "De gebruikersnaam bestaat al";

     }

     header("Location: signupform.php?melding=$melding");
     $conn->close();
}


?>