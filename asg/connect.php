<?php
$DB_Server = "localhost";
$DB_Username = "root";
$DB_Password = "";
$DB_Name = "mahasiswa";


$conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password, $DB_Name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

