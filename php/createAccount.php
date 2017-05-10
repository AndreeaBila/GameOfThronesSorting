<?php
    //file needed to create a user account on the database

    //create database connection
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Error");
    //import the user file to have access to the user class
    require_once "User.php";
    //retrieve the data from the front end application and prevent XSS attacks
    $tempUser = new User(0,strip_tags($_POST['signupName']), strip_tags($_POST['signupPassword']), '', strip_tags($_POST['signupEmail']), strip_tags($_POST['signupTitle']), strip_tags($_POST['signupDoB']), 0);

    //verify if the given email adress is unique
    if(checkEmail($db, $tempUser) == true){
        //the email is unique
        //we can proceed with the registration process
        if(register($db, $tempUser) == true){
            $userID = getUserID($db, $tempUser->email);
            session_id($userID);
            session_start();
            echo $userID;
        }else{
            echo "Error";
        }
    }else{
        echo "Error";
    }


    //method needed to check if the given email by the user is unique
    function checkEmail($db, $tempUser){
        //retrieve every email address from the database
        $response = $db->query("SELECT Email FROM Users;");
        //loop thorugh the email addresses and check if there are duplciates
        while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)){
            if($row['Email'] == $tempUser->email){
                return false;
            }
        }
        return true;
    }

    //method needed to register the user into the database
    function register($db, $tempUser){
        //create a salt and use it to thas the user's password
        $tempUser->salt = sha1(time());
        $tempUser->password = sha1($tempUser->salt.'--'.$tempUser->password);
        //create a query to insert the information in the database and use prepared statemetns
        $query = "INSERT INTO Users VALUES(NULL, ?, ?, ?, ?, ?, ?, '1');";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssssss", $tempUser->name, $tempUser->password, $tempUser->salt,$tempUser->email, $tempUser->title, $tempUser->dob);
        $stmt->execute() or die("Error");
        return true;
    }

    function getUserID($db, $email){
        //create the query and use prepared statements
        $query = "SELECT UserID FROM Users WHERE(Email = ?);";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($userID);
        $stmt->fetch();
        return $userID;
    }
?>