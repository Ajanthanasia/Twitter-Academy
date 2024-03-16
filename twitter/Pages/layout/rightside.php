<!-- modify start -->
<?php
include("../../routes/databaseConnection.php");
include('./../layout/app.php');

if (isset($_SESSION['login']) && isset($_SESSION['userDetails_Twit'])) {
    $user = $_SESSION['userDetails_Twit'];
    $email = $user['mail'];
    $My_id = $user['id'];
    // $profilePicture = !empty($user['profile_picture']) ? $user['profile_picture'] : 'download.png';
}
?>
<link rel="stylesheet" href="../../scripts/css/afterSignin/rightside.css">
<div class="mb-4 mt-4">
    <div class="row mb-2">
        <div class="col-md-4">
            <button class="btn btn-primary form-control">X</button>
        </div>
    </div>
    <div class="row mb-2">
        <!-- if we request the folowers then it will show here  -->

        <!-- shows the Followers  -->
        <?php
        

        include('rightSide/not_yet_confirmed_follower.php');
        ?>
        <hr><?php
        include('rightSide/followers.php');
        ?>



    </div>
</div>
<script src="../../scripts/js/following/followRequest.js"></script>

<!-- modify end -->