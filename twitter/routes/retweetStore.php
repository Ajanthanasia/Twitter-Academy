<?php
include("databaseConnection.php");
$userId = $_POST['userId'];
$tweetId = $_POST['tweetId'];
$date = date('y-m-d H:i:s');
$query = "INSERT INTO retweet VALUES ('$userId','$tweetId','$date')";
$load = mysqli_query($conn, $query);
echo 'Retweeted successfully!';
