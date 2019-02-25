<?php

$user = 'root';
$password = 'root';
$db = 'mtc';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$conn = new mysqli(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//else echo "success";
?>
