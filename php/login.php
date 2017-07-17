<?php 
  session_id("AAA");
  session_start();
?>
<!DOCTYPE html>
<html lang="en-Us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Westermore Log In</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/8dd7dadaef.js"></script>
    
    <!-- My CSS -->
    <link href="../css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/westermore2.ico">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="greyBackground">
  
    <div class="wrapper">
      <div class="container">
      
        <!-- Carousel -->
        <div class="row">
          <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                <li data-target="#carousel-example-generic" data-slide-to="8"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="../img/carousel/1re.jpg" alt="First slide">
                  <div class="carousel-caption">
                    <p>Join our community</p>
                  </div>
              </div>
              <div class="item">
                <img src="../img/carousel/2re.jpg" alt="Second slide">
                <div class="carousel-caption">
                  <p>Find out which family suits you best based on your personality</p>
                </div>
              </div>
              <div class="item">
                <img src="../img/carousel/3re.jpg" alt="Third slide">
                <div class="carousel-caption">
                  <p>Discover more people like you, with common interests</p>
                </div>
              </div>
              <div class="item">
                <img src="../img/carousel/4re.jpg" alt="Fourth slide">
                <div class="carousel-caption">
                  <p>Discuss Game of Thrones theories</p>
                </div>
              </div>
              <div class="item">
                <img src="../img/carousel/5re.jpg" alt="Fifth slide">
                <div class="carousel-caption">
                  <p>Find out more about Westeros</p>
                </div>
              </div>
              <div class="item">
                <img src="../img/carousel/6re.jpg" alt="Sixth slide">
                <div class="carousel-caption">
                  <p>Find out more about your favorite characters</p>
                </div>
              </div>
              <div class="item">
                <img src="../img/carousel/7re.jpg" alt="Seventh slide">
                <div class="carousel-caption">
                  <p>Learn more about yourself</p>
                </div>
              </div>
              <div class="item">
                <img src="../img/carousel/10re.jpg" alt="Eighth slide">
                <div class="carousel-caption">
                  <p>Be part of a great community</p>
                </div>
              </div>
              <div class="item">
                <img src="../img/carousel/9re.jpg" alt="Ninth slide">
                <div class="carousel-caption">
                  <p>Gain more friends</p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
          <div class="main-text hidden-xs">
            <div class="col-md-12 text-center">
              <h1>Find Your Westerosi Family</h1>
            </div>
          </div>
        </div> <!-- Col-md-12 -->
      </div> <!-- Row -->
    
      <div id="push"></div>

      <!-- Login Form -->
      <form class="login text-center" id="loginForm">
        <h3>Log In</h3>
        <div class="form-group form-inline">
          <label for="email"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></label>
          <input class="form-control" type="email" name="loginEmail" id="loginEmail" placeholder="Email" required>
        </div>

        <div class="form-group form-inline">
          <label for="password"><i class="fa fa-key fa-lg" aria-hidden="true"></i></label>
          <input class="form-control" type="password" name="loginPassword" id="loginPassword" placeholder="Password" required>
        </div>

        <div class="alert alert-danger alert-dismissable alert-custom" id="login_emailAlert">
          <a class="close" aria-label="close">&times;</a>
          <strong>Error!</strong> The e-mail or password are incorrect.
        </div>

        <input type="button" class="woodBtn myBtn" id="loginButton" value="Log In">

        <button id="loginCreateAccount" type="button">Create Account</button>
      </form>

      <!-- Signup Form -->
      <form class="signup text-center" id="signupForm">
        <h3>Create Account</h3>
        
        <div class="form-group form-inline">
          <label for="user"><i class="fa fa-user fa-lg" aria-hidden="true"></i></label>
          <input type="text" name="signupName" placeholder="First Name" required>
         </div>

        <div class="alert alert-danger alert-dismissable alert-custom" id="signup_generalAlert">
          <a class="close" aria-label="close">&times;</a>
          <strong>Error!</strong> The provided email address in already in use.
        </div>

        <div class="form-group form-inline">
          <label for="email"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></label>
          <input type="email" name="signupEmail" id="signupEmail" placeholder="Email" required>
        </div>

        <div class="form-group form-inline">
          <label for="password"><i class="fa fa-key fa-lg" aria-hidden="true"></i></label>
          <input type="password" name="signupPassword" id="signupPassword" placeholder="Password" required>
        </div>

        <div class="form-group form-inline">
          <label for="repassword"><i class="fa fa-key fa-lg" aria-hidden="true"></i></label>
          <input type="password" name="signupRePassword" id="signupRePassword" placeholder="Retype Password" required>
        </div>

        <div class="alert alert-warning alert-dismissable alert-custom" id="signup_passwordAlert">
          <a class="close" aria-label="close">&times;</a>
          <strong>Warning!</strong> The two passwords do not match.
        </div>

        <div class="form-group form-inline">
            <label for="dob"><i class="fa fa-birthday-cake fa-lg" aria-hidden="true"></i></label>
          <input type="text" name="signupDoB" onfocus="(this.type='date')" placeholder="Date of Birth" required>
        </div>

        <div class="form-group form-inline">
          <label for="title"><i class="fa fa-sitemap fa-lg" aria-hidden="true"></i></label>
          <select id="signupTitle" placeholder="Title" name="signupTitle" required>
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

        <input class="woodBtn myBtn" type="button" id="signupButton" value="Sign Up">

        <button id="signupReturnToLogin" type="button" >Already Have an Account</button>
      </form>
      
      </div>
        
      <?php include 'footer.php'; ?>
    </div> <!-- Wrapper -->

   
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    <script src="../js/login.js"></script>
  </body>
</html>
