<?php


function con(){
      
$host = "localhost";
$user = "root";
$pass = "12345";
$database = "emoji_ratings";

$connection = new mysqli($host, $user, $pass, $database);

if($connection->connect_error){ 
    echo "theres an error kuno";
}
 return $connection;
  }


?>