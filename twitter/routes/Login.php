<?php
session_start();
include("databaseConnection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if name and fname are set in the POST data
    if (isset($_POST["action"]) == 'login') {
        // Access the name and fname values sent via AJAX
        $user_email_username = $_POST["user_email_username"];
        $psw = $_POST["password"];

        // Check if email already exists
        $user = mysqli_query($conn, "SELECT * FROM user WHERE mail='$user_email_username' or at_user_name='@$user_email_username'");
        // $deleteUser=mysqli_query($conn,"SELECT * FROM deactive_account WHERE email='$email'");
        if (mysqli_num_rows($user) > 0) {
            $row = mysqli_fetch_assoc($user);
            if (!password_verify($psw, $row['password'])) {
                $_SESSION["login"] = true;
                $_SESSION["userDetails_Twit"] = $row;
                // echo "<script>alert('Create Successful!');</script>";
                // header("Location: ../Pages/MainPage.php");
                // header("Location: ../Pages/home/index.php");
                $username = $row['username'];
                $id = $row['id'];
                header("Location: ../Pages/home/index.php?name=$username&id=$id");
                exit;
            } else {
                echo "<script>alert('Wrong Password');</script>";
                header("Location: ../index.php");
                exit;
            }
            // echo "User email has already been taken!";
            // exit;
        } else {
            echo "<script>alert('User not Registered');</script>";
            header("Location: ../index.php");
            exit;
        }
    } else {
        // Handle case when request method is not POST
        echo "<script>alert('Invalid request method. Only POST requests are allowed');</script>";
        header("Location: ../index.php");
        exit;
    }
}
