<?php
    //file needed to create a user account on the database

    //create database connection
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Couldn't realize database connection");
    //import the user file to have access to the user class
    require_once "User.php";
    //retrieve the data from the front end application and prevent XSS attacks
    $tempUser = new User(0,strip_tags($_POST['signupName']), strip_tags($_POST['signupPassword']), '', strip_tags($_POST['signupEmail']), strip_tags($_POST['signupTitle']), strip_tags($_POST['signupDoB']), 0);

    //verify if the given email adress is unique
    if(checkEmail($db, $tempUser)){
        //the email is unique
        //we can proceed with the registration process
        register($db, $tempUser);
        echo "Success";
        //if the registration process was sucessful move the user to the next page in the structure
        header("Location: main.php");
    }




    //method needed to check if the given email by the user is unique
    function checkEmail($db, $tempUser){
        //retrieve every email address from the database
        $response = $db->query("SELECT E-mail FROM Users;");
        //loop thorugh the email addresses and check if there are duplciates
        while($row = fetch_array($response, MYSQLI_ASSOC)){
            if($row['E-mail'] == $tempUser->email){
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
        $query = "INSERT INTO Users VALUES(NULL, ?, $tempUser->password, $tempUser->salt, ?, ?, ?, 0);";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssss", $tempUser->name, $tempUser->email, $tempUser->title, $tempUser->dob);
        $stmt->execute() or die("An error has occured and the signup process was unsuccesful!");
    }
?>