<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sign up in-style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/homepg-style.css">
    <title>Sign up</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("connection.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hash_password=password_hash($password,PASSWORD_BCRYPT);
            

         //verifying the unique email

         $verify_query = mysqli_query($conn,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($conn, "INSERT INTO users (Username, Email, Password) VALUES ('$username', '$email', '$hash_password')") or die("Error Occurred: " . mysqli_error($conn));

            echo "<div class='message'>
                      <p>Signed in successfully!</p>
                  </div> <br>";
            echo "<a href='signin.php'><button class='btn'>Signin</button>";
         

         }

         }else{
         
        ?>

            <form action="" method="post">
                <h2 style="color: white;" >&ensp;Sign up</h2>
                <hr>
                <div class="field input">
                    <label for="username" style="color: #00FFFF;">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email" style="color: #00FFFF;">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="password" style="color: #00FFFF;">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Signup" required>
                </div>
                <div class="links" style="color: white;">
                    Already a member? <a href="signin.php" style="color: #00FFFF;">Sign In</a>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="team5.php">Contact team</a></li>
                <li><a href="Contactus.php">Contact us</a></li>
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