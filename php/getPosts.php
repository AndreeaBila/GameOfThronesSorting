<?php
    session_start();
    //create database connection
    require 'createConnection.php';
    //import the user file to have access to the user class
    require_once "Post.php";
    $limit = strip_tags($_GET['number']);
    $array = array();
    $query = "SELECT * FROM posts WHERE(PostID != 1) ORDER BY DateCreated DESC, PostID DESC LIMIT ?;";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $limit);
    $stmt->execute();
    $stmt->bind_result($postID, $title, $content, $dateCreated, $userID, $houseID);
    while($stmt->fetch()){
        $post = new Post($postID, $title, $content, $dateCreated, $userID, $houseID);
        array_push($array, $post);
    }
    $stmt->close();
    echo json_encode($array);
?>