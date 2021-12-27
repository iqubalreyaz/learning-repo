<?php include("server.php")?>


<!DOCTYPE html>
<html>
<style>
html {
  background-color: black;
}

#body {
  text-align: center;

    /* position:fixed; */
    top:0;
    bottom:0;
    left:0;
    right:0;
    height: 100%;
    width: 100%;
}

.cursors > div {
    float: center;
    box-sizing: border-box;
    background: black;
	color: white;
    border: 8px solid #ccc;
    width: 25%;
	height: 100%;
    padding: 1px 2px;
    text-align: center;
    white-space: nowrap;
    &:nth-child(even) {
       background: #eee;
    }
    &:hover {
       opacity: 0.15
    }
}

.topnav > div {
    float: left;
    box-sizing: border-box;
    background: black;
    color: white;
    border: 8px solid #ccc;
    width: 25%;
    padding: 2px 2px; 
    text-align: center;
    white-space: nowrap;
    &:nth-child(even) {
       background: #eee;
    }
    &:hover {
       opacity: 0.15
    }
}

p:hover {
  background-color: grey;
}

#body_matter {
    position:relative;
}

#container {
  padding: 16px;
  border: 3px solid #ccc;
  background-color: #eee;
  position: absolute;
  right:10px;
  top: 10px;
}

.container > login_pane {
	position: absolute;
	right:10px;
	top: 10px;
}
</style>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
    <title>My Home</title>
</head>


<body>
<div id="body" style="background-color: #eee; width: 100%; height: 745px;" >
     

		<div id="body_matter" style="background-color: white; width: 100%; height: 180px; float: left">
		  	<h1><i>Middleware Zone</i></h1>
		    <h4>Knowledge Area</h4>
		    <h6 id='date'></h6>
			<div id="container">
			<div id="login_pane"><p>Welcome <b><?php echo ($_SESSION['username']); ?></b>..!</p>
				<a href="logout.php">Logout</a>
			</div>	
		</div>

		<script>document.getElementById('date').innerHTML = Date()</script>
		
		</div>

			<div class="topnav">
				<div class="home" onclick="index()" style="cursor: pointer"><p>Home</p></div>
				<div class="services" onclick="services()" style="cursor: pointer"><p>Services</p></div>
				<div class="about" onclick="about()" style="cursor: pointer"><p>About</p></div>
				<div class="contact" onclick="contact()" style="cursor: pointer"><p>Feedback</p></div>
			</div>
      


	  <div style="background-color: grey; width: 100%; margin-left: 0px; margin-top: 0px";><marquee>WELCOME</marquee> </div>	  



<div><b>Welcome to the Middleware Learning Portal...!!</b></br><br>You can take advantage of this portal to learn various Middleware components.</div>

<script>
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
	
	function register(){
		window.location="register.php"
	}

	function login(){
		window.location="login.php"
	}

</script>


</div>
</body>
</html>