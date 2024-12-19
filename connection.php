<?php
$con = mysqli_connect('localhost','root', '12345678');
if($con){
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'hackathon');
?>