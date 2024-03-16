<?php
session_start();
include("databaseConnection.php");
$tweetId = $_GET['tid'];
$query = "SELECT 
        tweet.content as content,
        user.profile_picture as profilePicture,
        user.username as username,
        tweet.id as tweetId
        FROM tweet JOIN user ON tweet.id_user = user.id
        WHERE tweet.id = $tweetId";
$getTweetFromDB = mysqli_query($conn, $query);
$tweet = mysqli_fetch_assoc($getTweetFromDB);
$_SESSION['tweet'] = $tweet;
header("Location: ./../Pages/retweet/index.php");
