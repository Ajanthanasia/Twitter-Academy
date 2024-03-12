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
</head>
<body>
    <div class="center">
        <button id="show_Create">Create account</button>
        <button id="show_login">Sign in</button>
    </div>


    <!-- For Sign In  -->
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