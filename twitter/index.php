<?php

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="scripts/css/index.css">
    <link rel="stylesheet" href="scripts/css/passwordValidate.css">
    <link rel="stylesheet" href="scripts/css/profile.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /><!--sera-->
    <link rel="stylesheet" href="scripts/css/styl.css">
</head>
<body>
    <div class="all">
    <div class="twitt-img">
            <img src="img/twitter-x-logo-42560.png" alt="twitterlogo">
        </div>
        <div class="signups">
            <div class="paragaraph">
                <h1>Happening now</h1>
                <p>Join today.</p>
            </div>

            <button class="gulu">
                <img src="img/icons8-google-48.png" alt="google logo"><span class="ttt">Sign in with Google</span> 
            </button>
            <br>

            <button class="apple">
                <span>Sign in with Apple</span> 
            </button>
            
            <h2>or</h2>



    <div class="center">
        <button id="show_Create">Create account</button>
        <button id="show_login">Sign in</button>
    </div>

    <div class="terms">
                <p>By signing up, you agree to the <a href="https://twitter.com/en/tos">Terms of Service </a>and <a href="https://twitter.com/en/privacy">Privacy Policy,</a> 
                including <a href="https://help.twitter.com/en/rules-and-policies/x-cookies"> Cookie Use.</a></p>
            </div>

    

    </div>
  


    <!-- For Sign In  -->
    <!--mayoori-->
    <?php include('./signIn.php')
    ?>
    
    <?php include('./signUp.php')
    ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>

    <script src="scripts/js/main.js"></script>
    <script src="scripts/js/passwordValidation.js"></script>
    <script src="scripts/js/selectProfilepic.js"></script>
    <script src="scripts/js/username.js"></script>
    <script src="scripts/js/dob.js"></script>
    <script src="scripts/js/signIn_usename_or_email_varify.js"></script>
    <script src="scripts/js/signIn_Passing_data_by_ajax.js"></script>
    <script src="scripts/js/mailVarify.js"></script>
    <script src="scripts/js/HasPassword_signUp.js"></script>
    <script>
        $("#Click_next_step4").click(function() {
            $(".popup_step4").addClass("active");
            $(".popup_step3").removeClass("active");
        });
    </script>
</body>

</html>