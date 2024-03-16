<?php
include("databaseConnection.php");
$tweetId = $_POST['tweetId'];
$userId = $_POST['userId'];
$date = date('d-m-y h:i:s');
$queryCheckLikedFromDB = "SELECT * FROM likes WHERE id_user = $userId AND id_tweet = $tweetId";
$likedCheck = mysqli_query($conn, $queryCheckLikedFromDB);
$liked = mysqli_fetch_assoc($likedCheck);
if ($liked == null) {
    $queryLike = "INSERT INTO likes values('$userId','$tweetId','$date')";
    $queryLoad = mysqli_query($conn, $queryLike);
    echo 1;
} else {
    echo 0;
}
