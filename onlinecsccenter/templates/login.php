<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="registration_style.css">
    <title>Login</title>
</head>


<body>
<div id="body" style="background-color: #eee; width: 100%; height: 100%;" >
     

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
      


	  <div style="background-color: grey; width: 100%; margin-left: 0px; margin-top: 0px";><marquee>WELCOME</marquee> </div>	  


<div class="container" >
  	<div class="header">
  		<h3>Login</h3>
 	</div>	 
  	<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>