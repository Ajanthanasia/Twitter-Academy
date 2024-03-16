<?php
include("databaseConnection.php");
$tweet = $_POST['tweet'];
$userId = $_POST['userId'];
$date = date('y-m-d h:i:s');
$query = "INSERT INTO tweet VALUES ('','$userId','','$date','$tweet','')";
$queryLoad = mysqli_query($conn, $query);
echo true;
