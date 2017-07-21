<?php
    session_start();
    require 'createConnection.php';
    $houseName = strip_tags($_GET['name']);
    $userID = $_SESSION['id'];
    $query = "UPDATE users SET HouseID = (SELECT HouseID FROM houses WHERE(Name = ?)) WHERE (UserID = $userID);";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $houseName);
    $stmt->execute();
    $query = "UPDATE houses SET Size = Size + 1 WHERE(Name = ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $houseName);
    $stmt->execute();

?>