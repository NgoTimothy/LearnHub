<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['user'] ) ) {
    
} else {
    // Redirect them to the login page
    header("Location: index.html");
}

?>
<!DOCTYPE html>
<html>
	<head>
	<title>LearnHub</title>
	
	<style>
	
	body	{
		background-color: rgb(240, 240, 240);
	}
	
	#feed	{
	min-height: 100vh;
	background-color: rgb(240, 240, 240);
	font-family: Arial, sans-serif;
	}
	
	#classroomName	{
	padding: 5px;
	padding-left: 10px;
	padding-top: 50px;
	}
	
	#container	{
	max-width: 1200px;
	margin: auto;
	}
	
	#container	h1	{
	border-bottom: 1px solid rgb(200,200,200);
	color: rgb(40,40,40);
	font-size: 2em;
	}
	
	.module	{
		height: 150px;
		width: 385px;
		display: inline-block;
		background-color: white;
		border-radius: 15px;
		-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
		-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
		box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
		margin-bottom: 20px;
		overflow: hidden;
		color: black;
		margin-right: 10px;
	}
	
	.icon	{
	height: 100%;
	width: 150px;
	float: left;
	
	}
	
	.icon img	{
	height: 110px;
	margin-left: 15px;
	padding-top: 15px;
	}
	
	.module h3	{
	margin: 0;
	padding: 5px;
	background-color: #ff9900;
	float: none;
	
	}
	
	.description	{
		height: 100%;
		overflow: hidden;
	}
	
	.description	p	{
	padding-right: 5px;
	}
	
	#back	{
	margin: 20px;
	}
	
	#back a	{
		color: black;
		font-size: 1.3em;
	}
	
	#login	{
	border: none;
	font-weight: 700;
	font-size: 1em;
	
	}
	
	#logout	{
		margin: 0;
		padding: 0;
	}
	
	button:focus {
		outline:0;
	}
	
	.new	{
	background-color: black;
	color: white;
	font-size: 1.5em;
	border: 2px solid black;
	font-weight: 400;
	border-radius: 3px;
	margin: 10px;
	-webkit-transition-duration: 0.3s;
	transition-duration: 0.3s;
	}
	
	.new:hover	{
	color: #ff9900;
	cursor: pointer;
	}
	
	#moduleContainer	{
		text-align: center;
	}
	
	</style>
	
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="nav.js"></script>
	
	</head>
	<body onresize="resize()">
	
	<div id="navbar">
		<div id="contents">
			<a href="index.php"><img id="logo" src="images/learnhub2.png" /></a>
		
		<div id="menu">
		<img onclick="menu()" src="images/menu.png" />
		</div>
		
		<form action="logout.php" id="logout">
			<button type="submit" id="login" id="logout" onclick="logout()">
			<p>Logout</p>
			</button>
		</form>
			
		<a href="classrooms.php" >
			<div class="link">
			<p>Classrooms</p>
			</div>
		</a>
		<a href="" >
			<div class="link">
			<p>Study Tips</p>
			</div>
		</a>
		<a href="" >
			<div class="link">
			<p>Teachers</p>
			</div>
		</a>
		<a href="" >
			<div class="link">
			<p>Study Now</p>
			</div>
		</a>	
			
		</div> <!-- end contents -->
		
	</div> <!-- end navbar -->
	
	<div id="feed">
		<div id="container">
			<h1 id="classroomName">Your Classrooms</h1>
			
			<a href=""><button class="new">New Classroom</button></a>
			
			<br />
			
			<div id="moduleContainer">
			
			<a href="teacherpage.php"><div class="module">
				<div class="icon">
				<img src="images/headshot.jpg" />
				</div>
				
				<div class="description">
					<h3>English 101: This is a long course name</h3>
					<p>This is the class description. It can be long or short.</p>
				</div>
			
			</div></a>
			
			<a href="teacherpage.php"><div class="module">
				<div class="icon">
				<img src="images/headshot.jpg" />
				</div>
				
				<div class="description">
					<h3>Physics</h3>
					<p>Short description.</p>
				</div>
			
			</div></a>
			
			<a href="teacherpage.php"><div class="module">
				<div class="icon">
				<img src="images/headshot.jpg" />
				</div>
				
				<div class="description">
					<h3>History</h3>
					<p></p>
				</div>
			
			</div></a>
			
			</div> <!-- end moduleContainer -->
			
			<div id="back">
					<a href="javascript:history.back()">Back</a>
			</div>
			
		</div>
	</div>
	
	<div id="footer">
	<div id="footercontainer">
	<div id="footlogo">
	<img src="images/learnhub2.png" />
	</div>
	<div class="footcategory">
	<h3>Account</h3>
	<ul>
		<a href=""><li>My Account</li></a>
		<a href=""><li>Create Account</li></a>
	</ul>
	</div>
	<div class="footcategory">
	<h3>Pages</h3>
	<ul>
		<a href=""><li>Classrooms</li></a>
		<a href=""><li>Study Tips</li></a>
		<a href=""><li>Teachers</li></a>
		<a href=""><li>Study Now</li></a>
	</ul>
	</div>
	<div class="footcategory">
	<h3>Support</h3>
	<ul>
		<a href=""><li>Contact Us</li></a>
		<a href=""><li>Troubleshooting</li></a>
		<a href=""><li>Teacher Tutorials</li></a>
	</ul>
	</div>
	<p id="copyright">&copy; 2019 LearnHub. All Rights Reserved. <a href="">Site Map</a> - <a href="">Privacy Policy</a></p>
	</div>
	</div>
	
	<div id="loginscreen">
		<div id="logincontainer">
		<h3>Log In</h3>
		<form>
		<input type="text" name="username" placeholder="Username"><br />
		<input type="password" name="username" placeholder="Password"><br />
		<input id="submit" type="submit" value="Login">
		</form>
		<p>Don't have an account yet? <a href="">Register Now</a></p>
		</div>
	</div>
	
	<div id="closelogin" onclick="login()"></div>
	
	</body>
	</html>