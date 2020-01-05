<?php include('menu.php'); ?>
<?php 

$conn=mysqli_connect('localhost','root','','tourandtravel');
if(isset($_POST['post'])){
    $portfolio_title=$_POST['portfolio_title'];
    $upload_date=date("Y-m-d");
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
  
        $query="INSERT INTO portfolio (portfolio_name,upload_date,portfolio_title) VALUES ('$image','$upload_date','$portfolio_title')";
        
        if(mysqli_query($conn,$query)){
          echo '<script> alert("Portfolio published!!!") </script>';
          header('location:cms.php');
        }
}

if(isset($_GET['portfolio_id'])){
		
    $portfolio_id=$_GET['portfolio_id'];
    
    $update=true;
    $query="select *from portfolio where portfolio_id= '$portfolio_id'";
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result)){
       echo $portfolio_title = $row['portfolio_title'];
       $portfolio_name =$row['portfolio_name'];
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
    <title>Add new portfolio</title>

</head>

<body>
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

                <h2>ADD NEW POST</h2>
                <form class="" action='add-new-portfolio.php' method="post" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Add caption</span>
                        </div>
                        <input type="text"  value="<?php echo $portfolio_title; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="portfolio_title" required>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="customFile">Choose portfolio</label>
                    </div>

                    <input type="submit" value="POST" name="post" class="btn btn-info " id="post" />
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