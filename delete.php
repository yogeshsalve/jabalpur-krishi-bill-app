<?php
require('db.php');

if(isset($_POST['delete'])){

    $from =  $_POST['from1'];
    $to = $_POST['to1'];
	//connect to the database
	$mysqli = NEW MySQLi("localhost", "root", "", "jabalpur-agri-bill");

	
}

$query = "DELETE FROM agribill WHERE id between $from and $to"; 
$result = mysqli_query($connect,$query) or die ( mysqli_error());
header("Location: index.php"); 
?>