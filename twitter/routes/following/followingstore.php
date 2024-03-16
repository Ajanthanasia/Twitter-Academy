<?php
include("../databaseConnection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["action"]) == 'store') {
        $Id_follow = $_POST["Id_follow"];
        $userId = $_POST["userId"];
        $creation_time = date("Y-m-d H:i:s");
        
        $query = "INSERT INTO `follow` 
                    (`id_user`, `id_follow`,`time`) 
                    VALUES
                    ('$userId', '$Id_follow', '$creation_time')";
        if (mysqli_query($conn, $query)) {
            // $user = mysqli_query($conn, "SELECT * FROM user WHERE mail='$email'");
            // $row = mysqli_fetch_assoc($user);
            // $_SESSION["login"] = true;
            // $_SESSION["userDetails_Twit"] = $row;
            echo "Successfuly followed";
        }
    } 
}
else {
    // Handle case when request method is not POST
    echo "<script>alert('Invalid request method. Only POST requests are allowed.'); window.location.href='../index.php';</script>";
}
