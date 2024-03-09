$("#month").on('change', checkBirthday);
$("#date").on('change', checkBirthday);
$("#year").on('change', checkBirthday);


function calculate_age(dob) {
        var diff_ms = Date.now() - dob.getTime();
        var age_dt = new Date(diff_ms);
        return Math.abs(age_dt.getUTCFullYear() - 1970);
    }

function checkBirthday() {
    // console.log("dob");
    var month = $("#month").val();
    var date = $("#date").val();
    var year = $("#year").val();
    if (month === "Month" || date === "Date" || year === "Year") {
        return;
    }
    
    var age = calculate_age(new Date(year, month-1, date));
    
    if (age <= 18 || age=="") {
        $('#error_age').css({"display":"block","color":"red"});

    }
    else{
        $('#error_age').css({"display":"none"});
        var selectedDate = new Date(year, month - 1, date);

        // Format the date as required (e.g., YYYY-MM-DD)
        var formattedDate = selectedDate.toISOString().split('T')[0]; // Assuming you want YYYY-MM-DD format
        // Set the value of the input field
        $("#input_dob").val(formattedDate);

    }
    var birthday = new Date(year, month-1, date);
    var today = new Date();
    if (birthday > today) {
        alert("Birthday cannot be in the future!");
    }
}

$("#Click_next_step2").click(function() {
    var email=$("#email_create").val();
    var name=$("#Name").val();
    var month = $("#month").val();
    var date = $("#date").val();
    var year = $("#year").val();

    if (email=="" || name==""||month=="" || date=="" || year==""){
        $('#error_non').css({"display":"block","color":"red"});
    }
    else{
        $('#error_non').css({"display":"none"});
        $(".popup_step2").addClass("active");
        $(".popup_SignUp").removeClass("active");
    }

    
});
