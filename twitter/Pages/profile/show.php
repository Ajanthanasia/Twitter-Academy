<?php
// Boostrap include line
include('./../layout/app.php');
if (isset($_SESSION['login']) && isset($_SESSION['userDetails_Twit'])) {
    $user = $_SESSION['userDetails_Twit'];
    $profilePicture = !empty($user['profile_picture']) ? $user['profile_picture'] : 'download.png';
    $bannerPicture = !empty($user['banner']) ? $user['banner'] : 'bannerDefault.png';
    $date = date('Y-m-d', strtotime($user['creation_time']));
?>
    <link rel="stylesheet" href="../../scripts/css/afterSignin/rightside.css">
    <link rel="stylesheet" href="../../scripts/css/index.css">
    <div class="mt-4 mb-4">
        
        <div class="row">

            <div class="col-md-3">
                <img class='cover_photo' width='500px' height="250px" src="../../scripts/img/banner/<?php echo $bannerPicture; ?>" alt="cover Picture" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img class='img-fluid img-circle' src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
            </div>
            <div class="col-md-3">
                <br>
                <button class="btn btn-primary form-control" id="Edit_Profile_step1">Edit Profile</button>
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

    <form action="" method="post" enctype="multipart/form-data">
        <div class="popup popup_Edit_step1">
            <div class="close_btn">&times;</div>
            <div class="form">
            <img class='cover_photo' id="banner_photo" width='100%' height="120px" src="../../scripts/img/banner/<?php echo $bannerPicture; ?>" alt="cover Picture" />
            <input type="file" placeholder="Choose cover photo" name="banner_pic" id="input-banner-file" accept=".jpg , .jpeg, .png">
            <img class='img-fluid img-circle' id="profile_photo" width='50px' height="20px" style="border-radius: 50%;" src="../../scripts/img/profile/<?php echo $profilePicture; ?>" alt="Profile Picture" />
                <input type="file" placeholder="update profile_pic" name="profile_pic" id="input-file" accept=".jpg , .jpeg, .png">
                <div class="form-element">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="username" value="<?php echo "{$user['username']}"; ?>">
                </div>
                <div class="form-element">
                    <label for="Bio">Bio</label>
                    <input type="text" id="bio" name="bio" value="<?php echo "{$user['bio']}"; ?>">
                </div>
                <div class="form-element">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" value="<?php echo "{$user['city']}"; ?>">
                </div>
                
                <label for="dob"><b>Date Of Birth</b></label>
                <br>
                <div class="form-element">
                    <?php
                        $date = $user['birthdate'];
                        $dateTime = new DateTime($date);

                        $year = $dateTime->format('Y'); // 2000
                        $month = $dateTime->format('F'); // "February"
                        $day = $dateTime->format('d');
                    ?>
                    <select name="Month" id="month">
                        <option value="<?php echo $month ?>"><?php echo $month ?></option>
                        <option value="Month">Month</option>
                        <?php
                        for ($m = 1; $m <= 12; $m++) {
                            $month = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                        ?><option value="<?php echo $m ?>"><?php echo $month ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <select name="date" id="date">
                        <option value="<?php echo $day ?>"><?php echo $day ?></option>
                        <option value="date">Date</option>
                        <?php
                        for ($d = 1; $d <= 31; $d++) {
                        ?><option value="<?php echo $d ?>"><?php echo $d ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <select name="year" id="year">
                    <option value="<?php echo $year ?>"><?php echo $year ?></option>
                        <option value="year">Year</option>
                        <?php
                        $currentYear = date('Y');
                        for ($y = $currentYear + 5; $y >= $currentYear - 80; $y--) {
                        ?><option value="<?php echo $y ?>"><?php echo $y ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="hidden" name="dob" id="input_dob">
                </div>
                <p id="error_age" style="display: none;">Age Must be above 18</P>

                <div>
                    <button type="submit">Update</button>
                </div>
            </div>

        </div>
    </form>
    <script src="js/profileEdit.js"></script>