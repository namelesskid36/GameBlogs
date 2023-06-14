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
    <link rel="stylesheet" href="about/style.css">
    <link rel="stylesheet" href="social/social.css">
    

    <title>Home</title>
</head>
<div class="bg">
<body>

    <div class="navh">
        <div style="display:flex; flex-direction:row">
            <img src="Images/white.png" width="80px" height="50px" id=logo alt="Logo image"/>
            <div class="logoh">
                <p><a class="ah" href="home.php" style="color: white;">Game Hub</a> </p>
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

            echo "<a href='edit.php'>Update Profile</a>";
            ?>

            <a class="ah" href="php/logout.php"> <button class="btnh" >Log Out</button> </a>

        </div>
    </div>
    <main class="main">

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

        <?php include("Tranding Games/index.php");
        include("about/index.html") ?>
        </body>
        <?php include("footer/index.php");?>
        </html>