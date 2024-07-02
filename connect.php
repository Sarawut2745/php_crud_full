<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "crud_app";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }
 
?>