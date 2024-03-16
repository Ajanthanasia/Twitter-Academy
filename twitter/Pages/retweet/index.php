<?php
session_start();
include('./../layout/app.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php include('./../layout/leftside.php'); ?>
        </div>
        <div class='col-md-6'>
            <?php include('./retweet-view.php'); ?>
        </div>
        <div class='col-md-3'>
            <?php include('./../layout/rightside.php'); ?>
        </div>
    </div>
</div>