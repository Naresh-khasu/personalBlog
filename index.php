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
    <!--twitter icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            background: #faf8f8;
            font-family: 'Roboto', sans-serif;
        }
        
        h5,
        p,
        small {
            color: #000000;
        }
        
        h4,
        h5 {
            text-transform: uppercase;
        }
        
        .col-8 {
            float: right;
        }
        
        .section__title {
            width: 50%;
            background: #0095E8;
            color: #000000;
            padding: 10px;
            margin: auto;
            margin-top: 30px;
        }
        
        .seemore {
            margin: 10px;
            padding: 10px;
        }
        
        .btn-light:hover {
            background-color: #0095E8;
            color: #f1f1f1;
        }
        
        .post-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            padding: 10px;
        }
        
        #card {
            height: 500px;
            width: 100%;
            display: inline-block;
            margin: 4px;
            position: relative;
        }
        
        #card img {
            width: 100%;
            height: 100%;
            border-radius: 4px;
            transition: .3s;
        }
        
        #card:hover img {
            filter: blur(2px) brightness(60%);
            box-shadow: 0 0 16px #0095E8;
        }
        
        #card :not(img) {
            position: absolute;
            top: 30%;
            z-index: 1;
            color: #fff;
            text-align: center;
            width: 100%;
            opacity: 0;
            transition: .3s;
        }
        
        #card h3 {
            top: 50%;
        }
        
        #card:hover :not(img) {
            opacity: 1;
        }
        
        #card a {
            position: relative
        }
        
        #blog,
        #portfolio {
            width: 100%;
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
            text-transform: uppercase;
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
            text-transform: uppercase;
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
        
        .dropdown:hover .dropbtn,
        .activenav {
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
                                <img src="https://img.icons8.com/color/48/000000/joomla.png">
                            </div>
                        </div>
                        <div class="col -8">

                            <div class="dropdown">
                                <button class="dropbtn activenav"><a href="#header">Home</a></button>
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
                                <button class="dropbtn"><a href="contact.php">contact us</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
    </div>
    <!-- End Mainmenu Area -->

    <!-- //Header -->
    <!-- Strat Slider Area -->
    <div class="bd-example">
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assests/images/slider/1.jpg" class="d-block w-100" alt="slider image 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lumbini</h5>
                        <p>Birthplace of Lord Buddha</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assests/images/slider/2.jpg" class="d-block w-100" alt="Slider image 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pokhara</h5>
                        <p>The most beautiful places in Nepal & city of lakes and caves</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assests/images/slider/3.jpg" class="d-block w-100" alt="slider image 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pokhara</h5>
                        <p>Sunrise Paragliding Pokhara</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Slider Area -->

    <!--start of blog area-->
    <section id="blog" style="padding-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h4 class="title__line">Featured posts</h4>
                    </div>
                </div>

                <div class="card-deck">
                    <div class="card">
                        <?php
                                  
                                  $query="select *from posts order by post_id desc";
                                  $result=mysqli_query($conn,$query);
                                  echo '<div class="post-wrapper">';
                                  $number=1;
                                  while($row=mysqli_fetch_assoc($result)){
                                      
                                    if($number<=3){
                                     //echo '<abbr title="view full article"><a href="view-post.php?post_id='.$row[post_id].'"><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="30%" width="30%"></a></abbr>';
                                      //echo '<span><b><small>'.$row[post_title].'</small></b></span>';
                                     
                                      echo '<div class="card-group">';
                                          echo '<div class="card">';
                                              echo '<abbr title="view full article"><a href="view-post.php?post_id='.$row[post_id].'"><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="100%" width="100%"></a></abbr>';
                                              echo '<div class="card-body">';
                                              echo '<h5 class="card-title">'.$row[post_title].'</h5>
                                             <p class="card-text"><small>Updated on &nbsp;'.$row[upload_date].'</small></p>
                                              </div>
                                          </div>
                                          </div>';
                                          $number++;
                                    }
                                      
                                  }
                                  echo '</div>';
                            
                              ?>
                            <div class="seemore">
                                <a href="blog.php"><button type="button" class="btn btn-light">See More Posts</button></a>
                            </div>
                    </div>

                </div>
    </section>
    <!-- End blog Area -->
    <section id="portfolio" style="padding-top:10px; width:100%">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h4 class="title__line">Featured portfolio</h4>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <?php
                                      
                                      $query="select *from portfolio order by portfolio_id desc";
                                      $result=mysqli_query($conn,$query);
                                      echo '<div class="post-wrapper2">';
                                      $number=1;
                                      while($row=mysqli_fetch_assoc($result)){
                                          
                                        if($number<=2){
                                         
                                         
                                         
                                              echo '<div class="card" id="card">';
                                                  echo '<img src="data:image/jpeg;base64,'.base64_encode($row[portfolio_name]).'"
                                                    alt="..." height="100%" width="100%" class="image">';
                                                    echo '<h3>'.$row[portfolio_title].'</h3>';
                                                    echo '
                                                </div>';
    
                                              
                                              $number++;
                                        }
                                          
                                      }
                                      echo '</div>';
                                
                                  ?>
                            <div class="seemore">
                                <a href="portfolio.php"><button type="button" class="btn btn-light">See More Portfolio</button></a>
                            </div>


                    </div>
    </section>
    <!-- Start Our Gallery Area -->




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