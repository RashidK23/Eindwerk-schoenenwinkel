<?php
$user="Login";
session_start();
if (isset($_SESSION["user"]))
{
   $user=$_SESSION["user"];
}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/Eindwerk.css">
</head>
<body>
    <header>
        <h1>MUHAJEER</h1>
    </header>
    <nav>
        <a href="Home.php">Home</a>
        <a href="Informatie.php">Informatie</a>
        <a href="Schoenen.php">Schoenen</a>
        <a href="Login.php">Login</a>
    </nav>
    </header>

    

    </style>

</head>
<body>

    <?php
     include_once("header.php");

    ?>

    <div class="container3">
        <div class="logo">
            <img src="../foto's/m logo.jpg" alt="Logo">
        </div>

        <form action="signup.php">

            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password1" name="password1" required>

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password2" name="password2" required>


            <input class="submit" type="submit" value="Inloggen">

            <p>Heb je al een account?<a href="Login.php">Log in</a></p>

            <?php
            if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
            <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
            
        </form>
    </div>
</body>
</html>


<footer>
    <h2>Muhajeer</h2>
    E-mail: Muhajeer@gmail.com
    <br><br>
    Telefoon: +3256778543
</footer>

</body>