<?php 
$conn=mysqli_connect('localhost','root','','tourandtravel');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PERSONAL BLOG</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Stylesheets -->
    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <!--bootstrap end-->
    <link rel="stylesheet" href="assests/css/plugins.css">
    <link rel="stylesheet" href="assests/style.css">
    <!-- Cusom css -->
    <link rel="stylesheet" href="assests/css/custom.css">
    <!-- Modernizer js -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body, section {
            background: #faf8f8;
            font-family: 'Roboto', sans-serif;
            color:#000000;
        }
        small{
            color:#000000;
        }
        
        .col-8 {
            float: right;
        }
    


        
        .dropbtn {
            background-color: #0095E8;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        /* The container <div> - needed to position the dropdown content */
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        /* Dropdown Content (Hidden by Default) */
        
        .dropdown a {
            text-decoration: none;
            color: #f1f1f1;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        /* Links inside the dropdown */
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        /* Change color of dropdown links on hover */
        
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        /* Show the dropdown menu on hover */
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        /* Change the background color of the dropdown button when the dropdown content is shown */
        
        .dropdown:hover .dropbtn, .activenav {
            background-color: #499cdb;
            border: 1px solid white;
            border-radius: 10px;
        }
        .dropbtn {
            text-transform: uppercase;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header -->
        <header id="header" class="jnr__header header--one clearfix">
            <!-- Start Header Top Area -->

            <!-- End Header Top Area -->
            <!-- Start Mainmenu Area -->
            <div class="mainmenu__wrapper bg__cat--1 poss-relative header_top_line sticky-top sticky__header">
                <div class="container">
                    <div class="row ">
                        <div class="col-4">
                            <div class="logo">
                                <img src="https://img.icons8.com/nolan/64/google-blog-search.png">
                            </div>
                        </div>
                        <div class="col -8">
                            <div class="dropdown">
                                <button class="dropbtn"><a href="index.php">Home</a></button>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn">About us</button>
                                <div class="dropdown-content">
                                    <a href="overview.php">Overview</a>
                                    <a href="#">Team</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="blog.php">Blog</a></button>

                            </div>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="portfolio.php">portfolio</a></button>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn activenav"><a href="contact.php">contact us</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
    </div>
    <!-- End Mainmenu Area -->






        <section id="contact" class="junior__gallery__area bg--white ">
            <div class="row">
            <nav aria-label="breadcrumb"  style="width:100%"> 
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tourandtravel/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
    
  </ol>
</nav>
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Get in touch</h2>
                    </div>
                </div>
                <div class="col-sm-8" style="padding-left:50px">
                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">WE WANT TO HEAR FROM YOU</h5>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputText1">Full name</label>
                                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter name">
                                    <small id="textHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group" class="input-group">
                                    <label for="exampleInputText1">Message</label>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="padding-right:50px">
                    <div class="card" style="background: 'assests/images/contacts.png'; background-repeat:'no-repeat'">
                        <div class="card-body">
                            <h5 class="card-title">OTHER WAYS TO CONNECT WITH US</h5>
                            <p class="card-text">
                                We'd love to hear from you.
                            </p>
                            <br>
                            <br>
                            <a href="#" class="card-link"><img src="https://img.icons8.com/android/24/000000/twitter.png"> Follow us on twitter</a><br><br>
                            <a href="#" class="card-link"><img src="https://img.icons8.com/material-rounded/24/000000/facebook-new.png"> Like us on facebook</a><br><br>
                            <a href="#" class="card-link"><img src="https://img.icons8.com/material/24/000000/instagram-new.png">Follow us on instagram</a>

                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section>

        <?php include('footer.php'); ?>
    <!-- //Footer Area -->
    <!-- JS Files -->
    <script src="assests/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="assests/js/popper.min.js"></script>
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/plugins.js"></script>
    <script src="assests/js/active.js"></script>

</body>

</html>