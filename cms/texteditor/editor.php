<?php include('../menu.php'); ?>
<?php 
$update=false;

$conn=mysqli_connect('localhost','root','','tourandtravel') or die('could not connect');
if (isset($_POST['update'])) {
    
    $post_title=$_POST['post_title'];
    $post_desc=$_POST['php_post_text'];
    $post_id=$_POST['post_id'];
    $upload_date=date("Y-m-d");
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
    if(empty($image)){
    $query="UPDATE posts SET post_title='$post_title', post_content='$post_desc', upload_date ='$upload_date' WHERE post_id='$post_id'";
    if(mysqli_query($conn,$query)){
        
        header('location:../displaypost.php');
        echo '<script> alert("updated successfully");</script>';
         }
    }
    else{
        $query="UPDATE posts SET post_title='$post_title', post_content='$post_desc', upload_date ='$upload_date', featured_image='$image'  WHERE post_id='$post_id'";
        if(mysqli_query($conn,$query)){
            header('location:../displaypost.php');
        echo '<script> alert("updated successfully");</script>';
        
         }
    }
    
}
if(isset($_POST['post'])){
    $post_title=$_POST['post_title'];
    $post_desc=$_POST['php_post_text'];
    $upload_date=date("Y-m-d");
     $image=addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
     $query="INSERT INTO posts (post_title, post_content, upload_date, featured_image) 
     VALUES ('$post_title','$post_desc','$upload_date','$image')";
     if(mysqli_query($conn,$query)){
        header('location:../displaypost.php');
        echo '<script> alert("Post has been published!!!"); </script>';
        
      }
}
if(isset($_GET['post_id'])){
		
    $post_id=$_GET['post_id'];
    
    $update=true;
    $query="select *from posts where post_id=$post_id";
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result)){
       $post_title = $row['post_title'];
       $post_desc =$row['post_content'];
      // header('location:editor.php');
    }

 }
 

?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/richtext.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.richtext.js"></script>
    <title>Add new post</title>
<style>
    body{
        font-family: 'Roboto', sans-serif;
    }
    </style>
</head>

<body>
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

                <h2>ADD NEW POST</h2>
                <form class="" action='editor.php' method="post" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        
                        <div class="input-group-prepend" style="width:100%">
                            <span class="input-group-text" id="inputGroup-sizing-sm">POST TITLE</span>
                            <input type="textarea"  name="post_title" required style="width:100%" value="<?php echo $post_title; ?>">  
                        </div>
                        
                    </div>
                    <div class="custom-file">
                        <label for="image"> featured image</label>
                        <input type="file" id="image" name="image" >
                        
                    </div>

                    <!-----------------pseodo text area-------->
                    <textarea id="php_post_text" name="php_post_text" class="form-control " style="display:none;" <?php echo $post_desc; ?>></textarea>
                    <!----------------MAIN TEXT EDITOR-------->
                    <textarea id="y" class="form-control content" name="php_post_text"><?php echo $post_desc; ?></textarea>
                    <!---------------ON SUBMIT ASIGN VALUE OF PSEOUDO TEXT AREA WITH TEXT EDITOR-------->
                    <?php if($update==true){
                        echo '<input type="text" value="'.$post_id.'" name="post_id"/>';
                        echo '<input type="submit" value="UPDATE" name="update" class="btn btn-info " id="update" />';}
                            else{
                                echo '<input type="submit" value="PUBLISH" name="post" class="btn btn-info " id="post" />'; 
                            }
                    ?>
                </form>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.content').richText();
    });
</script>

</html>
<div onclass="jumbotron-fluid" style="">

    <div class="text-center">
    </div>

    <?php
 // get value of text-editor and print
 if(isset($_POST['save_text']))
 {
     $php_post_text=$_POST['php_post_text'];
     echo '<div class="text-center">'.$php_post_text.'</div>';
 }
 ?>
</div>
<script>
    $(document).ready(function() {
        $('#post').click(function() {
            var image_name = $('#image').val();
            if (image_name == '') {
                alert("please select image");
                return false;
            } else {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Invalid image file");
                    $('#image').val();
                    return false;
                }
            }
        });
    });
</script>