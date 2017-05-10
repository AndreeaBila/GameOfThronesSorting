<?php
    //script that will verify is the current session has been set up corectly
    if(!is_numeric(session_id())){
        header("Location: index.php");
        exit();
    }
?>