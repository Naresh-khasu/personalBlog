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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POSTS</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
        .post {
            width: 80%;
            margin: 0 auto;
            padding-top: 10%;
        }
        
        table {
            width: 100%;
            background: #f1f1f1;
            color: #000000;
        }
        
        th {
            text-transform: uppercase;
        }
        
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #585656;
        }
        
        a {
            text-decoration: none;
            color: #000000;
        }
        
        abbr {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="post">

        <?php
        
        $conn=mysqli_connect('localhost','root','','tourandtravel') or die("Cannot connect to database");


$query="select *from posts order by post_id desc";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);

if($count>0)
{
	
	$number=1;
    echo '<table>';
    echo '<thead>';
     echo '<tr>';
       echo '<th scope="col">#</th>
        <th scope="col">Post_title</th>
        <th scope="col">Upload date</th>
        <th scope="col">actions</th>
        
        
       
      </tr>
    </thead>';
    
        while($row=mysqli_fetch_array($result))
        {
            
            $post_title=$row['post_title'];
            $post_id=$row['post_id'];
            $upload_date=$row['upload_date'];
            
            
            
            echo '<tbody>';
            echo '<tr>';
            echo '<td scope="row">' .$number. '</th>';
            echo '<td><abbr title="Click to view post"><a href="../view-post.php?post_id='.$post_id.'">' .$post_title. '</abbr></a>
            
            </td>';
            echo '<td>' .$upload_date. '</td>';
            echo '<td><abbr title="Edit this post"><a id="edit" href="texteditor/editor.php?post_id='.$post_id.'">
            <img src="https://img.icons8.com/metro/26/000000/edit.png"></a> &nbsp; &nbsp;&nbsp;<a id="delete" onclick="return checkDelete()" href="displaypost.php?delete_post_id='.$post_id.'">
            <img src="https://img.icons8.com/material/26/000000/delete-sign--v1.png"></a></abbr></td>';
                
            echo '</tr>
            
                
            </tbody>';
        
            
            
        
            
            $number++;
            
         }
         echo '</table>';
}

else{
    echo '<table>';
    echo '<thead>';
     echo '<tr>';
       echo '<th scope="col">#</th>
        <th scope="col">Post_title</th>
        <th scope="col">Upload date</th>
       
      </tr>
    </thead>';
    echo '<tbody>';
            echo '<tr>';
            echo '<td scope="row"> 1 </th>';
            echo '<td> No posts yet </td>';
            echo '<td> </td>';
                
            echo '</tr>
            
                
            </tbody>';

            echo '</table>';
    
   	}
    
        ?>
    </div>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
</body>

</html>