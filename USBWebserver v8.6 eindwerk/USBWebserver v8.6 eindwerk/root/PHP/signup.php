<!--Rashid Khalidov--->
<!--6IF--->

<?php

include 'Connection.php';
include 'sessionCheckUser.php';

$result=0;
$user = $_POST['username'];
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];

if ($pass1!=$pass2)
{
    $melding= "Allebei de wachtwoorden zijn niet dezelfde";
    header("location: signupForm.php?melding=$melding");
}

else
{
    $result = $conn->query("SELECT * FROM user WHERE gebruikersnaam='$user'");

    if ($result->num_rows==0)
    {

        $sql = "INSERT INTO user (gebruikersnaam, paswoord) VALUES ('$user', '$pass1')";

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

     header("Location: signupForm.php?melding=$melding");
     $conn->close();
}


?>