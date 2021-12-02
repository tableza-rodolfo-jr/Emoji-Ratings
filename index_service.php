<?php

include_once("connection/connections.php");
$connection = con();


if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['UserLogin'])) {
    
    echo "Welcome ".$_SESSION['UserLogin'];
 } 
  else {
      echo "Welcome Guest";
  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
     

  
<?php if(isset($_SESSION['UserLogin'])){ ?>
    <a href="all_ratings.php">View All Ratings</a>
    <a href="service.php">View our Service Ratings</a>
    <a href="logout.php">Logout</a>
<?php } else {  ?>

    <a style="float:right;" href="login.php">Login</a>
<?php } ?>

        
         
        <div>
        <input type="hidden" id="service_rate">
       
          <img style="width:350;height:300;" src="img/service_crew1.JPG" alt="logo" id="service_crew1">
            <button id="btn-service">rate</button>
    
        
       
        <div class="service">
               
               </div>

      
        </div>
         
   


  

<!-- ----------SERVICE SERVICE SERVICE SERVICE       -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/emoji_good.js"></script>
    <script src="js/emoji_neutral.js"></script>
    <script src="js/emoji_bad.js"></script>
    <script src="js/emoji_service.js"></script>
    <script src="js/fried.js"></script>
    <script src="js/main.js"></script>
    <script src="js/spag.js"></script>
    <script>
    $(document).ready(function(){
    

       var btn_service = $("#btn-service");
     
     btn_service.on('click' , function(){
        $("#btn-service").hide();
     $('.service').empty();  
     $('.service').append('<center><div style="margin-top:-250px;"><label id="name1">Name</label><br><br>'+
     '<input style="padding:8px 16px;border-radius:10px;width:20%;" type="text" name="emoji1" id="name_emoji" class="name_emoji">'+
     '<br><br>'+
     '<input style="padding:20px 40px;border-radius:10px;width:40%;height:10%;" type="text"  class="text" id="comment1"><br><br>'+
     '<br<br>'+
     '<button style="padding:9px 18px;border-radius:5px;" name="btn-comment" id="btn_rate_service"><b>COMMENT</b></button>'+
     '<br><br><br<br>'+
     '</div></center>');


     $("#btn_rate_service").on('click' ,function(){
           
     var name_service = $("#name_emoji").val();
     var comment_service = $("#comment1").val();
 

     $.ajax({
         type : 'POST',
         dataType: "json",
         url : 'result.php',
         data: {"method": "service", "name": name_service, "comment": comment_service},
         success:function(response){
         alert(response['message']) 
         window.location='index.php';
         },
             error: function(xhr){
             alert("An error occured: " + xhr.status + " " + xhr.statusText);
             }
             });
         });

     });
    
    
    
    
    
    
    
    
    
    
    
    });
    </script>
</body>
</html>