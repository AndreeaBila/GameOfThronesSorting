<?php
    session_start();
    //create database connection
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Error");
    //import the user file to have access to the user class
    require_once "Post.php";

    $query = "SELECT * FROM Posts;";
    $response = $db->query($query);
    $array = array();
    while($row = mysqli_fetch_array($response, MYSQLI_ASSOC)){
        $post = new Post($row['PostID'], $row['Title'], $row['Content'], $row['DateCreated'], $row['UserID'], $row['HouseID']);
        array_push($array, $post);
    }

    echo json_encode($array);
?>