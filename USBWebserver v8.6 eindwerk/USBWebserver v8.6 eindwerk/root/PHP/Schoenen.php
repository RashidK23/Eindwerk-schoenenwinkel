
<?php

include 'Connection.php';
$sql = "SELECT * FROM 'tblschoenen'";
$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schoenen</title>
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

<div class="container2">


    <div class="kolom2">

        <img src="../foto's/schoenA.jpg" alt="Schoen 1">
        <h3>Nike schoenen</h3>
        <p>€99,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
        

    </div>

    <div class="kolom2">

        <img src="../foto's/schoenD.jpg" alt="Schoen 2">
        <h3>Nike schoenen</h3>
        <p>€119,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>


    </div>


    <div class="kolom2">

        <img src="../foto's/schoenE.jpg" alt="Schoen 3">
        Nike schoenen
        <p>€49,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>


    <div class="kolom2">

        <img src="../foto's/schoenB.jpg" alt="Schoen 3">
        Nike schoenen
        <p>€169,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>


    <div class="kolom2">

        <img src="../foto's/schoenC2.jpg" alt="Schoen 3">
        Nike schoenen
        <p>€79,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>

    <div class="kolom2">

        <img src="../foto's/schoenF.jpg" alt="Schoen 1">
        <h3>Nike schoenen</h3>
        <p>€49,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>


    <div class="kolom2">

        <img src="../foto's/schoenG.jpg" alt="Schoen 1">
        <h3>Nike schoenen</h3>
        <p>€129,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>        

    </div>




    <div class="kolom2">

        <img src="../foto's/schoenA.jpg" alt="Schoen 1" height="auto" width="300px">
        <h3>Nike schoenen</h3>
        <p>€129,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>



    <div class="kolom2">

        <img src="../foto's/schoenA.jpg" alt="Schoen 1" height="auto" width="300px">
        <h3>Nike schoenen</h3>
        <p>€149,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>

    
</div>

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

<?php 
$conn->close();?>

</body>
</html>
