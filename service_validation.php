<?php
session_start();
require_once('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];



$q = " select * from service  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
 
	$sql = " select * from service  where username = '$username' && password = '$password' ";
    $result = $con->query($sql);
    echo "Welcome $username";

    header("Location: dharmeshbhai.php");

	$_SESSION['username'] = $username;
}
else{
	echo "<br>";
	echo "<br>";
	echo("ACCOUNT NOT REGISTERED !");
	echo "<br>";
	echo "<br>";
	echo "OR";
	echo "<br>";
	echo "<br>";
	echo "	INVALID CREDENTIALS ";
	echo "<br>";
	echo "<br>";
	echo "PLEASE TRY AGAIN  ";
	echo '<a href="service_login.html">REGISTER HERE</a>';
	
}