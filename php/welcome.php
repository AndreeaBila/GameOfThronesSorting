<?php
  session_start();
  require_once "security.php";
  checkSession();
  checkHouseIDNull();
?>
<!DOCTYPE html>
<html lang="en-Us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  
    <title>Welcome to Westermore</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/8dd7dadaef.js"></script>

    <!--Google fonts for this project  -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300i,400" rel="stylesheet">
    
    <!-- My CSS -->
    <link href="../css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/westermore2.ico">

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/actions.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="sigilBkg">
        
    <div class="wrapper">
      <div class="jumbotron myJumbotron to-page-center">
        <h2>Welcome to our comunity</h2>
        <p>Get started by taking our survey and getting sorted into your house.</p>
        <button class="myBtn woodBtn btn pull-right"><a  href="#" onclick="location.href='survey'" role="button">Take survey</a></button>
      </div>
    </div>

    <!--jQuery (necessary for Bootstrap's JavaScript plugins)--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
    <!-- The js script for this file -->
    <script src="../js/margin.js"></script>
  </body>
</html>
