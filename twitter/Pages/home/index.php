<?php
session_start();
if($_SESSION['userDetails_Twit']=="Logout"){
    echo "<script>alert('helo logout');</script>";
    header("location:../../index.php");
}
// Boostrap include line
include('./../layout/app.php');

?>
<link rel="stylesheet" href="../../scripts/css/index.css">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php include('./../layout/leftside.php'); ?>
        </div>
        <div class='col-md-6'>
            <?php include('./posts.php'); ?>
        </div>
        <div class='col-md-3'>
            <?php include('./../layout/rightside.php'); ?>
        </div>
    </div>
</div>
