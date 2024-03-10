$(document).ready(function(){
    $("#first").click(function(){
        $.ajax({
            url:"show.php",
            type:"POST",
            data:{id:1,username:"Winter"},
            dataType:"HTML",
            beforeSend:function(){
                $("#show").text("loading.....");
            },
            success:function(res){
                $("#show").text(res);
            },
            error:function(xhr,txt,error){

            },
            complete:function(xhr,txt){

            }
        });
    });
});