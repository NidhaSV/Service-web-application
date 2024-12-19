<?php

session_start();

require_once('connection.php');

$name = $_POST['myCountry'];

        if($name == "Plumber"){
            header("Location: http://localhost/hackathon/plumber.html"); 
        }
        if ($name == "Painter"){   
            header("Location: http://localhost/hackathon/painter.html");    
        }
        if ($name == "Electrician"){
            header("Location: http://localhost/hackathon/electrician.html");    
        }
?>
