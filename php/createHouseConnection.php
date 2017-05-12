<?php
    session_start();
    $db = new mysqli('localhost', 'root', '', 'westermoredb') or die("Error");
    $houseName = strip_tags($_GET['name']);
    $userID = session_id();
    $query = "UPDATE Users SET HouseID = (SELECT HouseID FROM Houses WHERE(Name = ?)) WHERE (UserID = $userID);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $houseName);
    $stmt->execute();
    $query = "UPDATE Houses SET Size = Size + 1 WHERE(Name = ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $houseName);
    $stmt->execute();

?>