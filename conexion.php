<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="negocio";

$con = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo "APP: " . mysqli_connect_error();
    };
    
    ?>
