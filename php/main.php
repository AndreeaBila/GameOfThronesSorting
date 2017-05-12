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
                <img class=" flag" src="../img/flags/lannister.jpg" alt="">
            </aside>

            <section class="col-md-9 content-left text-center">
                    <h1>House Lannister</h1>
                    <h2>Words: "Hear me roar"</h2>

                    <div class="family">
                        <h3>Family and Friends</h3>
                        <img src="../img/families/lannister1.png" alt="no">  
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit 
                        fuga, obcaecati magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur 
                        dolore, labore facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in 
                        ab non tenetur illo, dignissimos reiciendis minima nobis.</p>
                    </div>
                    
                    <div class="home">
                        <h3>Home</h3>
                        <img src="../img/homes/lannister.jpg" alt="no">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero facere esse odit 
                        fuga, obcaecati magnam voluptate neque consequuntur voluptatibus quidem, inventore minus? Explicabo pariatur 
                        dolore, labore facere laborum. Eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis id in 
                        ab non tenetur illo, dignissimos reiciendis minima nobis.</p>
                        
                    </div>

                    <div class="more">
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

        <!-- The modal for the send the raven interface -->
         <div class="modal fade" id="postsModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- This will be the header of the modal -->
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">&times;</button>
                        <h2>Raven Network</h2>
                    </div>
                    <div class="main-body">
                        <div class="well">
                            asdsd
                        </div>
                        <div class="well">
                            asdsd
                        </div>
                        <div class="well">
                            asdsd
                        </div>
                        <div class="well">
                            asdsd
                        </div>
                        <div class="well">
                            asdsd
                        </div>
                        <div class="well">
                            asdsd
                        </div>
                    </div>
                    <div>
                        <h1 class="text-center">Send a raven</h1>
                    </div>
                    <div class="main-body">
                        <form id="postsForm">
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input class="form-control" type="text" name="Title" id="Title" value="">
                            </div>
                            <div class="form-group">
                                <label for="Content">Comment:</label>
                                <textarea class="form-control" rows="5" name="Content" id="Content"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btn-lg" id="btnSendRaven">Send It</a>
                        <a class="btn btn-danger btn-lg" data-dismiss="modal" id="modalDismiss">Dismiss</a>
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