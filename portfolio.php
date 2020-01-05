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
        <!--bootstrap end-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assests/css/plugins.css">
        <link rel="stylesheet" href="assests/style.css">
        <!-- Cusom css -->
        <link rel="stylesheet" href="assests/css/custom.css">
        <!-- Modernizer js -->
        <style>
            body {
                background: #faf8f8;
                font-family: 'Roboto', sans-serif;
            }
            
            .section {
                padding-top: 10px;
            }
            
            #posts {
                float: left;
            }
            
            .post-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                margin: 10px;
            }
            
            .pages {
                text-align: center;
                color: #2ab4d6;
                text-transform: uppercase;
                font-size: 20px;
                ;
            }
            
            .pages a:hover {
                text-decoration: none;
                background-color: #bd3030;
            }
            
            .section {
                padding-top: 10px;
            }
            
            #posts {
                float: left;
            }
            
            .post-wrapper {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                margin: 10px;
            }
            
            .pages {
                width: 100%;
                text-align: center;
                color: #106134;
                text-transform: uppercase;
                font-size: 20px;
            }
            
            .pages a {
                color: black;
                padding: 8px 16px;
                text-decoration: none;
                border: 1px solid #0095E8;
            }
            
            .pages a:active {
                text-decoration: none;
                background-color: #2214e7;
            }
            
            .pages a:hover {
                text-decoration: none;
                background-color: #0095E8;
            }
            
            #card {
                height: 300px;
                width: 400px;
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
                box-shadow: 0 0 16px rgb(64, 156, 243);
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
            
            .dropdown:hover .dropbtn {
                background-color: #499cdb;
                border: 1px solid white;
                border-radius: 10px;
            }
            
            .dropbtn {
                text-transform: uppercase;
                font-weight: bold;
                font-size: 20px;
            }
            
            .activenav {
                background-color: #499cdb;
                border: 1px solid white;
                border-radius: 10px;
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
                                    <button class="dropbtn"><a href="blog.php">Blog</a></button>

                                </div>
                                <div class="dropdown">
                                    <button class="dropbtn activenav"><a href="portfolio.php">portfolio</a></button>
                                </div>
                                <div class="dropdown">
                                    <button class="dropbtn"><a href="contact.php">contact us</a></button>
                                </div>
                            </div>
                        </div>

                    </div>
            </header>
            <!-- //Header -->

            <section id="blog" style="padding-top:10px">
                <div class="container">
                    <div class="row">
                        <nav aria-label="breadcrumb" style="width:100%">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../tourandtravel/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>

                            </ol>
                        </nav>

                        <div class="card-deck">
                            <div class="card" style="margin:10px;">
                                <?php
                                      //find out the number of results
                                      $query="select *from portfolio";
                                      $result=mysqli_query($conn,$query);
                                      $number_of_results=mysqli_num_rows($result);
// define how many results per page
                                      $results_per_page=6;
 //number of total pages                                    
                                      $number_of_pages=ceil($number_of_results/$results_per_page);
                                      
                                      echo '<div class="post-wrapper">';
                                     
                           

                                      if(!isset($_GET['page'])){
                                          $page=1;
                                      }
                                      else{
                                          $page=$_GET['page']; 
                                      }

                                      $this_page_first_result=($page-1)*$results_per_page;

                                      $query1="select * from portfolio limit $this_page_first_result ,$results_per_page";
                                      $result1=mysqli_query($conn,$query1);
                                      while($row=mysqli_fetch_assoc($result1)){  
                                                                  
                                        echo '<div class="card" id="card">';
                                              echo '<img src="data:image/jpeg;base64,'.base64_encode($row[portfolio_name]).'"
                                                alt="..." height="100%" width="100%" class="image" onclick="zoompic()"  id="image">';
                                                echo '<h3>'.$row[portfolio_title].'</h3>';
                                                echo '
                                                <ul class="gallery__zoom">
                                                    <li><a href="view-portfolio.php?portfolio_id='.$row[portfolio_id].'" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
                                                    
                                                </ul>
                                                <h4 class="gallery__title">
                                                    <a href="#"></a>
                                                </h4>
                                            </div>';
                                         
                                     }
                                    
//display the links to the pages
 
    echo '</div>';
                                
                                  ?>


                            </div>
            </section>
            <?php
            echo '<div class="pages">';
            for($page=1;$page<=$number_of_pages;$page++){
                echo '<a href="portfolio.php?page='.$page.'">'.$page.'&nbsp; </a>';
                  } 
            echo '</div>';      
                  ?>
                <?php include('footer.php'); ?>
                <!-- //Footer Area -->
                <!-- JS Files -->


    </body>

    </html>