
<?php 
 
include_once("connection/connections.php");
$connection = con();
   
 if(isset($_POST['submit'])){
     
    $emailkuno = $_POST['email'];
    $passwordkuno = $_POST['password'];
   

    $sql = "INSERT INTO `emoji_users`(`username`, `password`) VALUES ('$emailkuno', '$passwordkuno')";
    $connection->query($sql) or die ($connection->error);
  
    echo header("Location: login.php");
 }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoji</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      <br><br><br>
<a href="login.php">BACK <--</a>
       <center>
             <br><br><br>
       <h1 style="font-weight:bold">Register</h1>
       <br/>
       <br/>
         <form action="" method="post">

           <label style="font-weight:bold">EMAIL</label><br><br>
           <input style="width:15%;padding:8px 16px;" type="email" name="email" id="email"><br><br>

           <label style="font-weight:bold;">PASSWORD</label><br><br>
           <input style="width:15%;padding:8px 16px;" type="password" name="password" id="password"><br><br>
   
            <input style="width:6%;padding:7px 14px;" type="submit" name="submit" value="REGISTER">
      
        </form>
        </center>
    
</body>
</html>
 
    