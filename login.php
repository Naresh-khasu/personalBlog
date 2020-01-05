<html>

<head>
    <title>login page</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            background: #faf8f8;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
        }
        
        .login {
            width: 30%;
            margin: auto;
            margin-top: 100px;
        }
        
        h5 {
            text-transform: uppercase;
        }
        
        label {
            text-transform: capitalize;
        }
        
        .wrong {
            border: 1px solid #d82c2c;
            border-radius: 5px;
            color: #d82c2c;
        }
        
        button {
            font-size: 20px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="login">
        <form name="login-form" action="login.php" method="post">
            <?php

session_start();
$conn=mysqli_connect('localhost','root','','tourandtravel');

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $query="SELECT *FROM login WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['email']=$email;
        header('location:cms/');//redirect to home page
    }else{
        echo '<div class="wrong"> wrong email/pasword combination</div>';
       
    }

			
}




?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" onchange="showhide(this)" /><span id="showhide">Show Password</span>

                </div>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script type="text/javascript">
        function showhide(x) {
            var check = x.checked;
            if (check) {
                document.getElementById("exampleInputPassword1").type = "text";
                document.getElementById("showhide").textContent = "Hide Password";
            } else {
                document.getElementById("exampleInputPassword1").type = "password";
                document.getElementById("showhide").textContent = "Show Password";
            }
        }
    </script>
</body>

</html>