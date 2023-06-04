<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/connection.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
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

            mysqli_query($conn,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$hash_password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Signed in successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

            <header style="color: white;">Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username" style="color: white;">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email" style="color: white;">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="password" style="color: white;">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                 <div class="field input">
                    <label for="cpassword" style="color: white;">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links" style="color: white;">
                    Already a member? <a href="login.php" style="color: yellow;">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>