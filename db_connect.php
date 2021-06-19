<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbnew";

    $conn = new mysqli($servername, $username, $password, $database);
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?>