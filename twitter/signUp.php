<form action="routes/register.php"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="action_register"  value="register">
        <input type="hidden" name="access" value="1">
        <input type="hidden" name="bio">
        <input type="hidden" name="city">
        <input type="hidden" name="campus">
        <input type="hidden" name="access">
        <!-- For create account purpose -->
        <div class="popup popup_SignUp">
            <div class="close_btn">&times;</div>
            <div class="form">
                <h2>Create Your Account</h2>
                <div class="form-element">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="username" placeholder="Enter the Name">
                </div>
                <div class="form-element">
                    <label for="email">email</label>
                    <input type="email" id="email_create" name="email" placeholder="Enter the email">
                    <p id="error_email" style="display: none;">fill email</P>
                    <p id="duplicate_email" style="display: none;">Useremail was Already has been taken!</P>
                </div>
                <label for="dob"><b>Date Of Birth</b></label>
                <br>
                <div class="form-element">
                    <select name="Month" id="month">
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
                        <option value="date">Date</option>
                        <?php
                        for ($d = 1; $d <= 31; $d++) {
                        ?><option value="<?php echo $d ?>"><?php echo $d ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <select name="year" id="year">
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
                <p id="error_non" style="display: none;">Please fill all fields</P>

                <div>
                    <button id="Click_next_step2">Next</button>
                </div>
            </div>

        </div>

        <!-- step 2  -->
        <div class="popup popup_step2">
            <div class="form">
                <h2>Enter your Password</h2>
                <div class="form-element">
                <input type="hidden" name="hashedPassword_create" id="hashedPassword_create">
                    <input type="text" id="password_create" name="password" placeholder="Enter the password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>
                <div id="message">
                    <h5>Password must contain the following:</h5>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                <div>
                    <a id="Click_next_step3" class="disabled">Next</a>
                </div>
            </div>
        </div>
        <!-- step 3 -->
        <div class="popup popup_step3">
            <div class="form">
                <h2>Profile</h2>
                <img src="scripts/img/profile/download.png" alt="Description of the image" id="photo" />
                <label for="input-file">update image</label>
                <input type="file" placeholder="profile_pic" name="profile_pic" id="input-file" accept=".jpg , .jpeg, .png">
                <div>
                    <a id="Click_next_step4">Skip for Now</a>
                </div>
            </div>
        </div>
        <!-- step 4 -->
        <div class="popup popup_step4">
            <div class="form">
                <h2>What should we call you?</h2>
                <div class="form-element">
                    <label for="Username">Username</label>
                    <input type="text" id="Username_create" name="at_user_name" placeholder="Enter the Username">
                </div>
                <p id="duplicate" style="display: none;">User was Already has been taken!</p>
                <p id="letter_username" style="display: none;">Contain letter</p>
                <p id="number_username" style="display: none;">Contain number</p>
                <p id="length_username" style="display: none;">Contain less than 15 caracter</p>
                <div>
                    <button type="submit" id="Click_next_step5" disabled>Submit your account details</button>
                </div>
            </div>
        </div>
    </form>