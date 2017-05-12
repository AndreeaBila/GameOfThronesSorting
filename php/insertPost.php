<?php
    session_start();
    //create database connection
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Error");
    //import the user file to have access to the user class
    require_once "Post.php";
    //get the current user id
    $userID = session_id();

    //get the house id for the current user
    $response = $db->query("SELECT HouseID FROM Users WHERE(UserID = $userID);");
    $array = mysqli_fetch_array($response, MYSQLI_ASSOC);
    $houseID = $array['HouseID'];

    //create a new Post object to work with
    $post = new Post(0, strip_tags($_GET['Title']), strip_tags($_GET['Content']), strip_tags($_GET['DateCreated']), $userID, $houseID);

    //insert the newly created post in the database
    $query = "INSERT INTO Posts VALUES(NULL, ?, ?, ?, ?, ?);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("sssii", $post->title, $post->content, $post->dateCreated, $post->userID, $post->houseID);
    $stmt->execute();
    echo "Success";
?>