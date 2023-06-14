<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="Images/Game_Hub_-_Logo-removebg.png">
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("php/connection.php");
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
                echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
            } else {
            ?>
                <header style="color: white;">Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email" style="color: white;">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password" style="color: white;">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>

                    <div class="links" style="color: white;">
                        Don't have an account? <a href="signup.php" style="color: yellow;">Sign up</a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>