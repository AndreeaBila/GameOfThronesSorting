<?php
    //script needed for the login process
    //create a connection with the database
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Couldn't realize database connection");
    //retrieve the data from the database and check for XSS attacks
    $email = strip_tags($_POST['loginEmail']);
    $password = strip_tags($_POST['loginPassword']);

    //look for an entry in the database with the given email
    //if none exists give an errror
    $query = "SELECT Password, Salt, UserID FROM Users WHERE(Email = ?);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($dbPassword, $salt, $userID);
    $stmt->fetch();
    //create a new hash for the given password
    $tempPassword = sha1($salt.'--'.$password);
    if($tempPassword == $dbPassword){
        $userID;
        session_id($userID);
        session_start();
        exit('Success');
    }else{
        die('Error');
    }

?>