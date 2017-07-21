<?php
  require 'createConnection.php';
  //get the number of posts
  $result = $db->query("SELECT count(*) AS Count FROM posts");
  $resultArr = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $response = $resultArr['Count'] - 1;
  echo $response;
?>