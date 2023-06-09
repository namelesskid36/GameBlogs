<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: dipsu1873@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us GameHub</title>
    <link rel="stylesheet" href="../assets/css/cu-style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="../assets/images/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch-GameHub</h3>
          <p class="text">
          We would love to hear from you! If you have any questions, feedback, or inquiries, please don't hesitate to reach out to us.
          </p>

          <div class="info">
            <div class="information">
              <img src="../assets/images/location.png" class="icon" alt="" />
              <p>123 Kathmandu Street, Kathmandu, Nepal</p>
            </div>
            <div class="information">
              <img src="../assets/images/email.png" class="icon" alt="" />
              <p>gamehub@game.com</p>
            </div>
            <div class="information">
              <img src="../assets/images/phone.png" class="icon" alt="" />
              <p>9876543210</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" /> &ensp;
            <input type="Button" onclick="window.location.href='home.php'" value="Back" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="../assets/js/cu-js.js"></script>
  </body>
</html>
