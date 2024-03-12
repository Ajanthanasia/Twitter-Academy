<?php
session_start();
include("databaseConnection.php");

function For_picture($profile_pic, $username,$temp_name){
    $imageExtension = explode('.', $profile_pic);
    $imageExtension = strtolower(end($imageExtension));
    $newImageName = $username . "-" . date("Y.m.d") . "-" . date("h.i.sa");
    $newImageName .= "." . $imageExtension; // corrected concatenation operator
    move_uploaded_file($temp_name, '../scripts/img/profile/'.$newImageName);
    return $newImageName;
}
// $var= isset($_POST["action_register"]) == 'register';
// echo $var."---here var";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["action_register"]) == 'register') {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $hashedPassword = $_POST["hashedPassword_create"];

        $profile_pic = $_FILES["profile_pic"]["name"];
        $profile_pic_tmp = $_FILES["profile_pic"]["tmp_name"];

        $at_user_name = $_POST["at_user_name"];
        $access = isset($_POST['access']) && $_POST['access'] === '1' ? 1 : 0;

        $bio = $_POST["bio"];
        $city = $_POST["city"];
        $campus = $_POST["campus"];
        $img_banner = "";

        $img_profile = "";
        if ($profile_pic !== "") {
            $img_profile = For_picture($profile_pic, $username, $profile_pic_tmp);
        }
        $creation_time = date("Y-m-d H:i:s");
        
        $query = "INSERT INTO `user` 
                    (`username`, `at_user_name`, `profile_picture`, `bio`, `banner`, `mail`, `password`, `birthdate`, `private`, `creation_time`, `city`, `campus`) 
                    VALUES
                    ('$username', '$at_user_name', '$img_profile', '$bio', '$img_banner', '$email', '$hashedPassword', '$dob', $access, '$creation_time', '$city', '$campus')";
        if (mysqli_query($conn, $query)) {
            $user = mysqli_query($conn, "SELECT * FROM user WHERE mail='$email'");
            $row = mysqli_fetch_assoc($user);
            $_SESSION["login"] = true;
            $_SESSION["userDetails_Twit"] = $row;
            echo "<script>alert('SUccessfuly register! '); window.location.href='../Pages/home/index.php';</script>";
        }
    } 
}
else {
    // Handle case when request method is not POST
    echo "<script>alert('Invalid request method. Only POST requests are allowed.'); window.location.href='../index.php';</script>";
}
