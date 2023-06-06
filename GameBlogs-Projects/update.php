<?php
session_start();

include("php/connection.php");
if (!isset($_SESSION['valid'])) {
  header("Location: login.php");
}
?>

<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $id = $_SESSION['id'];

  $edit_query = mysqli_query($conn, "UPDATE users SET Username='$username', Email='$email' ") or die("error occurred");

  if ($edit_query) {
    echo "<div class='message'>
     <p>Profile Updated!</p>
  </div> <br>";
    echo "<a href='home.php'><button class='btn'>Go Home</button>";

  }
} else {

  $id = $_SESSION['id'];
  $query = mysqli_query($conn, "SELECT*FROM users WHERE Id=$id ");

  while ($result = mysqli_fetch_assoc($query)) {
    $res_Uname = $result['Username'];
    $res_Email = $result['Email'];
  }

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Profile Card</title>
    <link rel="stylesheet" href="pstyle.css" />
    <link rel="stylesheet" href="username.css" />
  </head>

  <body>
    <div class="card">
      <div class="cover-photo">
        <img src="profile/Nice.png" class="profile" />
      </div>
      <div class="input-group">
  <input required="" type="text" name="text" autocomplete="off" class="input">
  <label class="user-label">Username</label>
</div>
      <p class="about">
        Student <br />
        Useless one
      </p>
      <button class="btn">Create</button>
      <button class="btn">Read</button>
      <button class="btn">Save</button>


    </div>
  <?php } ?>
</body>

</html>