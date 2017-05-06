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
        <link href="../css/survey.css" rel="stylesheet">
        <link rel="shortcut icon" href="../img/westermore2.ico">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../js/survey.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
        <div class="answearRight">
            <form>
                <input type="radio" name="answear" id="firstAnswear"><span>Stark</span><br>
                <input type="radio" name="answear" id="secondAnswear"><span>Lannister</span><br>
                <input type="radio" name="answear" id="thirdAnswear"><span>Targaryen</span><br>
            </form>
            
            <input type="button" name="submitSurveyAnswearButton" id="submitSurveyAnswearButton" value="Submit">
        </div>

        <div class="questionLeft">
            <div class="questionDiv">
                <p class="questionText" id="surveyQuestion">Which is your favorite house</p>
            </div>   
        </div>

        <div class="clear"></div>
    
    <!--jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="../Bootstrap/js/bootstrap.min.js"></script>-->
    <!-- The js script for this file -->
    </body>
</html>
