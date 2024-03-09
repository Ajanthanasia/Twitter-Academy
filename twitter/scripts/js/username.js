// Set the default value to '@'
var fixedValue = '@';
$('#Username_create').on('input', function () {
    var userInput = $(this).val();
    if (!userInput.startsWith(fixedValue)) {
        $(this).val(fixedValue + userInput);
    }
});
$('#Username_create').on('keyup', function () {
    var userInput = $(this).val();
    var letter = $("#letter_username");
    var number = $("#number_username");
    var length = $("#length_username");
    // var ind=-1;
    console.log(userInput)
    $.ajax({
        url: "username.php",
        type: "POST",
        data: {'username_at':userInput},
        success: function(res) {
            
            if(res==="alreadytaken"){
                $("#duplicate").css({"display":"block","color":"red"});
            }
            else{
                $("#duplicate").css("display","none");
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            // alert("An error occurred while registering. Please try again later.");
        }
    });
    var letters = /[a-zA-Z]/g;
var numbers = /[0-9]/g;

var hasLetters = userInput.match(letters) !== null;
var hasNumbers = userInput.match(numbers) !== null;
var isLengthValid = userInput.length <= 15;

var ind = (hasLetters && hasNumbers && isLengthValid) ? 0 : -1;

if (ind === 0) {
    letter.css("display", "none");
    number.css("display", "none");
    length.css("display", "none");
    $('#Click_next_step5').prop("disabled", false);
} else {
    if (!hasLetters) {
        letter.css({"display":"block","color":"red"});
    } else {
        letter.css("display", "none");
    }
    if (!hasNumbers) {
        number.css({"display":"block","color":"red"});
    } else {
        number.css("display", "none");
    }
    if (!isLengthValid) {
        length.css({"display":"block","color":"red"});
    } else {
        length.css("display", "none");
    }
    $('#Click_next_step5').prop("disabled", true);
}

});

$("#Click_next_step5").click(function () {
    $("form").submit();
    // console.log("here")

    // window.location.href = "Pages/MainPage.php";
});
