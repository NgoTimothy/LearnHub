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
	
	#feed	{
	min-height: 100vh;
	background-color: rgb(240, 240, 240);
	font-family: Arial, sans-serif;
	}
	
	#announcement	{
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
	
	#message	{
		padding: 10px;
		background-color: white;
		border-radius: 10px;
		font-size: 1.3em;
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
			<h1 id="announcement">Your announcement goes here!!!</h1>
			
					<div id="message">
					<p>This is what an announcement will look like. You can write enough text to span many lines. It should be like a text editor where the teacher can tell student things that he/she wishes. It would be nice if you could <span style="font-size:1.8em">change sizes</span>, you could <span style="color:red">change colors</span>, you could <span style="font-family:serif">change fonts</span>, and it is very important that at the very least, the user is able to <span style="font-weight:bold">bold the text.</span> and also able to <span style="font-style:italic">italicize the text</span></p>
					
					<p>It is also important that the user can write multiple paragraphs and potentially include photos and videos.</p>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Dd7FixvoKBw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</iframe>
					</div>
					
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
	
	<div id="closelogin" onclick="login()"></div>
	
	</body>
	</html>