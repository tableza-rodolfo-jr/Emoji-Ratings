var img1 = $("#good_img");
img1.on('click' ,function(){ 
    $("#neutral_image").hide("slow");
    $("#bad_image").hide("slow");
    console.log('good_comment')  
    $('.product').empty();
    $('.product').append('<div><label id="name1">Name</label><br><br>'+
    '<input style="padding:8px 16px;border-radius:10px;" type="text" name="emoji1" id="name_emoji" class="name_emoji">'+
    '<br><br>'+
    '<button style="padding:9px 18px;border-radius:5px;" name="btn-comment" id="btn-good-comment1"><b>COMMENT</b></button>'+
    '<br><br><br<br>'+
    '</div>');


    $("#btn-good-comment1").on('click' ,function(){
        $('#btn').val('spaghetti')
        $('#emoji').val('good')
        var emoji = $('#emoji').val();
        var name_emoji1 = $("#name_emoji").val();
        var product_name = $("#product_name").val();
        
        $.ajax({
            type : 'POST',
            dataType: "json",
            url : 'result.php',
            data: {"method": "emoji", "name": name_emoji1,"emoji":emoji, "product": product_name},
            success:function(response){
                alert(response['message'])                 
                window.location='index.php';
            },
            error: function(xhr){
                alert("Success");
            }
        });
    })
});