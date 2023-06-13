<?php
session_start();

include("php/connection.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <style>
        img {
            position: left;
            height: 60px;
            width: 60px;

        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="buttons/read.css">
    <link rel="stylesheet" href="buttons/create.css">
    <link rel="stylesheet" href="footer/style.css">
    

    <title>Home</title>
</head>
<div class="bg">
<body>

    <div class="nav">
        <div style="display:flex; flex-direction:row">
            <img src="Images/white.png" width="80px" height="50px" id=logo alt="Logo image"   class="navbar navbar-dark bg-dark" />
            <div class="logo">
                <p><a href="home.php" style="color: white;">Game Hub</a> </p>
            </div>
        </div>

        <div class="right-links">


            <?php

            $id = $_SESSION['id'];
            $query = mysqli_query($conn, "SELECT*FROM users WHERE Id=$id");

            while ($result = mysqli_fetch_assoc($query)) {
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['Id'];
            }

            echo "<a href='update.php'>Update Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn" >Log Out</button> </a>

        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <h2 style="color: white;" text-align: right;>Hello <b>
                            <?php echo $res_Uname ?>
                        </b>, Welcome</h2>
                    <p>We're thrilled to have you here. Explore, share, and connect with fellow gamers in our vibrant
                        community!</p>
                </div>
            </div>
        </div>
        <br>
        <?php
        include("buttons & blogs/create.html");
        echo "&ensp;";
        include("buttons & blogs/read.html");
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";echo"<br>";




?>
 
    </main>
        </div>

        <?php include("Tranding Games/index.php");?>
        </body>
        
<footer>

<div class="row">

  <div class="column">

    <h4>About Us</h4>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in metus euismod, faucibus metus ut, semper nibh. Aenean euismod justo eu enim dapibus suscipit.</p>

  </div>

  <div class="column">

    <h4>Quick Links</h4>

    <ul>

      <li><a href="#"><i class="fa fa-angle-right"></i> Home</a></li>

      <li><a href="#"><i class="fa fa-angle-right"></i> Contact us</a></li>

      <li><a href="#"><i class="fa fa-angle-right"></i> Profile</a></li>

    </ul>

  </div>

  <div class="column">

    <h4>Connect with Us</h4>

    <ul class="social-icons">

      <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>

      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
      
      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>

        <li><a href="#"><i class="fa-brands fa-github"></i></a></li>

    </ul>

  </div>

</div>

<p class="copyright">© 2023 All Rights Reserved</p>

</footer>
        </html>