<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jabalpur-agri-bill";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    }
// echo "Connected successfully";
?>