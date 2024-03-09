<?php
include("databaseConnection.php");
if(isset($_POST['username_at'])){
    $username_at=$_POST['username_at'];

    $detail=mysqli_query($conn, "SELECT * FROM user WHERE at_user_name='$username_at'");
        if (mysqli_num_rows($detail) > 0) {
            echo "alreadytaken";
            // header("Location: ../index.php");
            exit;
        }
}
?>
