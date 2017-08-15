<?php
  session_start();
  //file needed to create a user account on the database
  //create database connection
  require 'createConnection.php';
  //get the email introduced by the user
  $email = $_GET['email'];
  checkEmail($db, $email);


  //method needed to check if the given email by the user is unique
    function checkEmail($db, $email){
        $count = 0;
        //retrieve every email address from the database
        $response = $db->query("SELECT Email FROM users;");
        //loop thorugh the email addresses and check if there are duplciates
        while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)){
            if($row['Email'] == $email){
                $count++;
            }
        }
        echo $count;
    }
?>