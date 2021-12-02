<?php
include_once("connection/connections.php");
$connection = con();



if(isset($_POST['name']) AND $_POST['method']=="emoji"){ 
   
  $emojikuno = $_POST['emoji'];
  $namekuno = $_POST['name'];
  $product = $_POST['product'];
 
    echo json_encode(array('status' => 'error','message'=> 'Success'));

   $sql = "INSERT INTO `emoji_rating`(`emoji`,`name_commentor`,`product`) VALUES ('$emojikuno','$namekuno', '$product')";
  $connection->query($sql) or die ($connection_error);
  

}



if(isset($_POST['name']) AND $_POST['method']=="service") { 
  if(true) { 
   
  $name_service = $_POST['name'];
  $comment_service = $_POST['comment'];
 
 
  echo json_encode(array('status' => 'error','message'=> 'Success'));

  $query_positive = "SELECT * FROM `synonyms_table` WHERE ratings='positive'";
  $query_negative = "SELECT * FROM `synonyms_table` WHERE ratings='negative'";
  $query_neutral = "SELECT * FROM `synonyms_table` WHERE ratings='neutral'";

  $query_positive_results = $connection->query($query_positive) or die ($connection->error);
  $positive_rows = $query_positive_results->fetch_assoc();

  $query_negative_results = $connection->query($query_negative) or die ($connection->error);
  $negative_rows = $query_negative_results->fetch_assoc();

  $query_neutral_results = $connection->query($query_neutral) or die ($connection->error);
  $neutral_rows = $query_neutral_results->fetch_assoc();

  // $comment = "the quick offset offset offset brown fox helpful jumps over the lazy dog productive helpful  removed removed removed removed nonparticipating";
  $positive_cnt = 0;
  $negative_cnt = 0;
  $neutral_cnt = 0;

  do {  

    $positive_cnt += substr_count($comment_service, $positive_rows['synonyms']);

    // echo $positive_rows['synonyms'] . ' count: ' . $positive_cnt . '<br>';
    

  } while($positive_rows = $query_positive_results->fetch_assoc());

  do {  
    
    $negative_cnt += substr_count($comment_service, $negative_rows['synonyms']);

    // echo $negative_rows['synonyms'] . ' count: ' . $negative_cnt . '<br>';

  } while($negative_rows = $query_negative_results->fetch_assoc());

  do {  
    
    $neutral_cnt += substr_count($comment_service, $neutral_rows['synonyms']);

    // echo $neutral_rows['synonyms'] . ' count: ' . $neutral_cnt . '<br>';

  } while($neutral_rows = $query_neutral_results->fetch_assoc());

    // echo 'Total Positive: '  . $positive_cnt . '<br>';
    // echo 'Total Negative: '  . $negative_cnt . '<br>';
    // echo 'Total Neutral: '  . $neutral_cnt . '<br>';

  if($positive_cnt>=$negative_cnt){

    if($positive_cnt>$neutral_cnt){
      $final_rating = 'positive';
    }else{
      $final_rating =  'neutral';
    }

  } else{
    if($negative_cnt>$neutral_cnt){
      $final_rating =  'negative';
    }else{
      $final_rating =  'neutral';
    }
  }

  $sql = "INSERT INTO `service_ratings`(`name_service`, `comment_service`, `ratings` ) VALUES ('$name_service','$comment_service','$final_rating')";
  $connection->query($sql) or die ($connection_error);
  

}
}



?>

