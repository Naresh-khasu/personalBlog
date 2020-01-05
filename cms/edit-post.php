<?php
$conn=mysqli_connect('localhost','root','','tourandtravel') or die('could not connect to database');
?>
    <?php include('menu.php'); ?>
    <?php 
session_start();
$email=$_SESSION['email'];
//delete post
$conn=mysqli_connect('localhost','root','','tourandtravel');
if(isset($_GET['delete_post_id'])){
		
    $delete_post_id=$_GET['delete_post_id'];
    
    
    $query="delete from posts where post_id=$delete_post_id";
    $result=mysqli_query($conn,$query);
    if($result){
        echo '<script> alert("deleted")</script>';
        header('location:displaypost.php');
    }
    
}
if(isset($_GET['edit_post_title_id'])){
    $edit_post_title_id=$_GET['edit_post_title_id'];
  
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>EDIT POST</title>
    </head>
    <style>
        body {
            background: #faf8f8;
        }
        
        .content {
            width: 80%;
            margin: 0 auto;
            background: #f1f1f1;
        }
        
        .post_title {
            margin: 20px 0;
        }
        
        a,
        abbr {
            text-decoration: none;
            color: #000000;
            font-size: 20px;
        }
        
        a:hover {
            border: #0095E8 2px solid;
        }
    </style>

    <body>

    </body>
    <div class="content">
        <?php
               if(isset($_GET['post_id'])){

                $post_id=$_GET['post_id'];
                
                
                $query="select *from posts where post_id=$post_id";
                $result=mysqli_query($conn,$query);
                
                while($row=mysqli_fetch_assoc($result)){
                    echo '<div class="post_title"><abbr title="Edit post title"><a href="edit-post.php?edit_post_title_id='.$row[post_id].'">'.$row[post_title].'</abbr></a></div>';
                   echo '<div> <abbr title="Edit fetaured image"><a href=""><img src="data:image/jpeg;base64,'.base64_encode($row[featured_image]).'"  alt="..." height="500px" width="50%"></abbr></a></div>';
                    
                    echo '<div class="desc" style="color: black;"><abbr title="Edit post description"><a href="">'.$row[post_content].'</abbr></a></div>';
                }
            }
            ?>

    </div>

    </html>