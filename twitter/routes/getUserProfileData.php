<?php
include("databaseConnection.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    $query = "SELECT * FROM user where id=4";
    $queryLoad = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($queryLoad);
    $username = $user['username'];
    $mail = $user['mail'];
    header("Location: ./../Pages/profile/profile.php?id=$id&name=$username&mail=$mail");
}
