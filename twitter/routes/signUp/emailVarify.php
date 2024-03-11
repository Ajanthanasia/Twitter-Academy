<?php
include("../databaseConnection.php");
if(isset($_POST['email_create'])){
    $email=$_POST['email_create'];
    
    $detail=mysqli_query($conn, "SELECT * FROM user WHERE mail='$email'");
        if (mysqli_num_rows($detail) > 0) {
            echo "alreadytaken";
            exit;
        }
}
?>
