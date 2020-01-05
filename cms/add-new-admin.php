<?php include('menu.php'); ?>
<?php


$conn=mysqli_connect('localhost','root','','tourandtravel');

if(isset($_POST['add'])){
    $email=$_POST['email'];
    $fullname=$_POST['fullname'];
    $role=$_POST['role'];
    $password=md5($_POST['password']);

    //check if exist
    $query="SELECT email FROM login WHERE email='$email'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>=1){
        echo '<script> alert("Sorry! this email is already exist.")</script>';
    }
    else{

    $query="INSERT INTO login (full_name, role, email, password) VALUES('$fullname', '$role','$email','$password')";
    
        if(mysqli_query($conn,$query)){
        
        header('location:cms.php');//redirect to home page
        }
        else{
        echo '<div> wrong email/pasword combination</div>';
       
        }
    }

			
}




?>

    <html>

    <head>
        <title>Add new admin</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body {
                background: #faf8f8;
                font-family: 'Courier New', Courier, monospace;
                font-size: 20px;
            }
            
            .addNewAdmin {
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
        <div class="addNewAdmin">
            <h5>Add new admin</h5>
            <form method="post" action="add-new-admin.php">
                <div class="form-group">
                    <label for="exampleInputText1">Full name</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" placeholder="Enter name" name="fullname">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="PasswordHelp" placeholder="Password" name="password">

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Role</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="role">
                      <option selected>Choose...</option>
                      <option value="admin">Admin</option>
                      <option value="editor">Editor</option>
                      
                    </select>
                </div>




                <input type="submit" class="btn btn-primary" name="add" value="Add">
            </form>
        </div>
    </body>

    </html>