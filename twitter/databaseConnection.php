<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "twitterv";
    // $db="twitterdb";


    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "connection success..."
?>
