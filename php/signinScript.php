<?php
    //script needed for the login process
    //create a connection with the database
    require 'createConnection.php';
    //retrieve the data from the database and check for XSS attacks
    $email = strip_tags($_POST['loginEmail']);
    $password = strip_tags($_POST['loginPassword']);

    //look for an entry in the database with the given email
    //if none exists give an errror
    $query = "SELECT Password, Salt, UserID FROM users WHERE(Email = ?);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($dbPassword, $salt, $userID);
    $stmt->fetch();
    //create a new hash for the given password
    $tempPassword = sha1($salt.'--'.$password);
    if($tempPassword == $dbPassword){
        session_id($userID);
        session_start();
        echo $userID;
        exit();
    }else{
        die('Error');
    }

?>