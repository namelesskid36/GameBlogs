<?php 
   session_start();

   include("php/connection.php");
   if(!isset($_SESSION['valid'])){
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
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>

    <div class="nav">
    <img src="Images/white.png" width="80px" height="50px" id=logo alt="Logo image" style="margin-left: -190px"  class="navbar navbar-dark bg-dark" />
        <div class="logo">
            <p><a href="home.php" style="color: white;">Game Hub</a> </p>
        </div>

        <div class="right-links">
            

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($conn,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Update Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p style="color: white;">Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
          </div>
       </div>

    </main>
</body>
</html>