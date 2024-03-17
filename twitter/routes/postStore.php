<?php
include("databaseConnection.php");
$tweet = $_POST['tweet'];
$userId = $_POST['userId'];
$date = date('y-m-d H:i:s');
$query = "INSERT INTO tweet VALUES ('','$userId','','$date','$tweet','')";
$queryLoad = mysqli_query($conn, $query);
if($queryLoad){
    if (isset($hashtagsArray) && is_array($hashtagsArray)) {
        foreach ($hashtagsArray as $hashtag) {
            $queryhasgtag = "INSERT INTO hashtag_list VALUES ('$hashtag','')";
            mysqli_query($conn, $queryhasgtag);
        }
        echo "ok success"; 
    }
    echo "ok success";
}
else{
    echo false;
}
