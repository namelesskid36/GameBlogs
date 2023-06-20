<!DOCTYPE html>
<html lang="en">

<head>
	<title>Team GameHub</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/stylef.css">
	<link rel="stylesheet" href="css/social.css">
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
  background-color: #D5CDCC;
}

.nav {
  height: 50px;
  width: 100%;
  background-color: #3482B5;
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
					<h2>meet <span>creative</span> team</h2>
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
<?php include("../footer/index.php") ?>
</body>
</html>