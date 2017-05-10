<?php
    //script that will verify is the current session has been set up corectly
    if(!is_numeric(session_id())){
        header("Location: index.php");
        exit();
    }else{
        $userID = session_id();
        $urlID = $_GET['userID'];
        if($userID != $urlID){
            header("Location: index.php");
            exit();
        }
    }


?>