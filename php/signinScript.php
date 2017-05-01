<?php
    //script needed for the login process
    //create a connection with the database
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Couldn't realize database connection");
    //retrieve the data from the database and check for XSS attacks
    $email = strip_tags($_POST['loginEmail']);
    $password = strip_tags($_POST['loginPassword']);

    //look for an entry in the database with the given email
    //if none exists give an errror
    $query = "SELECT Password, Salt FROM Users WHERE(E-mail = ?);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $email);
    $response = $stmt->execute();
    $response = fetch_array($response, MYSQLI_ASSOC) or die("No entry has been found!");
    //create a new hash for the given password
    $tempPassword = sha1($response['Salt'].'--'.$password);
    if($tempPassword == $response['Password']){
        header("Location: main.php");
    }else{
        die("Error");
    }

?>