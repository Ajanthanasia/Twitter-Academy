<?php
session_start();
include("databaseConnection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
    // Check if name and fname are set in the GET data
    
    if (isset($_POST["action_login"]) == 'login') {
        // Access the name and fname values sent via AJAX
        $email_or_username = $_POST["email_or_username"];
        $hashedPassword = $_POST["hashedPassword"];
        // Check if email already exists
        $user = mysqli_query($conn, "SELECT * FROM user WHERE mail='$email_or_username' or at_user_name='@$email_or_username'");
        // $deleteUser=mysqli_query($conn,"SELECT * FROM deactive_account WHERE email='$email'");
        if (mysqli_num_rows($user) > 0) {
            $row = mysqli_fetch_assoc($user);
            if($hashedPassword==$row["password"]) {
                $_SESSION["login"] = true;
                $_SESSION["userDetails_Twit"] = $row;
                echo "Login Successfull";
                exit;
            } else {
                echo 'Wrong Password';
                exit;
            }
        } else {
            echo 'User not Registered';
            exit;
        }
    } 
}
else {
    // Handle case when request method is not GET
    echo 'Invalid request method. Only GET requests are allowed';
    exit;
}
