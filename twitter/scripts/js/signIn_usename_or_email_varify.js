$("#Click_next_step1_signIn").click(function (e) {
    e.preventDefault();
    var details = $("#user_email_username").val();
    if(details[0]=="@"){
        var details=details.substring(1); 
    }
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    var usernameRegex = /^[a-zA-Z0-9_]+$/; 
    $("#login_details").css({"display":"none"});
    if (emailRegex.test(details)) {
        $(".popup_signIn").removeClass("active");
        $(".popup_signIn_step2").addClass("active");
    } else if (usernameRegex.test(details)) {
        $(".popup_signIn").removeClass("active");
        $(".popup_signIn_step2").addClass("active");
    } else {
        $("#login_details").css({"display":"block","color":"red"});
    }
});
