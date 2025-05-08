<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = "avconexpo_db";

    $con = new mysqli($servername, $username, $password, $database);

    if($con->connect_error){
        die("connection failed : " .$con->connect_error);
    }
?>