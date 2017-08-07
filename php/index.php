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

    <meta name="description" content="So you're a big fan of Game of Thrones and you're looking for a quiz to find
     out which westerosi house you fit into? We got you.">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!--Google fonts for this project  -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300i,400" rel="stylesheet">
    
    <!-- My CSS -->
    <link href="../css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/westermore2.ico">

    <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body class="greyBackground">

      <div class="wrapper">
        <nav class="myNav">
          <div class="logo pull-left">
            <img src="../img/westermore2.png" alt="W">
          </div>

          <div class="pull-right">
            <ul>
              <li><a href="login">Log In</a></li>
            </ul>
          </div>
        </nav>

        <div class="clear"></div>

        <div class="indexContent jumbotron indexJumbotron">
          <!-- <img src="../img/bigsigil.png" alt="Which house do you fight for? *Image Unavailable">  -->
        </div>
        <div class="text-center">
          <button class="woodBtn myBtn" id="indexButton">Find out where you belong</button>
        </div>
        <script>
          $('#indexButton').click(function() {
            window.location.href = '../php/login';
          });
        </script>
        
        

        <?php include 'footer.php'; ?>
      </div>

      <!-- FontAwesome -->
      <script src="https://use.fontawesome.com/8dd7dadaef.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    <script src="../js/login.js"></script>
      <!-- The js script for this file -->
      <script src="../js/index.js"></script>
    </body>
</html>
