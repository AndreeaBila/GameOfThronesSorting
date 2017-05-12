<?php
    session_start();
    require 'security.php';  
   // checkSession();
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
        <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="../../FontAwesome/css/font-awesome.min.css">
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
    <body>
        
        <!-- Fixed top navbar with brand as logo image tags -->
        <nav class="container navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" datatarget="#
                    bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img class="sigil" alt="Sigil" src="../img/sigils/lannister.png"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#" id="addTitle">Queen Andreea Lannister </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ariahaspopup="true" aria-expanded="false"> <span class="caret"></span></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="index.php">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="clear"></div>

        <div class="container  my-content">        
            <aside class="col-md-3 pull-right">
                <img class=" flag" src="../img/flags/lannister.jpg" alt="">
            </aside>

            <section class="col-md-9 content-left text-center">
                    <h1>House Lannister</h1>
                    <h4>Words: "Hear me roar"</h4>

                    <div class="family">
                        <h4>Family and Friends</h4>
                        <img src="../img/families/lannister1.png" alt="no">  
                    </div>
                    
                    <div class="home">
                        <h4>Home</h4>
                        <img class="cols-md-3" src="../img/homes/casterlyRock.jpg" alt="no">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit 
                        fuga, obcaecati magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur 
                        dolore, labore facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in 
                        ab non tenetur illo, dignissimos reiciendis minima nobis.</p>
                        
                    </div>

                    <div class="more">
                        <h4>History</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit fuga, obcaecati magnam
                            voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur dolore, labore facere 
                            laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in ab non tenetur illo, 
                            dignissimos reiciendis minima nobis. Harum ut possimus quasi, numquam, nam officiis. Doloremque soluta nulla, 
                            fugit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit fuga, obcaecati 
                            magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur dolore, labore 
                            facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in ab non tenetur 
                            illo, dignissimos reiciendis minima nobis. Harum ut possimus quasi, numquam, nam officiis. Doloremque soluta 
                            nulla, fugit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit fuga, 
                            obcaecati magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur dolore,
                            labore facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in ab non
                            tenetur illo, dignissimos reiciendis minima nobis. Harum ut possimus quasi, numquam, nam officiis. Doloremque 
                            soluta nulla, fugit.</p>
                    </div> 
                
                    
            </section>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../Bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>