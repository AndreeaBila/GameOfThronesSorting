<?php
    //create database connection
    require_once "User.php";
    require 'createConnection.php';

    $userID = strip_tags($_GET['userID']);
    //select the user's title name and houseID
    $query = "SELECT Title, Name, HouseID FROM users WHERE(UserID = ?);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $stmt->bind_result($title, $name, $houseID);
    $stmt->fetch();
    $stmt->close();
    $user = new User($userID, $name, '-', '-', '-', $title, '-', $houseID);
    //find the house name
    $query = "SELECT Name FROM houses WHERE(HouseID = $houseID)";
    $response = $db->query($query);
    $array = mysqli_fetch_array($response, MYSQLI_ASSOC);
    $user->houseID = $array['Name'];
    $user->title = ucfirst($user->title);
    $user->name = ucfirst($user->name);
    echo json_encode($user);
?>