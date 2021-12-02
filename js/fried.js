$("#fried").on("click", function(){

    $('#product_name').val('Fried Chicken')
    $("#good_img").show("slow");
    $("#neutral_image").show("slow");
    $("#bad_image").show("slow");
    $("#spag_button").hide("slow");
    $("#fried").hide("slow");


    $("#fried_img").animate({
        opacity: '0.5',
    });
    $("#imgkuno").animate({
    opacity: '0.5',
    });


});
