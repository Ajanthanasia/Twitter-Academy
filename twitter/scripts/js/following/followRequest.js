function following(userId,Id_follow){

    console.log(userId,Id_follow);
    var data={
        'userId':userId,
        'Id_follow':Id_follow,
        'action':'store'
    }
    $.ajax({
        url: "../../routes/following/followingstore.php",
        type: "POST",
        data: data,
        // dataType: "HTML",
        success: function(res) {
            console.log(res);
            if (res == "Successfuly followed") {
                window.location.href = "index.php";
            // } else {
            //     alert(res);
            //     return false;
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert("An error occurred while registering. Please try again later.");
        }
    });
}