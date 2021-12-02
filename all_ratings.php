<?php
include_once("connection/connections.php");
$connection = con();

if(!isset($_SESSION)){
    session_start();
}

if(isset($_GET['emoji'])){
    $emoji = $_GET['emoji'];
    $sql = "SELECT * FROM emoji_rating WHERE emoji = '$emoji' ORDER BY id DESC";
}else{
    $sql = "SELECT * FROM emoji_rating ORDER BY id DESC";
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
    

<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>

    <?php if($_SESSION['Access'] == "administrator") { ?>
     <form style="text-align:right;" action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
     <?php } ?>


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
    <a href="all_ratings.php">ALL</a>
  <a href="?emoji=good">GOOD</a>
  <a href="?emoji=neutral">NEUTRAL</a>
  <a href="?emoji=bad">BAD</a>
  
  <?php } else {    ?>
    <a href="all_ratings.php">ALL</a>
    <?php } ?>


</form>
<br><br>
    <table>
      <thead>
      <tr>
    
      <?php if($_SESSION['Access'] == "administrator") { ?> 
         <th>NAME</th>
         <th>EMOJI</th>
         <th>PRODUCT NAME</th>
         <?php } else {    ?>
            <th>NAME</th>
         <th>PRODUCT NAME</th>
            <?php } ?>
       
       
      </tr>
      </thead>
    
    
       <tbody>
       <?php do {   ?>
         <tr>

         <?php if($_SESSION['Access'] == "administrator") { ?> 
          <td> <?php echo $row['name_commentor']; ?> </td>
          <td> <?php echo $row['emoji']; ?> </td>
          <td> <?php echo $row['product']; ?> </td>
          <?php } else {    ?>
            <td> <?php echo $row['name_commentor']; ?> </td>
            <td> <?php echo $row['product']; ?> </td>
           <?php } ?>
         </tr>
         <?php } while($row = $ratings->fetch_assoc()); ?> 
       </tbody>
    


    </table>


</body>
</html>