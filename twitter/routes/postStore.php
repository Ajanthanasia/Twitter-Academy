<?php
include("databaseConnection.php");
$tweet = $_POST['tweet'];
$userId = $_POST['userId'];
$query = "INSERT INTO tweet VALUES ('','$userId','','','$tweet','')";
$queryLoad = mysqli_query($conn, $query);
echo true;
