<?php
session_start(); // Start the session

$_SESSION["login"] = false;
$_SESSION['userDetails_Twit'] = "Logout";
// Redirect to the login page
echo "logoutSucessfully";

// header("Location: ../index.php");
exit; // Ensure that no further code execution happens after redirection
?>