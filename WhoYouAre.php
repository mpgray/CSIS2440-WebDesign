<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- for this assignment only -->
    <link href="css/view.css" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
            body {
                background-color: <?php
                //change background to blue if male and pink if female
                $gender = htmlentities($_POST['gender']);
                if($gender == "Male"){
                    printf("blue");
                }
                elseif($gender == "Female"){
                    printf("pink");
                }
                ?>  
            }
            .section-heading {
               background-color: <?php
                //change background to blue if male and pink if female
                if($gender == "Male"){
                    printf("grey");
                }
                elseif($gender == "Female"){
                    printf("pink");
                }
                ?>   
            }
            
   </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php">Start Page [unfinished]</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->


    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Who Am I? Assignment 1</h2>
                    <p class="lead">
                    <?php
//HERE IS THE CODE FOR THE ASSIGNMENT 
                   //paramatizes form data
                   extract($_POST);
                   //prints out form data and changes any html tags
                   printf("Hello <b>%s</b>! Do I have it correct that your address is <br /><b>%s</b> in the state of <b>%s</b>?<br />\n",
                         htmlentities($Name), htmlentities($Address), htmlentities($State));
                   printf("Not sure why it is important, but you are <b>%s</b> and <b>%1.0f</b> years old.<br />\n", $gender, $Age);
                   //increment and display years from current to birthyear
                   printf("You have lived all these years. \n");
                   for($i = $Age; $i > 0; $i--){
                       //displays each year counting down
                        printf("<b>%4.0f</b> ",date(Y)- $Age + $i);                      
                   }
                   //open and read the txt file line by line so it can be html formatted.
                   $PostPage = fopen("media/PostPage.txt", "r");
                   if($PostPage){
                        while (($line = fgets($PostPage)) !== false) {
                            printf("<br />%s\n",$line);
                        }
                   fclose($PostPage); 
                   }
                   //does not try loop if txt file not found
                   else {
                       printf("cannot find the file");
                    }

                                     
 //END OF ASSIGNMENT CODE                   
                    ?>
                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="media/<?php
                    //I got cute and added an image as well as change background.
                    printf("%s",$gender);
                    ?>.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
