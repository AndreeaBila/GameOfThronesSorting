<?php
  session_start();
  require 'security.php';  
  checkSession();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Westermore</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/8dd7dadaef.js"></script>

    <!--Google fonts for this project  -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300i,400" rel="stylesheet">

    <!-- My CSS -->
    <link href="../css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/westermore2.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Start the session for the user -->
  </head>
  <body class="mainBkg">
      
    <div class="wrapper">
     
      <nav class="myNav navbar-fixed-top">
        <div class="wLogo pull-left">
          <img src="../img/westermore2.png" alt="W">
        </div>

        <div class="pull-right change-left" >
          <ul>
            <li><a href="#" id="addTitle">
              <?php
                //create database connection
                require_once "User.php";
                require 'createConnection.php';
                $userID = session_id();
                //select the user's title name and houseID
                $query = "SELECT Title, Name, HouseID FROM users WHERE(UserID = $userID);";
                $response = $db->query($query);
                $array = mysqli_fetch_array($response, MYSQLI_ASSOC);
                $user = new User($userID, $array['Name'], '-', '-', '-', $array['Title'], '-', $array['HouseID']);
                //find the house name
                $query = "SELECT Name FROM houses WHERE(HouseID = $user->houseID)";
                $response = $db->query($query);
                $array = mysqli_fetch_array($response, MYSQLI_ASSOC);
                $user->name = ucfirst($user->name);
                if($array['Name'] != "Night"){
                    echo ucfirst($user->title).' '.$user->name.' of House '.$array['Name'];
                }else{
                    echo ucfirst($user->title).' '.$user->name." of the Night's Watch";
                }
              ?></a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Send a Raven" ><a id="openPostButton" data-toggle="modal" data-target="#postsModal"><i class="fa fa-paper-plane fa-lg" aria-hidden="true"></i></a></li>
            <li data-toggle="tooltip" data-placement="bottom" title="Sign Out"><a href="index"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a></li>
            
          </ul>
        </div>
      </nav>

      <div class="clear"></div>

      <div class="my-content container">       
        <section class="col-md-9 col-sm-9 content-left pull-left text-center">
          <div class="col-md-3 col-sm-3 col-xs-12 icon">
            <img class="sigil" id="titleSigil" src="">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <h1 id="addHouse"></h1>
            <h4 id="addWords"></h3>
          </div>
          <div class="col-md-3 col-sm-3 icon small-hide">
            <img class="sigil" id="titleSigil" src="">
          </div>
                  
          <div class="overview col-md-12 col-sm-12 col-xs-12">
            <h4>About</h4>
            <p id="houseOverview"></p>
          </div>

          <div class="family col-md-12 col-sm-12 col-xs-12">
            <h4>Members, Friends, Ancestors and Household</h4>
            <img id="familyPhoto" src="">  
            <p id="aboutFamily"></p>
          </div>
          
          <div class="home col-md-12 col-sm-12 col-xs-12">
            <h4>Home</h4>
            <img id="homePath" src="">
            <p id="aboutHome"></p>
              
          </div>

          <div class="more col-md-12 col-sm-12 col-xs-12">
            <h4>History</h4>
            <p id="historyDescription"></p>
          </div> 
        </section>

        <aside class="col-md-3 col-sm-3 text-center pull-right small-hide">
          <img class="flag" src="" alt="">
        </aside>
      </div>

        <div class="clear"></div>

        <!-- The modal for the send the raven interface -->
        <div class="modal fade" id="postsModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <!-- This will be the header of the modal -->
              <div id="ravenNetwork">
                <div class="modal-header">
                  <button class="close" type="button" data-dismiss="modal">&times;</button>
                  <h2>Raven  Network</h2>
                </div>
                <div class="main-body" id="post-body">
                  <!--<div class="well">
                    <footer>
                      <p class="pull-right">5th of May 2017</p> 
                      <h4>Queen Andreea of House Lannister</h4>
                      <p>| #lorem #ipsum</p>
                    </footer>
                    <hr>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam itaque cumque unde provident sunt ea 
                    quae. Vero unde, optio harum iure qui dolores sed animi ipsam ratione vitae. Saepe, delectus! </p>
                  </div>-->
                </div>

                <div class="text-center modalBtn">
                  <button id="sendRavenButton" class="myBtn woodBtn btnCenter">Send a Raven</button>
                </div>
              </div>
                  
              <div id="sendRaven">
                <div class="modal-header">
                  <button class="close" type="button" data-dismiss="modal">&times;</button>
                  <h2>Send a raven</h2>
                </div>
                          
                <div class="main-body">
                  <form id="postsForm">
                    <div class="form-group">
                      <label for="Date">Date</label>
                      <input class="form-control" type="date" name="date" id="dateModalInput" value="">
                    </div>
                    <div class="form-group">
                      <label for="Details">Subject</label>
                      <input class="form-control" type="text" name="titleModalInput" id="titleModalInput" value="">
                    </div>
                    <div class="form-group">
                      <label for="Content">Message:</label>
                      <textarea class="form-control" rows="8" name="Content" id="Content"></textarea>
                    </div>
                  </form>
                </div>

                <div class="modalBtn">
                  <button class="myBtn woodBtn pull-left" id="returnToNetwork">Return</button>
                  <button class="myBtn woodBtn pull-right" id="btnSendRaven">Send It</button>
                </div>

                <div class="clear"></div>

              </div>
            <input type="hidden" name="numberOfPosts" id="numberOfPosts" value="0">
          </div>
        </div>
      </div>
  
      <?php include 'footer.php' ?>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
  </body>
</html>