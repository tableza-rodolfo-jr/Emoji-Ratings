
<?php 

if(!isset($_SESSION)){
    session_start();
 }
 include_once("connection/connections.php");
 $connection = con();
   
 if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

   $sql = "SELECT * FROM emoji_users WHERE username = '$username' AND password = '$password' ";
     
   $user = $connection->query($sql) or die ($connection->error);
   $row = $user->fetch_assoc();
   $total = $user->num_rows;

   
  if($total > 0) {
      $_SESSION['UserLogin'] = $row['username'];
      $_SESSION['Access'] = $row['access'];

     echo header("Location: index.php");

  }else {
      echo "NO username Found";
  }

 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body><br><br><br>
<a href="index.php">BACK <--</a>
        <center>
     <h1>Login Page</h1>
     <br/>
     <br/>
     
      <form action="" method="post">
     <label style="font-weight:bold">USERNAME</label><br><br>
       <input style="height:10%;width:15%;padding: 8px 16px;border-radius:10px;" type="email" name="username" id="username"><br><br>

     <label style="font-weight:bold">PASSWORD</label><br><br>
       <input style="height:10%;width:15%;padding: 8px 16px;border-radius:10px;" type="password" name="password" id="password"><br><br>

       <button type="submit" name="login">Login</button>
       </form>
       <br><br><br>
       <a href="register.php">register</a>
       </center>
</body>
</html>
 
    