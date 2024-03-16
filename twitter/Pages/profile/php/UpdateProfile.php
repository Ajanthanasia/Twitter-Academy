<!--  modify start -->
<?php
session_start();

include("../../../routes/databaseConnection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if name and fname are set in the POST data
    if (isset($_POST["action"]) == 'update') {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $dob = $_POST["dob"];
        $access = isset($_POST['access']) && $_POST['access'] === '1' ? 1 : 0;

        $bio = $_POST["bio"];
        $city = $_POST["city"];
        $campus = $_POST["campus"];

        $banner = $_FILES["banner_pic"]["name"];
        $img_banner_tmp = $_FILES["banner_pic"]["tmp_name"];
        
        $profile_pic = $_FILES["profile_pic"]["name"];
        $profile_pic_tmp = $_FILES["profile_pic"]["tmp_name"];

        function For_picture($profile_pic, $username, $temp_name)
        {
            $imageExtension = explode('.', $profile_pic);
            $imageExtension = strtolower(end($imageExtension));
            $newImageName = $username . "-" . date("Y.m.d") . "-" . date("h.i.sa");
            $newImageName .= "." . $imageExtension;
            move_uploaded_file($temp_name, '../../../scripts/img/profile/' . $newImageName);
            return $newImageName;
        }
        function For_banner($banner, $username, $img_banner_tmp)
        {
            $imageExtension = explode('.', $banner);
            $imageExtension = strtolower(end($imageExtension));
            $newImageName = $username . "-" . date("Y.m.d") . "-" . date("h.i.sa");
            $newImageName .= "." . $imageExtension;
            move_uploaded_file($img_banner_tmp, '../../../scripts/img/banner/' . $newImageName);
            return $newImageName;
        }
       
        if ($banner !="" && $profile_pic !="") {
            $img_banner = For_banner($banner, $username, $img_banner_tmp);
            $img_profile = For_picture($profile_pic, $username, $profile_pic_tmp);
            $query = "UPDATE user 
                    SET 
                    `username` = '$username',
                    `banner`='$img_banner',
                    `profile_picture` = '$img_profile',
                    `birthdate` = '$dob', 
                    `private` = '$access', 
                    `city` = '$city', 
                    `bio` = '$bio',
                    `campus` = '$campus'
                    WHERE `mail` = '$email'";
        }
        else if ($profile_pic !="") {
            $img_profile = For_picture($profile_pic, $username, $profile_pic_tmp);
            $query = "UPDATE user 
                    SET 
                    `username` = '$username',
                    `profile_picture` = '$img_profile',
                    `birthdate` = '$dob', 
                    `private` = '$access', 
                    `city` = '$city', 
                    `bio` = '$bio',
                    `campus` = '$campus'
                    WHERE `mail` = '$email'";
        }
        else if($banner !="" ){
            
            $img_banner = For_banner($banner, $username, $img_banner_tmp);
            $query = "UPDATE user 
                    SET 
                    `username` = '$username',
                    `banner`='$img_banner',
                    `birthdate` = '$dob', 
                    `private` = '$access', 
                    `city` = '$city', 
                    `bio` = '$bio',
                    `campus` = '$campus'
                    WHERE `mail` = '$email'";
        }
       else if( $banner =="" && $profile_pic ==""){
        $query = "UPDATE user 
                    SET 
                    `username` = '$username',
                    `birthdate` = '$dob', 
                    `private` = '$access', 
                    `city` = '$city', 
                    `bio` = '$bio',
                    `campus` = '$campus'
                    WHERE `mail` = '$email'";
       
       }
        
        if (mysqli_query($conn, $query)) {
            $user = mysqli_query($conn, "SELECT * FROM user WHERE mail='$email'");
            $row = mysqli_fetch_assoc($user);
            $_SESSION["login"] = true;
            $_SESSION["userDetails_Twit"] = $row;
            echo "<script>alert('Successfuly update! '); window.location.href='../profile.php';</script>";
        }
    }
} else {
    // Handle case when request method is not POST
    echo "Invalid request method. Only POST requests are allowed.";
}?>
<!--  modify end -->