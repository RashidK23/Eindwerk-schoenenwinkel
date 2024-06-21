<?php
include 'Connection.php';
include 'sessionCheckUser.php';

if(isset($klantID))
{
    $sql = "SELECT * FROM tblwinkelmand WHERE klantID = '$klantID'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    {
        $productid=$row['productid'];
        $aantal=$row['aantal'];
        date_default_timezone_get("Europe/Brussels");
        $datum=date("Y-m-d");
        $sqlInsert="INSERT INTO tblbestelling (bestelID, datum, klantID, productID, aantal) VALUES (NULL, '$datum', '$klantID', '$productid', '$aantal')";

    }

    if ($conn->query($sqlInsert) === TRUE)
    {

    $sqlDel = "DELETE FROM tblwinkelmand WHERE klantID = '$klantID'";

    if ($conn->query($sqlDel) === TRUE)
    {
        header('Location: winkelmandje.php?melding=Bedankt voor uw aankoop');

    }
    else
    {
        echo "Error: " . $conn->error;
    }
}
else
{
    echo "Error: " . $conn->error;
}
$conn->close();
}

else
{
    print "fout";
}

?>