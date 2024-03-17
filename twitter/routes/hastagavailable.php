<?php
include("databaseConnection.php");
$tag = $_POST['tag'];
$query_forhashtag = "SELECT * FROM hashtag_list WHERE hashtag like '%$tag%'";
$forhashtag = mysqli_query($conn, $query_forhashtag);
$hashtag = mysqli_fetch_assoc($forhashtag);
if (mysqli_fetch_assoc($forhashtag)) {
        echo "like";
    
} else {
    echo "unlike";
}
?>
