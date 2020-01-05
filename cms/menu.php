<?php 
session_start();
$email=$_SESSION['email'];
if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['email']);
	header('location:../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <style>
        body {
            background: #faf8f8;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
        }
        
        ul li a {
            color: #000000;
            font-weight: 500;
        }
        
        ul li {
            list-style: none;
        }
        
        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #faf8f8;
            overflow-y: hidden;
            transition: 0.5s;
        }
        
        .overlay-content {
            position: relative;
            top: 20%;
            width: 100%;
            text-align: center;
        }
        
        .overlay a:hover,
        .overlay a:focus {
            color: #000000;
            transition: 0.5s;
            font-weight: 900;
        }
        
        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45%;
            font-size: 60px;
        }
        
        .drop {
            margin-top: 20px;
            text-transform: uppercase;
        }
        
        @media screen and (max-width:450px) {
            .overlay {
                overflow-y: auto;
            }
            .overlay a {
                font-size: 20px;
            }
            .overlay .closebtn {
                font-size: 20px;
                top: 15px;
                right: 35px;
            }
            h3,
            li {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#x2718;</a>
        <div class="overlay-content">
            <ul class="mainmenu">
                <h3>Logged in as <br>
                    <?php echo $email; ?>
                </h3>

                <li class="drop"><a href="../index.php">View website</a>
                </li>
                <li class="drop"><a href="displaypost.php">View post</a>
                </li>
                <li class="drop"><a href="displayportfolio.php">View portfolio</a>
                </li>
                <li class="drop"><a href="texteditor/editor.php">Add new post</a>
                </li>
                <li class="drop"><a href="add-new-portfolio.php">Add new portfolio</a>
                </li>
                <li class="drop"><a href="add-new-admin.php">Add new admin</a>
                </li>
                <?php $email=$_SESSION['email']; echo '<li class="drop"><a href="changepassword.php?email='.$email.'">Change password</a>
                </li>'; ?>
                <li class="drop">
                    <a href="menu.php?logout='1'">
                        Logout</a>
                </li>

            </ul>
        </div>
    </div>
    <span style="font-size: 30px; cursor:pointer; color:#0095E8" onclick="openNav()">&#9776; MENU</span>
</body>

</html>

<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>