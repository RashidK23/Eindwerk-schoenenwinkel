<!--Rashid Khalidov--->
<!--6IF--->

<?php

$klantID="";


if(isset($_GET['productID'])){
    include 'Connection.php';
    include 'sessionCheckUser.php';
        
    $id = $_GET['productID'];
    print "id=". $id;
    $sql = "DELETE FROM tblwinkelmand WHERE productID = '$id' AND klantID='$klantID'";

    if ($conn->query($sql) === TRUE)
    {
        header('location: winkelmandje.php');
    }
    else
    {
        echo "Error deleting record: " . $conn->error;

    }

    $conn->close();
}

?>