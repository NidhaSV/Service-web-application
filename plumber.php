<?php
session_start();
require_once("connection.php");
require_once("class/workers.php")
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="worker.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<!---------BODY starts here------------->

<body>
<?php include('navbar.php') ?>

     <div id="topsection">
            <h2 style="text-align:center">Plumber Details</h2> 
    </div>
    <div class="container">
    <?php
    $workers = new Workers($con);
    $workers->generate_list('Plumber');
    ?>

    </div>

</div>

<!----------------------JAVA SCRIPT-->
<script src="js/page.js"></script>
</body>
</html>