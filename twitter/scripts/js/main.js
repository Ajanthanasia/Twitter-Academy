$(document).ready(function () {
    $("#show_login").click(function () {
        $(".popup_signIn").addClass("active");
    });

    $(".popup_signIn .close_btn").click(function () {
        $(".popup_signIn").removeClass("active");

    });
    $("#show_Create").click(function () {
        $(".popup_SignUp").addClass("active");
    });
    $(".popup_SignUp .close_btn").click(function () {
        $(".popup_SignUp").removeClass("active");

    });
});



