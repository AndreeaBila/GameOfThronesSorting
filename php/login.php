<!DOCTYPE html>
<html lang="en-Us">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Westermore</title>

        <!-- Bootstrap -->
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <!--<link rel="stylesheet" href="../../FontAwesome/css/font-awesome.min.css">-->
        <!-- My CSS -->
        <link href="../css/login.css" rel="stylesheet">
        <link rel="shortcut icon" href="../img/westermore2.ico">

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../js/login.js"></script>-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
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
                </div>
            </div>
        </div>
        <div id="push">
        </div>

        <div class="container">
            <form class="login" id="loginForm">
                <h2>Log In</h2>

                <input type="email" name="loginEmail" id="loginEmail" placeholder="Email">
                <input type="password" name="loginPassword" id="loginPassword" placeholder="Password">
                <div class="alert alert-danger alert-dismissable" id="login_emailAlert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong> The e-mail or password are incorrect.
                </div>
                <input type="button" id="loginButton" value="Log In">

                <button id="loginCreateAccount" type="button">Create Account</button>
            </form>

            <form class="signup" id="signupForm">
                <h2>Create Account</h2>

                <input type="text" name="signupName" placeholder="First Name">
                <div class="alert alert-danger alert-dismissable" id="signup_generalAlert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong> We have encountered a problem.
                </div>
                <input type="email" name="signupEmail" id="signupEmail" placeholder="Email">
                <input type="password" name="signupPassword" id="signupPassword" placeholder="Password">
                <input type="password" name="signupRePassword" id="signupRePassword" placeholder="Retype Password">
                <div class="alert alert-warning alert-dismissable" id="signup_passwordAlert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong> The two passwords do not match.
                </div>
                <input type="text" name="signupDoB" onfocus="(this.type='date')" placeholder="Date of Birth">
                <select id="signupTitle" placeholder="Title" name="signupTitle">
                    <option value="" disabled selected>Title</option>
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
                <input type="button" id="signupButton" value="Sign Up">

                <button id="signupReturnToLogin" type="button" >Already Have an Account</button>
            </form>
            
        </div>

        
        <?php include 'footer.php'; ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/login.js"></script>
    </body>
</html>
