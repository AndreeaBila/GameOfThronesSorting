<?php
    session_start();
    require_once 'User.php';
     //create database connection
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Error");
    //get session id for the user
    $userID = session_id();
    //get the house id of the current user
    $query = "SELECT * FROM Users WHERE(UserID = $userID);";
    $result = $db->query($query);
    $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $user = new User($array['UserID'], "-", "-", "-", "-", "-", "-", $array['HouseID']);
    echo json_encode($user->houseID);
?>