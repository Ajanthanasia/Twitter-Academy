
$("#month").on('change', checkBirthday);
$("#date").on('change', checkBirthday);
$("#year").on('change', checkBirthday);

function calculate_age(dob) {
    var diff_ms = Date.now() - dob.getTime();
    var age_dt = new Date(diff_ms);
    return Math.abs(age_dt.getUTCFullYear() - 1970);
}

function checkBirthday() {
    var month = $("#month").val();
    var date = $("#date").val();
    var year = $("#year").val();
    if (month === "Month" || date === "Date" || year === "Year") {
        return;
    }

    var age = calculate_age(new Date(year, month - 1, date));

    var birthday = new Date(year, month - 1, date);
    var today = new Date();
    if (age <= 18 || age == "") {
        $('#error_age').css({
            "display": "block",
            "color": "red"
        });
    } else {
        $('#error_age').css({
            "display": "none"
        });
        if (birthday > today) {
            $('#error_age2').css({
                "display": "block",
                "color": "red"
            });
        }
        else {
            $('#error_age2').css({
                "display": "none"
            });
        }

        var selectedDate = new Date(year, month - 1, date);
        // Format the date as required (e.g., YYYY-MM-DD)
        var formattedDate = selectedDate.toISOString().split('T')[0]; // Assuming you want YYYY-MM-DD format
        $("#input_dob").val(formattedDate);
    }


}
