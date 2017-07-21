<?php
    //script that will verify is the current session has been set up corectly
    function checkSession(){
        if(!isset($_SESSION['id'])){
            header("Location: index");
            exit();
        }
    }
    function checkAccessResources(){
        $userID = $_SESSION['id'];
        $urlID = $_GET['userID'];
        if($userID != $urlID){
            header("Location: index");
            exit();
        }
    }
    function checkHouseIDNull(){
        $houseID = getHouseID();
        if($houseID != 1){
            header("Location: main");
        }
    }
    function checkHouseIDSet(){
        $houseID = getHouseID();
        if($houseID == 1){
            header("Location: welcome");
        }
    }
    function getHouseID(){
        $userID = $_SESSION['id'];
        require 'createConnection.php';
        $response = $db->query("SELECT HouseID FROM users WHERE(UserID = $userID);");
        $array = mysqli_fetch_array($response, MYSQLI_ASSOC);
        $houseID = $array["HouseID"];
        return $houseID;
    }
?>