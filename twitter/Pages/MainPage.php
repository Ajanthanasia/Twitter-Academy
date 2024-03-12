<?php
session_start(); // Start the session

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_SESSION['login']) && isset($_SESSION['userDetails_Twit'])) {
            $user = $_SESSION['userDetails_Twit'];
            $profilePicture = !empty($user['profile_picture']) ? $user['profile_picture'] : 'download.png';
            echo "<h1>Welcome, {$user['username']}</h1>";
            ?>
            <img src="../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture"> <?php
            echo "<p>profile_picture: {$user['profile_picture']}</p>";
            echo "<p>at_user_name: {$user['at_user_name']}</p>";
            echo "<p>banner: {$user['banner']}</p>";
            echo "<p>mail: {$user['mail']}</p>";
            echo "<p>birthdate: {$user['birthdate']}</p>";
            echo "<p>private: {$user['private']}</p>";
            echo "<p>creation_time: {$user['creation_time']}</p>";
            echo "<p>city: {$user['city']}</p>";
            echo "<p>campus: {$user['campus']}</p>";
            // You can display other user details here
        } else {
            echo "<h1>You are not logged in</h1>";
        }
        ?> 
</body>
</html>