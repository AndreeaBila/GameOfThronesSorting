<?php 
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en-Us">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Westermore</title>

        <!-- Bootstrap -->
        <!--<link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- FontAwesome -->
        <!--<link rel="stylesheet" href="../../FontAwesome/css/font-awesome.min.css">-->
        <!-- My CSS -->
        <link href="../css/index.css" rel="stylesheet">
        <link rel="shortcut icon" href="../img/westermore2.ico">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../js/toLogin.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="body">
        <div class="container">
            <nav class="nav">
                <div class="navRight">
                    <ul>
                        <li><a href="login.php">Log In</a></li>
                    </ul>
                </div>

                <div class="logo">
                    <ul>
                        <li><img src="../img/westermore2.png" alt="W"></li>
                    </ul>
                </div>
            </nav>

            <div class="clear"></div>

            <div class="mainContent">
                <img src="../img/bigsigil.png" alt="Image Not Available">
                <button class="button" id="indexButton">Find out where you belong</button>

            </div>
        </div>
    
    
    <!--jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="../Bootstrap/js/bootstrap.min.js"></script>-->
    <!-- The js script for this file -->
    </body>
</html>
