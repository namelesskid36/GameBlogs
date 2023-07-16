<?php 
   session_start();

   include("connection.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.html");
   }
   
   // Function to delete the user account
   function deleteAccount($conn, $id) {
      $delete_query = mysqli_query($conn, "DELETE FROM users WHERE Id=$id");

      if($delete_query){
         session_destroy();
         header("Location: index.html");
         exit();
      } else {
         echo "<div class='message'>
            <p>Error occurred while deleting the account.</p>
         </div>";
      }
   }

   // Handle delete button click
   if(isset($_POST['delete'])){
      echo "<div class='confirmation'>
         <p>Are you sure you want to delete your account?</p>
         <form action='' method='post'>
            <input type='submit' class='btn' name='confirm' value='Sure'>
            <input type='submit' class='btn' name='cancel' value='Cancel'>
         </form>
      </div>";
   }
   
   // Handle confirmation or cancellation
   if(isset($_POST['confirm'])){
      $id = $_SESSION['id'];
      deleteAccount($conn, $id);
   } elseif(isset($_POST['cancel'])){
      header("Location: profile.php");
      exit();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/edit.css">
    <title>GameHub | Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Game Hub</a></p>
        </div>

        <div class="right-links">
            <a href="#" style="color: white;">Profile</a>
            <a href="logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($conn,"UPDATE users SET Username='$username', Email='$email' WHERE Id=$id") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='home.php'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($conn,"SELECT * FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                }

            ?>
            <header>Profile</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username" style="color: white;">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email" style="color: white;">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                </div>
                
                <div class="field">                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                    <input type="submit" class="btn" name="delete" value="Delete" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
