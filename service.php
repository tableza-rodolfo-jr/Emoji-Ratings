<?php
include_once("connection/connections.php");
$connection = con();

if(!isset($_SESSION)){
    session_start();
}

if(isset($_GET['ratings'])){
    $ratings = $_GET['ratings'];
    $sql = "SELECT * FROM service_ratings WHERE ratings = '$ratings' ORDER BY id DESC";
}else{
    $sql = "SELECT * FROM service_ratings ORDER BY id DESC";
}

$ratings = $connection->query($sql) or die ($connection->error);
$row = $ratings->fetch_assoc();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
a{
 text-decoration: none;
 text-transform: uppercase;
 line-height: 1px;
 letter-spacing: 1px;
 font-size: 20px;
 font-weight: bold;
 padding: 7px 14px;
 background-color: silver;
 color: black;
 border-radius: 25px;
}
a:hover{
    color: #676767;
    background-color: #f2f2f2;
    font-size: 24px;
    transition: 1.5s;
}
table{
    padding: 20px 40px;
    border-collapse: collapse;
    width: 100%;
}
tr{
    text-align: left;
    padding: 20px 40px;
}
th,td{
    padding: 20px 40px;
    border-bottom: 2px solid black;
}
tr:nth-child(even){
    background-color: #5c777f;
}
a{
    padding:20px 40px;
}
</style>
    <br>

  <center>
    <h1>ALL RATINGS</h1>

    </center>

<form action="" method="get">
<a href="index.php"><--BACK</a>
<?php if($_SESSION['Access'] == "administrator") { ?>
    <a href="service.php">ALL</a>
  <a href="?ratings=positive">POSSITVE</a>
  <a href="?ratings=neutral">NEUTRAL</a>
  <a href="?ratings=negative">NEGATIVE</a>
  <?php } else {    ?>
    <a href="service.php">ALL</a>
    <?php } ?>


</form>
<br><br>
<?php
if(!isset($_SESSION)){
    session_start();
}
?>
    <table>
      <thead>
      <tr>
      <?php if($_SESSION['Access'] == "administrator") { ?>
        <th>NAME</th>
         <th>COMMENT</th>
         <th>Ratings</th>
         <?php } else {    ?>
            <th>NAME</th>
           <th>COMMENT</th>
            <?php } ?>
       
      </tr>
      </thead>
    
    
       <tbody>
       <?php do {   ?>
         <tr>
         <?php if($_SESSION['Access'] == "administrator") { ?> 
          <td> <?php echo $row['name_service']; ?> </td>
          <td> <?php echo $row['comment_service']; ?> </td>
          <td> <?php echo $row['ratings']; ?> </td>
          <?php } else {    ?>
            <td> <?php echo $row['name_service']; ?> </td>
          <td> <?php echo $row['comment_service']; ?> </td>
            <?php } ?>
          
         </tr>
         <?php } while($row = $ratings->fetch_assoc()); ?> 
       </tbody>
    


    </table>


</body>
</html>