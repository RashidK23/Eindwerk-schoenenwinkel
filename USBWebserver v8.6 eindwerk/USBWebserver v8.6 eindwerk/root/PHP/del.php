<?php
    include 'Connection.php';
    include_once ("sessionCheckUser.php");
    
    if(isset($_GET['id']))
    $id = $_GET['id'];
    print "id=" . $id;
    $sql = "DELETE FROM 'tblschoenen' WHERE id = '".$id. "'";

    if($conn->query($sql) === TRUE)
    {
        echo "Record deleted succesfully";
        header('Location: addPage.php?melding=record verwijderd');

    }

    else
    {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();



    

?>