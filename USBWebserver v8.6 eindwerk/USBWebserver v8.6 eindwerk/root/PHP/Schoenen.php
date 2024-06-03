
<?php

include 'Connection.php';
$sql = "SELECT * FROM 'tblschoenen'";
$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    
<!--  hier staan linken naar de icons die in de footer staan en voor de winkelmand -->

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

<!--Navigatiebar-->

<nav>
    <a href="Home.php">Home</a>
    <a href="Informatie.php">Informatie</a>
    <a href="Schoenen.php">Schoenen</a>
    <a href="Login.php">Login</a>
    <a href="winkelmandje.php"> <i class="fas fa-shopping-cart"></i></a>
</nav>



<br>

<div class="container2">

<div class="producten">

    <?php

    include 'Connection.php';
    $sql = "SELECT * FROM 'tblschoenen'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    ?>
    

    <div class="schoenen">
    <h4><?php echo $row['naam']; ?></h4>
    <a href="producten.php?productID=<?php echo $row['id']?>"><img id="imgSchoenen" alt="schoenen" src="afbeeldingen/<?php echo $row['afbeelding']; ?>"></a>
    <p><b>Omschrijving: </b><?php echo $row['omschrijving']; ?></p>
    <p><b>Kleur: </b><?php echo $row['kleur']; ?></p><br>
    <p><b>Maat: </b><?php echo $row['maat']; ?></p><br>
    <p class="prijs"><b>Prijs: </b>£ <?php echo $row['prijs']; ?></p>
    <a href="winkelmandje.php?productID=<?php echo $row['id']?>">Toevoegen aan winkelmandje</a>

    </div>
    <?php };
    $conn->close();?>

    </div>

    



    <div class="kolom2">
        <br><br><br>
        <img src="../foto's/schoenA.jpg" alt="Schoen 1">
        <br><br><br>
        <br>
        <h2>Nike</h2>
        <p>€99,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
        

    </div>

    <div class="kolom2">

        <img src="../foto's/schoenD.jpg" alt="Schoen 2">
        <h2>Nike</h2>
        <p>€119,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>


    </div>


    <div class="kolom2">

        <img src="../foto's/schoenE.jpg" alt="Schoen 3">
        <h2>Reebok </h2>
        <p>€49,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>


    <div class="kolom2">

        <img src="../foto's/schoenB.jpg" alt="Schoen 3">
        <h2>Under armour</h2>
        <p>€169,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>


    <div class="kolom2">

        <img src="../foto's/schoenC2.jpg" alt="Schoen 3">
        <br><br><br>
        <h2>Kaytan</h2>
        <p>€79,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>

    <div class="kolom2">

        <img src="../foto's/schoenF.jpg" alt="Schoen 1">
        <h2>Nike</h2>
        <p>€49,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>


    <div class="kolom2">

        <img src="../foto's/schoenG.jpg" alt="Schoen 1">
        <br><br>
        <br><br><br>
        <h2>Skechers</h2>
        <p>€129,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>        

    </div>




    <div class="kolom2">

        <img src="../foto's/schoenH.jpg" alt="Schoen 1" height="auto" width="300px">
        <br><br>
        <br><br><br>
        <h2>Under armour</h2>
        <p>€129,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>



    <div class="kolom2">

        <img src="../foto's/schoenI.jpg" alt="Schoen 1" height="auto" width="300px">
        <h2>Adidas</h2>
        <p>€149,99</p>
        <a href="winkelmandje.php">Toevoegen in de winkelmand</a>
    </div>

    
</div>

<br><br>

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
