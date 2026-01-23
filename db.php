<?php
$servername = "localhost";
$username = "root"; // default in XAMPP
$password = "";  // default is empty
$dbname = "studentdb"; // you will create this in phpMyAdmin

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("connection failed: ". $connect->connect_error);
}
?>