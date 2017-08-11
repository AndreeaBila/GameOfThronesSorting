<?php
  session_start();
  require_once "security.php";
  checkSession();
  checkHouseIDSet();  
?>

<!DOCTYPE html>
<html lang="en-Us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>You have been sorted!</title>

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

        <h1 id="addHouseResult">
          <?php
            require 'createConnection.php';
            $userID = $_SESSION['id'];
            $query = "SELECT HouseID FROM users WHERE(UserID = $userID);";
            $response = $db->query($query);
            $houseID_array = mysqli_fetch_array($response, MYSQLI_ASSOC);
            $houseID = $houseID_array['HouseID'];
            $result = $db->query("SELECT Name, HouseDescription FROM houses WHERE(HouseID = $houseID);");
            $houseName_array = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $houseName = $houseName_array['Name'];
            if($houseName === "Night"){
                echo "You're a man of the Nigth's watch!";
            }else{
                echo "You're a ".$houseName.'!';
            }
          ?></h1>
        <h2 id="congrats">Congrats, you have been sorted into your rightful Westerosi home</h2>
        <p id="addPresentation">
          <?php
            echo $houseName_array['HouseDescription'];
          ?>
        </p>

        <button class="myBtn woodBtn btn pull-right"><a href="#" onclick="location.href='main'" role="button">Learn more</a></button>
      </div>
      <div class="clear"></div>

      <div class="copyrights">
        <i class="fa fa-copyright fa-lg" id="copyrightIcon" aria-hidden="true"></i>
        <p id="copyrightText">Work by &copy Thomas Gateley. Find more on flickr at <a href="https://www.flickr.com/photos/liquidsouldesign" target="_blank">liquidsouldesign</a></p> 
      </div>
    </div>

    <!--jQuery (necessary for Bootstrap's JavaScript plugins)--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- The js script for this file -->

    <script src="../js/survey.js"></script>
    <script src="../js/margin.js"></script>
    <script src="../js/copyright.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </body>

</html>

