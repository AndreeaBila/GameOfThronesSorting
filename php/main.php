<?php
    session_start();
    require 'security.php';  
    //checkSession();
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
        <nav class="container my-nav navbar navbar-default navbar-fixed-top">
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
                    <a class="navbar-brand" href="#"><img alt="Sigil" src="../img/westermore2.png"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#" id="addTitle">Queen Andreea Lannister </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ariahaspopup="true" aria-expanded="false"> <span class="caret"></span></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
                                <li><a id="openPostButton" data-toggle="modal" data-target="#postsModal"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send a raven</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="clear"></div>

        <div class="container  my-content">        
            <aside class="col-md-3 pull-right">
                <img class="flag" src="../img/flags/lannister.jpg" alt="">
            </aside>

            <section class="col-md-9 content-left text-center">
                <div class="col-md-4 icon">
                    <img class="sigil" id="titleSigil" src="../img/sigils/lannister.png" alt="no">
                </div>
                <div class="col-md-4">
                    <h1 id="addHouse">House Lannister</h1>
                    <h2 id="addWords">Words: "Hear me roar"</h2>
                </div>
                <div class="col-md-4 icon">
                    <img class="sigil" id="titleSigil" src="../img/sigils/lannister.png" alt="no">
                </div>
                    
                <div class="overview col-md-12">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit 
                    fuga, obcaecati magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur 
                    dolore, labore facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in 
                    ab non tenetur illo, dignissimos reiciendis minima nobis.</p>
                </div>

                <div class="family col-md-12">
                    <h3>Family and Friends</h3>
                    <img src="../img/families/lannister.png" alt="no">  
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit 
                    fuga, obcaecati magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur 
                    dolore, labore facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in 
                    ab non tenetur illo, dignissimos reiciendis minima nobis.</p>
                </div>
                
                <div class="home col-md-12">
                    <h3>Home</h3>
                    <img src="../img/homes/lannister.jpg" alt="no">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit 
                    fuga, obcaecati magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur 
                    dolore, labore facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in 
                    ab non tenetur illo, dignissimos reiciendis minima nobis.</p>
                    
                </div>

                <div class="more col-md-12">
                    <h3>History</h3>
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

        <div class="clear"></div>

        <!-- The modal for the send the raven interface -->
         <div class="modal fade" id="postsModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- This will be the header of the modal -->
                    <div id="ravenNetwork">
                        <div class="modal-header">
                            <button class="close" type="button" data-dismiss="modal">&times;</button>
                            <h2>Raven Network</h2>
                        </div>
                        <div class="main-body">
                            <div class="well">
                                <footer>
                                    <p class="pull-right">5th of May 2017</p> 
                                    <h4>Queen Andreea of House Lannister</h4>
                                    <p>| #lorem #ipsum</p>
                                </footer>
                                <hr>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam itaque cumque unde provident sunt ea 
                                    quae. Vero unde, optio harum iure qui dolores sed animi ipsam ratione vitae. Saepe, delectus! </p>
                            </div>

                            <div class="well">
                                <footer>
                                    <p class="pull-right">5th of May 2017</p> 
                                    <h4>Queen Andreea of House Lannister</h4>
                                    <p>| #lorem #ipsum</p>
                                </footer>
                                <hr>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam itaque cumque unde provident sunt ea 
                                    quae. Vero unde, optio harum iure qui dolores sed animi ipsam ratione vitae. Saepe, delectus! </p>
                            </div>

                            <div class="well">
                                <footer>
                                    <p class="pull-right">5th of May 2017</p> 
                                    <h4>Queen Andreea of House Lannister</h4>
                                    <p>| #lorem #ipsum</p>
                                </footer>
                                <hr>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam itaque cumque unde provident sunt ea 
                                    quae. Vero unde, optio harum iure qui dolores sed animi ipsam ratione vitae. Saepe, delectus! </p>
                            </div>
                        </div>
                    </div>
                    

                    <button id="sendRavenButton" class="btn btn-1 btn-lg">Send a Raven</button>

                    <div id="sendRaven">
                        <div class="modal-header">
                            <h2>Send a raven</h2>
                        </div>
                        
                    <div class="main-body">
                        <form id="postsForm">
                            <div class="form-group">
                                <label for="Date">Date</label>
                                <input class="form-control" type="date" name="date" id="dateModalInput" value="">
                            </div>
                            <div class="form-group">
                                <label for="Details">Details (add your tags)</label>
                                <input class="form-control" type="text" name="details" id="detailsModalInput" value="">
                            </div>
                            <div class="form-group">
                                <label for="Content">Message:</label>
                                <textarea class="form-control" rows="12" name="Content" id="Content"></textarea>
                            </div>
                        </form>
                        </div>
                        <div class="twoButtons">
                            <button class="btn btn-lg btn-2" id="btnSendRaven">Send It</button>
                            <button class="btn btn-lg btn-2" id="returnToNetwork">Return</button>
                        </div>
                    </div>
                        
                </div>
            </div>
    </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../Bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>