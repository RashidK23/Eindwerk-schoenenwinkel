<?php 
    if(isset($_GET['melding'])){
        $melding=$_GET['melding'];
       ?><script>alert ("<?php print $melding;?>")</script> 
       <?php

include 'Connection.php';
$sql = "SELECT * FROM 'tblschoenen'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><img src="afbeeldingen/<?php echo $row['afbeelding'];?>" ></td>
        <td><?php echo $row['naam']; ?></td>
        <td><?php echo $row['merk']; ?></td>
        <td><?php echo $row['kleur']; ?></td>
        <td><?php echo $row['prijs']; ?></td>
        <td><?php echo $row['omschrijving']; ?></td>
        <td><?php echo $row['maat']; ?></td>
        <td><button id="del" onclick="location.href='del.php?id=<?php echo $row['id']?>'">DELETE</button></td>

    </tr>

<?php
};
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten toevoegen</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">

    <h2>Records toevoegen</h2>
    <div class="add">
        <form action="add.php" method="post" enctype="multipart/form-data">
            <table >
             
                <tr>
                    <td>Naam:  </td>
                    <td><input type="text" name="naam" id="naam"></td>
                </tr>
                <tr>
                    <td>Merk: </td>
                    <td><input type="text" name="merk" id="merk"></td>
                </tr>
                <tr>
                    <td>Kleur:  </td>
                    <td><input type="text" name="kleur" id="kleur"></td>
                </tr>
                <tr>
                    <td>Prijs: </td>
                    <td><input type="number" name="prijs" id="prijs"> EUR</td>
                </tr>
                <tr>
                    <td>Beschrijving: </td>
                    <td><textarea name="omschrijving" id="omschrijving" style="resize: none;" cols="30" rows="10" class="textarea"></textarea></td>
                </tr>
                    <td>Afbeelding: </td>
                    <td><input type="text" name="afbeelding" id="afbeelding"></td>
                </tr>

                    <td>maat: </td>
                    <td><input type="text" name="maat" id="maat"></td>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Toevoegen"></td>
                </tr>
               
            </table>
        </form>
    </div>
    <h2>Producten</h2>
        <table id="producten">

        </table>

        <!------------------------------ FOOTER ------------------------------>
   <?php 
     // include 'footer.php';
    ?>
</div>

</body>
</html>