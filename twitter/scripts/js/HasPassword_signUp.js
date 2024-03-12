$("#Click_next_step3").click(function() {
    const password = $("#password_create").val();
    var hashedPassword = CryptoJS.MD5(password).toString();
    $("#hashedPassword_create").val(hashedPassword);
    // console.log($("[name='hashedPassword_create']").val(),"----herepassword")
    $(".popup_step3").addClass("active");
    $(".popup_step2").removeClass("active");
});