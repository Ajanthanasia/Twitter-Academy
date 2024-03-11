$("#email_create").on('keyup',function(){
    var email=$(this).val();
    $.ajax({
        url: "routes/signUp/emailVarify.php",
        type: "POST",
        data: {'email_create':email},
        success: function(res) {
            console.log("ok",res);
            if(res==="alreadytaken"){
                console.log("ok success")
                $("#duplicate_email").css({"display":"block","color":"red"});
            }
            else{
                $("#duplicate_email").css("display","none");
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            // alert("An error occurred while registering. Please try again later.");
        }
    });
});