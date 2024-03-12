$("#Click_next_step2_signIn").click(function (e) {
    e.preventDefault();
    if($("#password").val()==""){
        $("#password_login_details").css({"display":"block","color":"red"});
    }
    else{
        $("#password_login_details").css({"display":"none"});
        var password=$("#password").val();
        var hashedPassword = CryptoJS.MD5(password).toString();
        var email_or_username=$("#user_email_username").val();
        var action_login = $("[name='action_login']").val();
        data={
            email_or_username:email_or_username,
            hashedPassword:hashedPassword,
            action_login:action_login,
        }
        $.ajax({
            url: "routes/Login.php",
            type: "POST",
            data: data,
            // dataType: "HTML",
            success: function(res) {
                if (res == "Login Successfull") {
                    alert("Login Successfully Login...");
                    window.location.href = "Pages/home/index.php";
                } else {
                    alert(res);
                    return false;
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("An error occurred while registering. Please try again later.");
            }
        });
        
    }
});