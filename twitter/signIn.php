<form action="" method="post" id="form_login" >
    <input type="hidden" name="action_login"  value="login">
        <div class="popup popup_signIn">
            <div class="close_btn">&times;</div>
            <div class="form">
                <h2>Sign In to app </h2>
                <div class="form-element">
                    <input type="text" id="user_email_username" name="user_email_username" placeholder="email or username ">
                </div>
                <p id="login_details" style="display: none;">Please enter corect details</p>
                <div class="form-element">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div>
                    <button id="Click_next_step1_signIn">Next</button>
                </div>
            </div>
        </div>
        <div class="popup popup_signIn_step2">
            <div class="close_btn">&times;</div>
            <div class="form">
                <h2>Enter your Password</h2>
                <div class="form-element">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter the password">
            </div>
            <p id="password_login_details" style="display: none;">Please enter Password</p>
                <div class="form-element">
                    <a href="#">Forgot password?</a>
                </div>
                <div>
                    <button id="Click_next_step2_signIn">Submit</button>
                </div>
            </div>
        </div>
    </form>