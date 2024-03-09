$("#password_create").keyup(function () {
    var myInput = $("#password_create").val();
    var letter = $("#letter");
    var capital = $("#capital");
    var number = $("#number");
    var length = $("#length");
    var message = $("#message");

    // When the user clicks on the password field, show the message box
    message.css("display", "block");

    // When the user starts to type something inside the password field
    // Validate lowercase letters
    var checkCode=-1;
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.match(lowerCaseLetters)) {
        checkCode=0;
        letter.removeClass("invalid").addClass("valid");
    } else {
        checkCode=-1;
        letter.removeClass("valid").addClass("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.match(upperCaseLetters)) {
        checkCode=0;
        capital.removeClass("invalid").addClass("valid");
    } else {
        checkCode=-1;
        capital.removeClass("valid").addClass("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.match(numbers)) {
        checkCode=0;
        number.removeClass("invalid").addClass("valid");
    } else {
        checkCode=-1;
        number.removeClass("valid").addClass("invalid");
    }

    // Validate length
    if (myInput.length >= 8) {
        checkCode=0;
        length.removeClass("invalid").addClass("valid");
    } else {
        checkCode=-1;
        length.removeClass("valid").addClass("invalid");
    }

    if ( checkCode==0){
        $('#Click_next_step3').removeClass("disabled");
    }
    else{
        console.log(1);
        // $('#Click_next_step3').prop("disabled", true);
        $('#Click_next_step3').removeClass("disabled");
    }
});
