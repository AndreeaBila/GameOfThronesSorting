<?php
    //script that will verify is the current session has been set up corectly
    function checkSession(){
        if(!is_numeric(session_id())){
            header("Location: index.php");
            exit();
        }
    }
    function checkAccessResources(){
        $userID = session_id();
        $urlID = $_GET['userID'];
        if($userID != $urlID){
            header("Location: index.php");
            exit();
        }
    }
    function checkHouseIDNull(){
        $houseID = getHouseID();
        if($houseID != 1){
            header("Location: main.php");
        }
    }
    function checkHouseIDSet(){
        $houseID = getHouseID();
        if($houseID == 1){
            header("Location: welcome.php");
        }
    }
    function getHouseID(){
        $userID = session_id();
        require 'createConnection.php';
        $response = $db->query("SELECT HouseID FROM users WHERE(UserID = $userID);");
        $array = mysqli_fetch_array($response, MYSQLI_ASSOC);
        $houseID = $array["HouseID"];
        return $houseID;
    }
?>