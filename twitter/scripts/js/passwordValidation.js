$("#password_create").keyup(function () {
    var myInput = $(this).val();
    var letter = $("#letter");
    var capital = $("#capital");
    var number = $("#number");
    var length = $("#length");
    var message = $("#message");

    // When the user clicks on the password field, show the message box
    message.css("display", "block");

    var lowerCaseLetters = myInput.match(/[a-z]/g);
    if (lowerCaseLetters) {
        letter.removeClass("invalid").addClass("valid");
    } else {
        letter.removeClass("valid").addClass("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = myInput.match(/[A-Z]/g) ;
    if (upperCaseLetters) {
        capital.removeClass("invalid").addClass("valid");
    } else {
        capital.removeClass("valid").addClass("invalid");
    }

    // Validate numbers
    var numbers =myInput.match(/[0-9]/g) ;
    if (numbers) {
        number.removeClass("invalid").addClass("valid");
    } else {
        number.removeClass("valid").addClass("invalid");
    }

    // Validate length
    if (myInput.length >= 8) {
        length.removeClass("invalid").addClass("valid");
    } else {
        length.removeClass("valid").addClass("invalid");
    }

    if ( lowerCaseLetters && numbers  && upperCaseLetters && myInput.length >=8 ){
        $('#Click_next_step3').removeClass("disabled");
    }
    else{
        // $('#Click_next_step3').prop("disabled", true);
        $('#Click_next_step3').addClass("disabled");
    }
});
