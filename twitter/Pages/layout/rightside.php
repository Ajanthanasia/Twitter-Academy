<?php
include("../../routes/databaseConnection.php");
include('./../layout/app.php');

if (isset($_SESSION['login']) && isset($_SESSION['userDetails_Twit'])) {
    $user = $_SESSION['userDetails_Twit'];
    $email = $user['mail'];

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
        <?php

        $q = "SELECT * from `user`";
        $getusers = mysqli_query($conn, $q);
        if (mysqli_num_rows($getusers) > 0) {
        ?>
            <h1>You Might Like</h1>
            <?php
            while ($i = mysqli_fetch_assoc($getusers)) {
                $id = $i['id'];
                $at_user_name = $i['at_user_name'];
                $username = $i['username'];
                // $profilePicture = !!empty($i['profile_picture']) ? $i['profile_picture']: 'download.png';
                $profilePicture = $i['profile_picture'];
                if ($profilePicture == null) {
                    $profilePicture = 'download.png';
                }
            ?>
                <div class="col-md-12">
                    <table>
                        <tr>
                            <th class="col-md-2">
                                <img id="profile" width="80px" height="80px" class='img-fluid img-circle' src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
                            </th>
                            <th class="col-md-2">
                                <label id="username" for=""><?php echo $username; ?></label><br>
                                <label id="username_at" for=""><?php echo $at_user_name; ?></label>
                               
                            </th>
                            <th class="col-md-2">
                                <button id="folow_button" class="btn ">Folow</button>
                            </th>
                        </tr>
                    </table>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>

                      