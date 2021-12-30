<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>New User Registration.</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="registration_style.css">
</head>


<body>
<div id="body" style="background-color: #eee; width: 100%; height: 100%;" >

	<div>

		<div style="background-color: white; width: 100%; height: 180px; float: left">
		  	<h1><i>Middleware Zone</i></h1>
		    <h4>Knowledge Area</h4>
		    <h6 id='date'></h6>
		    <script>document.getElementById('date').innerHTML = Date()</script>
		</div>

			<div class="topnav">
				<div class="home" onclick="index()" style="cursor: pointer"><p>Home</p></div>
				<div class="services" onclick="services()" style="cursor: pointer"><p>Services</p></div>
				<div class="about" onclick="about()" style="cursor: pointer"><p>About</p></div>
				<div class="contact" onclick="contact()" style="cursor: pointer"><p>Feedback</p></div>
			</div>
	  <div style="background-color: grey; width: 100%; margin-left: 0px; margin-top: 0px";><marquee>WELCOME</marquee></div>


<div class="container">
  <div class="header">
  	<h3>New user registration</h3>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
  	</div>

  	<div class="input-group">
  	<!--  <label>Username</label> -->
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	<!-- <label>Email</label> -->
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	 <!-- <label>Password</label> -->
  	  <input type="password" name="password_1" placeholder="Enter password">
  	</div>
  	<div class="input-group">
  	 <!-- <label>Confirm password</label> -->
  	  <input type="password" name="password_2" placeholder="Confirm password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
<!-- JAVASCRIPT STARTED -->
<script type="text/javascript">
// function for topnav
	function index(){
		window.location="index.html"
	}

	function about(){
		window.location="about.html"
	}

	function contact(){
		window.location="contact.html"
	}

	function services(){
		window.location="services.html"
	}
</script>
</body>
</html>