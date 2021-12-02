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
    <title></title>
</head>
<body>
  
<?php if(isset($_SESSION['UserLogin'])){ ?>
    <a href="all_ratings.php">View All Ratings</a>
    <a href="index_service.php">Rate our Service</a>
    <a href="logout.php">Logout</a>
<?php } else {  ?>

    <a style="float:right;" href="login.php">Login</a>
<?php } ?>

        <div class="main-div">
         
        <div>

        <?php if(isset($_SESSION['UserLogin'])) { ?>
            <img style="width:350;height:300;" src="img/spag.jpg" alt="logo" id="imgkuno">
         <button id="spag_button">rate</button>
         <?php } else { ?>
            <img style="width:350;height:300;" src="img/spag.jpg" alt="logo" id="imgkuno_s">
            <button  id="spag_buttonn">rate</button>
        <?php }  ?>
        </div>

        <div>
        
        <?php if(isset($_SESSION['UserLogin'])) { ?>
            <img  style="width:350;height:300;" src="img/fried.jpg" alt="logo" id="fried_img">
         <button id="fried">rate</button>
         <?php } else { ?>
            <img  style="width:350;height:300;" src="img/fried.jpg" alt="logo" id="fried_img_s">
            <button  id="friedd">rate</button>
        <?php }  ?>
        </div>


        </div>

<!-- ----------emoji emoji emoji  emoji  emoji emoji       -->

<center>
   <div class="emoji-div" style="margin-top: -350px;">

  
     <input type="hidden"  class="text" id="emoji">
     <input type="hidden"  class="text" id="product_name">

     <img class="img_emoji" style="display:none;margin-top:-300px;" src="img/emoji-good.png" alt="logo" id="good_img">
  
     <img class="img_emoji" style="display:none;margin-top:-300px;" src="img/emoji-neutral.png" alt="logo" id="neutral_image">
     
     <img class="img_emoji" style="display:none;margin-top:-300px;" src="img/emoji-bad.png" alt="logo" id="bad_image">
  
     <div class="product">
       
     </div>
        </div>
   </center>





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
    
         $("#spag_buttonn").click(function(){
            alert("you need to login first");
         });
         $("#imgkuno_s").click(function(){
            alert("you need to login first");
         });
         $("#friedd").click(function(){
            alert("you need to login first");
         });
         $("#fried_img_s").click(function(){
            alert("you need to login first");
         });
   
    
    var img1 = $("#good_img");
    var img2 = $("#neutral_image");
    var img3 = $("#bad_image");
    

    });
    </script>

</body>
</html>