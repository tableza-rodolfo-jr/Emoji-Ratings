$("#spag_button").on("click", function(){

    $('#product_name').val('spaghetti')
    $("#good_img").show("slow");
    $("#neutral_image").show("slow");
    $("#bad_image").show("slow");
    $("#spag_button").hide("slow");
    $("#fried").hide("slow");


    $("#imgkuno").animate({
        opacity: '0.5',
    });
    $("#fried_img").animate({
            opacity: '0.5',
        });


});