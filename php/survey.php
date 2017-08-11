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
    
    <title>Westermore Survey</title>

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
  <body>

    <section class="pull-left col-md-7 col-sm-7 col-xs-12 text-center fill question-section">
      <div class="copyrights">
        <i class="fa fa-copyright fa-lg" id="copyrightIcon" aria-hidden="true"></i>
        <p id="copyrightText">Work by &copyRobert Ball. Find more on <a href="http://beautifuldeath.com/" target="_blank">beautifuldeath</a> or on <a href="http://robertmball.co.uk/" target="_blank">his website</a></p> 
      </div>
      <div class="question-div vertical-center text-center">
        <p class="question-p" id="question"></p>
      </div>
    </section>

     <section class="pull-right col-md-5 col-sm-5 col-xs-12 answear-section">
      <form class="answear-form vertical-center">
        <div class="radio">
          <label><input type="radio" name="option" id="option1"><i class="fa fa-circle" aria-hidden="true" id="icon1"></i><span id='answear1'></span></label>
        </div>
        <div class="radio">
          <label><input type="radio" name="option" id="option2"><i class="fa fa-circle" aria-hidden="true" id="icon2"></i><span id="answear2"></span></label>
        </div>
        <div class="radio">
          <label><input type="radio" name="option" id="option3"><i class="fa fa-circle" aria-hidden="true" id="icon3"></i><span id="answear3"></span></label>
        </div>
      </form>

      <button class="myBtn woodBtn" id="submit">Submit</button>
    </section>
      
    <!--jQuery (necessary for Bootstrap's JavaScript plugins)--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    <!-- The js script for this file -->
    <script src="../js/survey.js"></script>
    
    <script src="../js/copyright.js"></script>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </body>
</html>
