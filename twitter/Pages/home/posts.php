<link rel='stylesheet' href='./posts.css'>
<div class="mt-4 mb-4">
    <div class="row">
        <div class="col-md-2">
            <?php
            if (isset($_SESSION['login']) && isset($_SESSION['userDetails_Twit'])) {
                $user = $_SESSION['userDetails_Twit'];
                $profilePicture = !empty($user['profile_picture']) ? $user['profile_picture'] : 'download.png';
            ?>
                <img class='img-fluid img-circle' src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
            <?php
            }
            ?>
        </div>
        <div class="col-md-10">
            <textarea class='form-control' placeholder='What is happening?!' rows='3'></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <button class="btn btn-primary form-control">Post</button>
        </div>
    </div>
</div>