<!-- modify start -->
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
            <div class="col-md-3">
                <table>
                    <?php
                    while ($i = mysqli_fetch_assoc($getusers)) {
                        $id = $i['id'];
                        $at_user_name = $i['at_user_name'];
                        $username = $i['username'];
                        $profilePicture = $i['profile_picture'];
                        if ($profilePicture == null) {
                            $profilePicture = 'download.png';
                        }
                        if ($id == $user['id']) {
                            continue;
                        }
                    ?>
                        <tr>
                            <th>
                                <img id="profile" src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
                            </th>
                            <th>
                                <label class="username" for=""><?php echo $username; ?></label><br>
                                <label class="username_at" for=""><?php echo $at_user_name; ?></label>

                            </th>
                            <th>
                            <input class="btn  folow_button" type="button" onclick="following()" data-userId="<?php echo $user['id']; ?>" data-Id_follow="<?php echo $id; ?>" value="Follow">
                                <!-- <div class="folow_button" class="btn" onclick="following()" data-userId="<?php echo $user['id']; ?>" data-Id_follow="<?php echo $id; ?>">Folow</div> -->
                            </th>
                        </tr>

                <?php
                    }
                }
                ?>
                </table>
            </div>
    </div>
</div>
<script src="../../scripts/js/following/followRequest.js"></script>

<!-- modify end -->