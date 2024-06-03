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

    <!--  hier staan linken naar de icons die in de footer staan en voor de winkelmand -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/Eindwerk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        <a href="winkelmandje.php"> <i class="fas fa-shopping-cart"></i></a>
    </nav>
    </header>
</head>


<body>
    <div class="container3">
        <div class="logo">
            <img src="../foto's/m logo.jpg" alt="Logo">
        </div>

        <form action="checklogin.php" method="post" autocomplete="off">

            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Wachtwoord:</label>
            <input type="password" id="paswoord" name="paswoord" required>


            <input class="submit" type="submit" value="Inloggen">

            <p>Heb je nog geen account?<a href="signup.php">Sign Up</a></p>


            <?php 
                if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
                <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
            
        </form>
    </div>
</body>
</html>


<footer>
    <h1>Muhajeer</h1>
    E-mail: Muhajeer@gmail.com
    <br><br>
    Telefoon: +3256778543

    <br><br>

        
        <a href="https://web.whatsapp.com/#"><i class="fa fa-whatsapp" style="font-size:36px"></i>
        <a href="https://www.facebook.com/"><i class="fa fa-facebook-official" style="font-size:36px"></i>
        

        
        <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram" style="font-size:36px"></i>
        <a href="https://www.messenger.com/?locale=nl_NL"><i class='fab fa-facebook-messenger' style='font-size:36px'></i>
</footer>

</body>



