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
        <link rel="stylesheet" href="assests/css/plugins.css">
        <link rel="stylesheet" href="assests/style.css">
        <!-- Cusom css -->
        <link rel="stylesheet" href="assests/css/custom.css">
        <!-- Modernizer js -->
        <style>
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
            }
            
            .pages a:hover {
                text-decoration: none;
                background-color: #bd3030;
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
                                <button class="dropbtn"><a href="portfolio.php">portfolio</a></button>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn"><a href="#contact">contact us</a></button>
                            </div>
                        </div>
                    </div>


            </header>
            </div>
            <!-- End Mainmenu Area -->

            <!-- //Header -->

            <section id="blog" style="padding-top:10px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="section__title text-center">
                                <h2 class="title__line">Most Recent Posts</h2>
                            </div>
                        </div>

                        <div class="card-deck">
                            <div class="card" style="margin:10px;">
                                <?php
                                      //find out the number of results
                                      $query="select *from posts";
                                      $result=mysqli_query($conn,$query);
                                      $number_of_results=mysqli_num_rows($result);
// define how many results per page
                                      $results_per_page=6;
 //number of total pages                                    
                                      $number_of_pages=ceil($number_of_results/$results_per_page);
                                      
                                      echo '<div class="post-wrapper">';
                                     
                                     /* while($row=mysqli_fetch_assoc($result)){
                                          
                                       
                                         //echo '<abbr title="view full article"><a href="view-post.php?post_id='.$row[post_id].'"><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="30%" width="30%"></a></abbr>';
                                          //echo '<span><b><small>'.$row[post_title].'</small></b></span>';
                                         
                                          echo '<div class="card-group">';
                                              echo '<div class="card">';
                                                  echo '<abbr title="view full article"><a href="view-post.php?post_id='.$row[post_id].'"><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="100%" width="100%"></a></abbr>';
                                                  echo '<div class="card-body">';
                                                  echo '<h5 class="card-title">'.$row[post_title].'</h5>
                                                 <p class="card-text"><small class="text-muted">Published on &nbsp;'.$row[upload_date].'</small></p>
                                                  </div>
                                              </div>
                                              </div>';
                                          
                                        
                                          
                                      }*/

                                      if(!isset($_GET['page'])){
                                          $page=1;
                                      }
                                      else{
                                          $page=$_GET['page']; 
                                      }

                                      $this_page_first_result=($page-1)*$results_per_page;

                                      $query1="select * from posts limit $this_page_first_result ,$results_per_page";
                                      $result1=mysqli_query($conn,$query1);
                                      while($row=mysqli_fetch_assoc($result1)){  
                                                                  
                                         echo '<div class="card-group">';
                                             echo '<div class="card">';
                                                 echo '<abbr title="view full article"><a href="view-post.php?post_id='.$row[post_id].'"><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="100%" width="100%"></a></abbr>';
                                                 echo '<div class="card-body">';
                                                 echo '<h5 class="card-title">'.$row[post_title].'</h5>
                                                <p class="card-text"><small class="text-muted">Published on &nbsp;'.$row[upload_date].'</small></p>
                                                 </div>
                                             </div>
                                             </div>';
                                         
                                       
                                         
                                     }
                                    
//display the links to the pages
 
    echo '</div>';
                                
                                  ?>


                            </div>
            </section>
            <?php
            echo '<div class="pages">page =>&nbsp;';
            for($page=1;$page<=$number_of_pages;$page++){
                echo '<a href="blog.php?page='.$page.'">'.$page.'&nbsp; </a>';
                  } 
            echo '</div>';      
                  ?>
                <footer id="footer" class="footer-area footer--2">


                    <div class="copyright  bg--theme">
                        <div class="container">
                            <div class="row align-items-center copyright__wrapper justify-content-center">
                                <div class="col-lg-12 col-sm-12 col-md-12">

                                    <div class="coppy__right__inner text-center">
                                        <p><i class="fa fa-copyright"></i>All Right Reserved.
                                            <a href="#top"></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- //Footer Area -->
                <!-- JS Files -->


    </body>

    </html>