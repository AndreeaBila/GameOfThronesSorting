<?php
  session_start();
  $userID = $_SESSION['id'];
  require "User.php";
  //create database connection
  require 'createConnection.php';
  $result = $db->query("SELECT * FROM users WHERE(UserID = $userID)");
  $resultArr = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $user = new User($resultArr["UserID"], $resultArr["Name"], null, null, $resultArr["Email"], $resultArr["Title"], $resultArr["DoB"], null);
  echo json_encode($user);
?>