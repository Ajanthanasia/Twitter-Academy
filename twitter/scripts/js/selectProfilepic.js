$("input[name='profile_pic']").change(function(e) {
    var profile = $("#photo")[0];
    profile.src = URL.createObjectURL(e.target.files[0]);
    $("#Click_next_step4").text("Next");
    // profile.src(URL.createObjectURL(inputfile.files[0]));
});
