$("#logoutButton").click(function(e){
    // e.preventDefault();
    // console.log("click here logout");
    $.ajax({
        url: '../../routes/logout.php',
        type: 'GET',
        success: function(response) {
            if (response=="logoutSucessfully"){
                // alert(response);
                window.location.href='../../index.php';
            }
            
        },
        error: function(xhr, status, error) {
            // console.error(error);
            // Optionally, you can display an error message to the user
            alert("An error occurred while logging out. Please try again later.");
        }
    });
});