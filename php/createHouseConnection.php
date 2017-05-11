<?php
    session_start();
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Error");
    $houseName = strip_tags($_GET['name']);
    $userID = session_id();
    //get the id of the house with the given name
    $query = "UPDATE Users SET HouseID = (SELECT HouseID FROM Houses WHERE(Name = ?)) WHERE (UserID = $userID);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $houseName);
    $stmt->execute();
?>