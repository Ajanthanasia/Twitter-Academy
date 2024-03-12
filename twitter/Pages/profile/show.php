<?php
session_start();
// Boostrap include line
include('./../layout/app.php');
if (isset($_SESSION['login']) && isset($_SESSION['userDetails_Twit'])) {
    $user = $_SESSION['userDetails_Twit'];
    $profilePicture = !empty($user['profile_picture']) ? $user['profile_picture'] : 'download.png';
    $bannerPicture = !empty($user['banner']) ? $user['banner'] : 'bannerDefault.png';
    $date = date('Y-m-d', strtotime($user['creation_time']));
?>
    <div class="mt-4 mb-4">
        <div class="row">
            <div class="col-md-3">
                <img class='img-fluid img-circle' src="../../scripts/img/banner/<?php echo $bannerPicture; ?>" alt="cover Picture" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">

                <img class='img-fluid img-circle' src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Username : </label>
            </div>
            <div class="col-md-6">
                <strong>
                    <?php echo "{$user['username']}"; ?>
                </strong>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Email :</label>
            </div>
            <div class="col-md-6">
                <?php echo "{$user['mail']}"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Date of Birth :</label>
            </div>
            <div class="col-md-6">
                <?php echo "{$user['birthdate']}"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">private :</label>
            </div>
            <div class="col-md-6">
                <?php echo "{$user['private']}"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Joined date :</label>
            </div>
            <div class="col-md-6">
                <?php echo "$date"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Address :</label>
            </div>
            <div class="col-md-6">
                <?php echo "{$user['city']}"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="">Campus :</label>
            </div>
            <div class="col-md-6">
                <?php echo "{$user['campus']}"; ?>
            </div>
        </div>
    <?php
}
    ?>
    </div>