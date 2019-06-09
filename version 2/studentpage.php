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
		min-height: 100px;
		max-height: 200px;
		display: inline-block;
		background-color: white;
		border-radius: 15px;
		-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
		-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
		box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.2);
		margin-bottom: 20px;
		overflow: hidden;
		color: black;
	}
	
	.icon	{
	height: 100%;
	width: 150px;
	float: left;
	
	}
	
	.icon img	{
	height: 110px;
	margin-left: 15px;
	}
	
	.module h3	{
	width: 100%;
	margin: 0;
	padding: 5px;
	padding-left: 20px;
	background-color: #ff9900;
	
	}
	
	.description	{
		height: 100%;
		overflow: hidden;
	}
	
	.description	p	{
	padding-left: 20px;
	padding-right: 20px;
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
			<h1 id="classroomName"> Teacher 1's Classroom</h1>
			
			<a href="announcement.php"><div class="module">
				<div class="icon">
				<img src="images/announcementicon.png" />
				</div>
				
				<div class="description">
					<h3>Your announcement goes here!!!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices sodales euismod. Maecenas tincidunt ultrices massa eget rutrum. Donec quis iaculis nisi, et finibus turpis. Proin nec est interdum odio placerat molestie. Nunc lectus nibh, placerat et ultricies eget, congue nec nibh. Phasellus et porttitor tortor. Nam vel posuere arcu. Nulla at arcu tincidunt, semper erat in, lacinia erat. Nullam a est ut diam rutrum porttitor eget at lectus. Donec mi arcu, auctor vitae purus at, tristique porta est. Curabitur eget nunc dapibus, mollis leo sed, semper est. Integer eget purus at augue tempor suscipit placerat nec risus. Duis quis lacus lorem. In porta enim dignissim blandit pharetra. Suspendisse tincidunt mattis massa vitae bibendum. Maecenas et quam lacus.</p>
				</div>
			
			</div></a><br />
			
			<a href="flashcards.php"><div class="module">
				<div class="icon">
				<img src="images/flashcardicon.png" />
				</div>
				
				<div class="description">
					<h3>The name of the flashcards set goes here.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			
			</div></a><br />
			
			<a href="announcement.php"><div class="module">
				<div class="icon">
				<img src="images/announcementicon.png" />
				</div>
				
				<div class="description">
					<h3>Announcement 2</h3>
					<p>Duis quis lacus lorem. In porta enim dignissim blandit pharetra. Maecenas et quam lacus.</p>
				</div>
			</div></a><br />
			
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