<!--Rashid Khalidov--->
<!--6IF--->

<?php

include 'Connection.php';
include 'sessionCheckUser.php';

if($user!="Login")
{
   

    if (isset($_GET["productID"]))
    {
        $product=$_GET['productID'];
        print "productid= ".$product;
        print "klantid= ".$klantID;

        $aantal=1;
        
        $sql = "INSERT INTO tblwinkelmand (ID, klantID, productID, aantal) VALUES (NULL, '$klantID', '$product', '$aantal')";
        
        if ($conn->query($sql) === TRUE) {
            $melding = "Product is toegevoegd!";
            header("Location: winkelmandje.php?melding=$melding");
        }

        else {
            echo "Error: " . $sql . "<br>" . $conn->error;

        }
    }

}


?>


<h1>Winkelmand</h1>

<?php

if($user!="Login")
{
    $sql = "SELECT * FROM tblwinkelmand WHERE klantID='$klantID'";
    $totaal=0;
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $product=$row['productID'];
        echo "Product: ".$row['productID'];
        $sql2 = "SELECT * FROM tblschoenen WHERE id='$product'";
        $result2 = $conn->query($sql2);
        while($row2 = $result2->fetch_assoc()) {?>
        <?php echo $row2['naam']; ?>
        <img id= "imgSchoenen" alt="schoenen" src="../afbeeldingen/<?php echo $row2['afbeelding']; ?>">
        <b>Omschrijving: </b><?php echo $row2['omschrijving']; ?>
        <b>Kleur: </b>£ <?php echo $row2['kleur'];
        $totaal+=$row2['prijs'];
        echo " Aantal: ".$row['aantal'];?>
        
        <a href="verwijderwinkelmand.php?productID=<?php echo $row['productID']?>"><button>Verwijderen</button></a><br><hr>
        <?php

        }
    }

    $conn->close();?>

    <h4>Totale prijs: <?php print $totaal;?> euro</h4>
    <?php if ($totaal>0){?>
        <button onclick="Location.href='Bestelling.php'">Koop</button>
        <?php
    }
}

else{
    print "Je moet eerst inloggen om winkelmand te gebruiken!";

}

