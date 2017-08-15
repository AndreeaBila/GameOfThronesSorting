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
    <title>Westermore Settings</title>

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
            <li><a href="main" id="addTitle">
              <?php
                //create database connection
                require_once "User.php";
                require 'createConnection.php';
                $userID = $_SESSION['id'];
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
            <li data-toggle="tooltip" data-placement="bottom" title="Sign Out"><a href="index"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a></li>
            
          </ul>
        </div>
      </nav>

      <div class="clear"></div>

      <div class="my-content container">
        <form class="settings">
          <h1 class="text-center"><i class="fa fa-wrench" aria-hidden="true"></i>Account Settings</h1>

          <div class="form-group">
          <label for="user"><i class="fa fa-user" aria-hidden="true"></i> Name</label>
          <input type="text" name="settingsName" id="settingsName" placeholder="First Name" required>
         </div>

        <div class="alert alert-danger alert-dismissable alert-custom" id="signup_generalAlert">
          <a class="close" aria-label="close">&times;</a>
          <strong>Error!</strong> The provided email address in already in use.
        </div>

        <div class="form-group">
          <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
          <input type="email" name="settingsEmail" id="settingsEmail" placeholder="Email" required>
        </div>

        <div class="form-group">
          <label for="password"><i class="fa fa-key" aria-hidden="true"></i> New Password</label>
          <input type="password" name="settingsPassword" id="settingsPassword" placeholder="Password">
        </div>

        <div class="form-group">
          <label for="repassword"><i class="fa fa-key" aria-hidden="true"></i> Retype New Password</label>
          <input type="password" name="settingsRePassword" id="settingsRePassword" placeholder="Retype Password">
        </div>

        <div class="alert alert-warning alert-dismissable alert-custom" id="signup_passwordAlert">
          <a class="close" aria-label="close">&times;</a>
          <strong>Warning!</strong> The two passwords do not match.
        </div>

        <div class="form-group">
          <label for="dob"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Date of Birth</label>
          <input type="date" name="settingsDob" id="settingsDob" required>
        </div>

        <div class="form-group">
          <label for="title"><i class="fa fa-sitemap" aria-hidden="true"></i> Title</label>
          <select id="settingsTitle" placeholder="Title" name="settingsTitle" required>
            <option value="" disabled selected id="optionPlaceholder">Title</option>
            <option value="andal">Andal</option>
            <option value="lady">Lady</option>
            <option value="lord">Lord</option>
            <option value="sir">Sir</option>
            <option value="king">King</option>
            <option value="queen">Queen</option>
            <option value="prince">Prince</option>
            <option value="princess">Princess</option>
            <option value="khal">Khal</option>
            <option value="khaleesi">Khaleesi</option>
          </select>
        </div>

        <div class="alert alert-info alert-dismissable alert-custom" id="signup_fillDetailsAlert">
          <a class="close" aria-label="close">&times;</a>
          <strong>Sorry!</strong> You have to fill in all the details and a valid email adress!
        </div>

        
          <p><i class="fa fa-file-text" aria-hidden="true"></i> Read our <a href='terms.php' target='_blank'>Terms and Conditions</a> and our 
          <a href='cookiePolicy.php' target='_blank'>Cookie Policy</a> again. </p>

        <input class="woodBtn myBtn" type="button" id="saveChanges" value="Save Changes">
        </form>
      </div>
  
      <?php include 'footer.php' ?>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/settings.js"></script>
  </body>
</html>