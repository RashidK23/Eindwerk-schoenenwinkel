<?php
$host="localhost"; 
$username="root";
$password="usbw";
$db="Muhajeer";

$conn = new mysqli($host, $username, $password,$db);

if (!conn) {
  die("connectie mislukt: " . mysqli_connect_error());

}
