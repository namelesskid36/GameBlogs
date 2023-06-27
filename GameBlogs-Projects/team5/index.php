<!DOCTYPE html>
<html lang="en">

<head>
	<title>Team GameHub</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../homepage/style.css">
  <!-- For cool icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<div name="nav-bara" >
	<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      GameHub
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  <div class="nav-links">
    <a href="../home.php" >Home</a>
    <a href="#" >About</a>
    <a href="../ContactUs/index.php" >Contact us</a>
  </div>
</div>

		<style>
	* {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
  background-color: #8b4eed;
}

.nav {
  height: 50px;
  width: 100%;
  background-color: #8b4eed;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  float: right;
  font-size: 18px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

.nav > .nav-links > a:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.nav > #nav-check {
  display: none;
}

@media (max-width:800px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #333;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
</style>
	</div>

	<section class="team">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<h2>meet <span>creative</span> team</h2><sub>(not really)</sub>
				</div>
			</div>
			<div class="row">
				<div class="team-item">
					<img src="img/me.png" alt="team">
					<h3>Sudip Awasthi <span>Team Leader</span></h3>
					<div class="social-links">
						<a href="https://www.facebook.com/ofcNoone" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/SudipAwasthi36" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/itsnot.sudip/" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="https://youtu.be/xvFZjo5PgG0" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				<div class="team-item">
					<img src="img/milan.png" alt="team">
					<h3>Milan Bogati <span>Team Member</span></h3>
					<div class="social-links">
						<a href="https://www.facebook.com/profile.php?id=100082129793448" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/milanbogati10" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="http://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				<div class="team-item">
					<img src="img/dhiraj.png" alt="team">
					<h3>Dhiraj Thapa <span>Team Member</span></h3>
					<div class="social-links">
						<a href="https://www.facebook.com/thapa.dhiraj.524" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/thapadhiraj6" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="http://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				<div class="team-item">
					<img src="img/roshika.png" alt="team">
					<h3>Roshika Dhungel <span>Team Member</span></h3>
					<div class="social-links">
						<a href="https://www.facebook.com/profile.php?id=100091883168744" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a  href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/rosikadhungel/" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="http://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
				<div class="team-item">
					<img src="img/sabina.png" alt="team">
					<h3>Sabina Tamang <span>Team Member</span></h3>
					<div class="social-links">
						<a href="https://www.facebook.com/rejina.tamang.7946" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/rejina.tamang.7946" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="http://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>

			</div>
		</div>
	</section>
  <footer>
        <div class="footer-container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>We love games! Our website is all about gaming. We share news, reviews, and more. Join us and let's have fun together. Happy gaming!</p>
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
                    <li><a href="../home.php">Home</a></li>
                    <li><a href="../homepage/index.php">Back</a></li>
                    <li><a href="#">Contact team</a></li>
                    <li><a href="../ContactUs/index.php">Contact us</a></li>
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
                        <span><i class='bx bx-envelope' ></i></span>
                        <p><a href="mailto:codemyhobby9@gmail.com">gamehub@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>
</html>
</body>
</html>