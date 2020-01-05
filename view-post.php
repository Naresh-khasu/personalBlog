<?php
$conn=mysqli_connect('localhost','root','','tourandtravel') or die('could not connect to database');
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
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
        <!--bootstrap end-->
        <link rel="stylesheet" href="assests/css/plugins.css">
        <link rel="stylesheet" href="assests/style.css">
        <!-- Cusom css -->
        <link rel="stylesheet" href="assests/css/custom.css">
        <!-- Modernizer js -->
        <style>
            body {
                background: #faf8f8;
                font-family: 'Roboto', sans-serif;
                ;
            }
            
            .col-9,
            .col-3 {
                padding-top: 10px;
                border: 10px solid white;
            }
            
            .post_title {
                color: black;
                font-size: 20px;
                padding: 10px;
            }
            
            .title {
                color: black;
                font-size: 20px;
                text-transform: capitalize;
            }
            
            .desc {
                color: black;
                font-size: 12px;
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
            
            .dropdown a {
                text-decoration: none;
                color: #f1f1f1;
            }
            /* Dropdown Content (Hidden by Default) */
            
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
            
            .dropdown:hover .dropbtn, .activenav{
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
                            <div class="col-8">
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
                                    <button class="dropbtn activenav"><a href="blog.php">Blog</a></button>

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
            </header>
            </div>




            </nav>
            <div class="row ">

                <div class="col-9">
                    <nav aria-label="breadcrumb" style="width:100%">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../tourandtravel/">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>

                        </ol>
                    </nav>
                    <div class="content">
                        <?php
                                   if(isset($_GET['post_id'])){
		
                                    $post_id=$_GET['post_id'];
                                    
                                    
                                    $query="select *from posts where post_id=$post_id";
                                    $result=mysqli_query($conn,$query);
                                    
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo '<div class="post_title">'.$row[post_title].'</div>';
                                       echo '<div><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="auto" width="100%"></div>';
                                        
                                        echo '<div class="desc" style="color: black;">'.$row[post_content].'</div>';
                                    }
                                }
                                ?>

                    </div>
                </div>
                <div class="col-3">
                    Recent posts
                    <div class="recent">
                        <?php
                                  
                                    $query="select *from posts where post_id != $post_id order by post_id desc";
                                    $result=mysqli_query($conn,$query);
                                    $number=1;
                                    while($row=mysqli_fetch_assoc($result)){
                                        
                                        if($number<=4){
                                       echo '<div class="recentPost"><abbr title="view full article"><a href="view-post.php?post_id='.$row[post_id].'"><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="200px" width="90%" ></a></abbr>';
                                        echo '<p class="title">'.$row[post_title].'</p></div>';
                                        $number++;
                                        }
                                        
                                    }
                              
                                ?>
                    </div>
                </div>
            </div>


            <?php include('footer.php'); ?>
            <!-- //Footer Area -->


    </body>

    </html>