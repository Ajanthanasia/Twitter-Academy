$("#Edit_Profile_step1").click(function(){
    $('.popup_Edit_step1').addClass("active_profile");
});
$(".popup_Edit_step1 .close_btn").click(function () {
    $(".popup_Edit_step1").removeClass("active_profile");
});

$("input[name='profile_pic']").change(function(e) {
    var profile = $("#profile_photo")[0];
    profile.src = URL.createObjectURL(e.target.files[0]);
});

$("input[name='banner_pic']").change(function(e) {
    var profile = $("#banner_photo")[0];
    profile.src = URL.createObjectURL(e.target.files[0]);
});
