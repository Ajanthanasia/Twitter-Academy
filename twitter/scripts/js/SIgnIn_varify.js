$("#Click_next_step1_signIn").click(function (e) {
    e.preventDefault();
    var dettails = $("#user_email_username").val();

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    var usernameRegex = /^[a-zA-Z0-9_]+$/; 
    $("#login_details").css({"display":"none"});
    if (emailRegex.test(dettails)) {
        $(".popup_signIn").removeClass("active");
        $(".popup_signIn_step2").addClass("active");
        console.log("Input is an email address");
    } else if (usernameRegex.test(dettails)) {
        $(".popup_signIn").removeClass("active");
        $(".popup_signIn_step2").addClass("active");
        console.log("Input is a username");
    } else {
        $("#login_details").css({"display":"block","color":"red"});
    }
});
$("#Click_next_step2_signIn").click(function (e) {
    if($("#password").val()==""){
        $("#password_login_details").css({"display":"block","color":"red"});
    }
    else{
        $("#password_login_details").css({"display":"none"});
        $("form").submit();
    }
    

});