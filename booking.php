<?php

session_start();
require_once('connection.php');

$name = $_POST['name'];
$service_date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];
$address = $_POST['address'];



$q = "insert into booking (date_of_booking, service_date, name_of_user, time, phone, address) values (NOW(),'$service_date', '$name', '$time', '$phone', '$address') ";
mysqli_query($con, $q);
echo "<br>";
	echo "<br>";
	echo "Inserted SUCCESSFULLY $name";
	echo "<br>";
	echo "<br>";
	echo '<a href="index.php">back to home page</a>';
    
?>