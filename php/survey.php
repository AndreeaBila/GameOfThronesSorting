<!DOCTYPE html>
<html lang="en-Us">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Westermore Survey</title>

        <!-- Bootstrap -->
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="../../FontAwesome/css/font-awesome.min.css">
        <!-- My CSS -->
        <link href="../css/survey.css" rel="stylesheet">
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
        
        <section class="pull-right col-md-5 answear-section">
            <form class="answear-form">
                <div class="radio">
                    <label><input type="radio" name="option" id="option1"><i class="fa fa-circle" aria-hidden="true" id="icon1"></i>Family</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="option" id="option2"><i class="fa fa-circle" aria-hidden="true" id="icon2"></i>Duty</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="option" id="option3"><i class="fa fa-circle" aria-hidden="true" id="icon3"></i>Honor</label>
                </div>
            </form>

            <button class="btn btn-lg pull-right my-btn" type="submit">Submit</button>
        </section>

        <section class="pull-left col-md-7 text-center fill question-section">
            <!--<div class="message">Get sorted into your House</div>-->
            <div class="question-div">
                <p class="question-p" id="question">Which do you find more important?</p>
            </div>
        </section>


        
       <!--jQuery (necessary for Bootstrap's JavaScript plugins)--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../Bootstrap/js/bootstrap.min.js"></script>
        <!-- The js script for this file -->
        <script src="../js/survey.js"></script>
    </body>
</html>
