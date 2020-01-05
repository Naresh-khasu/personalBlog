<?php include('menu.php'); ?>
<?php
$email=$_GET['email'];

$conn=mysqli_connect('localhost','root','','tourandtravel');


if(isset($_POST['change'])){
       $password1 =md5($_POST['password1']);
    $password2 =md5($_POST['password2']);
    $email =$_POST['email'];
    
    if($password1==$password2){
        
        $query="UPDATE login SET password='$password1' WHERE email='$email'";
        if(mysqli_query($conn,$query)){
             
            header('location:../login.php'); 
            echo '<script> alert("Password Changed Successfully");</script>';
           
        }
    }
    else{
        echo '<script> alert("Two password are not same")</script>';
    }
    

    

			
}




?>

    <html>

    <head>
        <title>change password</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
        <style>
            body {
                background: #faf8f8;
                font-family: 'Roboto', sans-serif;
                 font-size: 20px;
            }
            
            .change {
                width: 30%;
                margin: auto;
                padding-top: 100px;
            }
            
            h5 {
                text-transform: uppercase;
            }
            
            label {
                text-transform: capitalize;
            }
        </style>
    </head>

    <body>
        <div class="change">
            <h5>change password</h5>
            <form method="post" action="changepassword.php">
            <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp" value="<?php echo $email; ?>">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" aria-describedby="PasswordHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" aria-describedby="PasswordHelp">

                </div>
                             <input type="submit" class="btn btn-primary" name="change" value="Change">
            </form>
        </div>
    </body>

    </html>