<?php
$host="localhost"; 
$username="root";
$password="usbw";
$db="muhajeer";

$conn = new mysqli($host, $username, $password,$db);

if ($conn->connect_error) {
  die("connectie mislukt: " . $conn->connect_error);

}

?>