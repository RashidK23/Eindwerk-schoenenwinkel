<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Producten Webshop</title> 

</head>
<body>
<!------------------------------ NAVIGATIEBALK ------------------------------>

<!------------------------------ PRODUCTEN  ------------------------------>
<div class="container">
    <div class="producten">
        <h2>Schoenen</h2>     
    </div>

<div class="producten">
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM tblschoenen";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    ?>
     
     <div class="schoenen">
        <h4><?php echo $row['naam']; ?></h4>
        <img id="imgSchoenen" alt="schoenen" src="afbeeldingen/<?php echo $row['afbeelding']; ?>">
        

        <p><b>Omschrijving: </b><?php echo $row['naam']; ?></p>
        <p><b>Kleur: </b><?php echo $row['kleur']; ?></p>
        <p><b><b>Merk</b>: </b><?php echo $row['merk']; ?></p>
        <p class="prijs"><b>Prijs: </b>£ <?php echo $row['prijs']; ?></p>

     </div>
     <?php };
     $conn->close();?>

    
   
<!------------------------------ FOOTER ------------------------------>
   <?php 
      include 'footer.php';
    ?>

</div>

</body>
</html>