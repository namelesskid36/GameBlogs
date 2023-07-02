<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/sign up in-style.css">
    <link rel="stylesheet" href="../assets/css/homepg-style.css">
    <link rel="shortcut icon" type="image/png" href="Images/Game_Hub_-_Logo-removebg.png">
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("connection.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $result = mysqli_query($conn, "SELECT * FROM users WHERE Email='$email'") or die("Select [Error]");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    if (password_verify($password, $row['Password'])) {
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['id'] = $row['Id'];
                        header("Location: home.php");
                        exit();
                    }
                }

                echo "<div class='message'>
                    <p>Wrong Email or Password!</p>
                </div><br>";
                echo "<a href='signin.php'><button class='btn'>Go Back</button></a>";
            } else {
                ?>
                <form action="" method="post">
                    <h2 class="header" style="color: white;">&ensp;Sign in</h2>
                    <hr>
                    <div class="field input">
                        <label for="email" style="color: #00FFFF;">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password" style="color: #00FFFF;">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>

                    <div class="links" style="color: white;">
                        Don't have an account? <a href="signup.php" style="color: #00FFFF;">Sign up</a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>
<footer>
    <div class="footer-container">
        <div class="sec aboutus">
            <h2>About Us</h2>
            <p>We love games! Our website is all about gaming. We share battleroyal, reviews, and more. Join us and
                let's have fun together. Happy gaming!</p>
            <ul class="sci">
                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                <li><a href="#"><i class="bx bxl-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="team5.php">Contact team</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
        <div class="sec contactBx">
            <h2>Contact Info</h2>
            <ul class="info">
                <li>
                    <span><i class='bx bxs-map'></i></span>
                    <span>123 Kathmandu <br> Somewhere in <br> Nepal</span>
                </li>
                <li>
                    <span><i class='bx bx-envelope'></i></span>
                    <p><a href="mailto:dipsu1873@gmail.com">gamehub@gmail.com</a></p>
                </li>
            </ul>
        </div>
    </div>
</footer>

</html>