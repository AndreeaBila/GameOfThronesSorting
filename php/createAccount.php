<?php
    session_start();
    //file needed to create a user account on the database
    //create database connection
    require 'createConnection.php';
    //import the user file to have access to the user class
    require_once "User.php";
    //retrieve the data from the front end application and prevent XSS attacks
    $tempUser = new User(0,strip_tags($_POST['signupName']), strip_tags($_POST['signupPassword']), '', strip_tags($_POST['signupEmail']), strip_tags($_POST['signupTitle']), strip_tags($_POST['signupDoB']), 0);
    //the email is unique
    //we can proceed with the registration process
    if(register($db, $tempUser) == true){
        $userID = getUserID($db, $tempUser->email);
        $_SESSION['id'] = $userID;
        header('Location: welcome');
    }else{
        die("Error");
    }

    //method needed to register the user into the database
    function register($db, $tempUser){
        //create a salt and use it to thas the user's password
        $tempUser->salt = sha1(time());
        $tempUser->password = sha1($tempUser->salt.'--'.$tempUser->password);
        //create a query to insert the information in the database and use prepared statemetns
        $query = "INSERT INTO users VALUES(NULL, ?, ?, ?, ?, ?, ?, '1');";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssssss", $tempUser->name, $tempUser->password, $tempUser->salt,$tempUser->email, $tempUser->title, $tempUser->dob);
        $stmt->execute() or die("Error");
        return true;
    }

    function getUserID($db, $email){
        //create the query and use prepared statements
        $query = "SELECT UserID FROM users WHERE(Email = ?);";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($userID);
        $stmt->fetch();
        return $userID;
    }
?>