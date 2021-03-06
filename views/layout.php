
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/css/styles.css">

    <title>Layout</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #7F2989" >

        <div class="container">
            <div class="navbar-header">
                <div class="serif">
                    <nav>        

                        <div class="nav-link">
                            <ul class="nav navbar-nav" >
                                <li    <a  <img src="views/images/Delicious.png"  width="120" height="100" alt="">     
                                    </a></li>

                                <li class="active">    <a href='index.php'>Home</a></li>

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Recipes <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a  href='?controller=cuisine&action=readAllCuisines'>By Cuisine</a></li>

                                        <li><a href="?controller=user&action=readallusers">By Contributors</a></li>
                                     
                                          <li><a href="?controller=post&action=readAllPosts">All Recipes</a></li>

                                    </ul>
                                </li>


                              



                                <li><a href='?controller=user&action=displayallusers'>Blog members</a></li>
                                <li> <a href='?controller=pages&action=AboutUs'>About us</a></li>
                                <li> <a href='?controller=pages&action=Contactus'>Contact us</a></li>
                            </ul>
                        </div>

                    </nav>

                </div>
            </div>
            <ul class="nav navbar-nav navbar-right">

                <?php
                session_start();

                if (isset($_SESSION['username'])) {
                    include "views/users/userLayout.php";
                } else {
                    ?> 
                    <li>  <a href='?controller=user&action=register'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href='?controller=user&action=login'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                <?php } ?>

            </ul>
        </div>
    </nav>

                   

              
            

    <div class="w3-container w3-pink">
        <?php require_once('routes.php'); ?>
        </<div>
          
                <div class="footer">
                    
                    Copyright &COPY; <?= date('Y'); ?> || Follow us on our social media accounts:
                    <a href="#" class="fb-ic mr-3"><i class="fa fa-lg fa-facebook"> </i></a>
                    <!--Twitter-->
                    <a href="#" class="tw-ic mr-3"><i class="fa fa-lg fa-twitter"> </i></a>

                    <!--Instagram-->
                    <a href="#" class="ins-ic mr-3"><i class="fa fa-lg fa-instagram"> </i></a>
                    <!--Pinterest-->
                    <a href="#" class="pin-ic mr-3"><i class="fa fa-lg fa-pinterest"> </i></a>

                    <!--Youtube-->
                    <a href="#" class="yt-ic mr-3"><i class="fa fa-lg fa-youtube"> </i></a>
                    <a href="#" class="yt-ic mr-3"><i class="fa fa-rss"></i></a>
                     </div>
            

                </body>
                </html>

