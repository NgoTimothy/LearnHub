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
	
	#classRoom	{
		border: none;
		background-color: transparent;
		font-size: 2em;
		font-weight: 700;
		border-bottom: 1px solid rgb(200,200,200);
		color: rgb(40,40,40);
		padding: 5px;
		padding-left: 10px;
		padding-top: 50px;
		width: 100%;
		margin-top: 0.67em;
		margin-bottom: 0.67em;
		
	}
	
	#classRoom:focus	{
		outline: none;
		border-bottom: 1px solid black;
	}
	
	#back	{
	margin: 20px;
	}
	
	#back a	{
		color: black;
		font-size: 1.3em;
	}
	
	.options	{
	background-color: rgba(255,255,255,0.8);
	width: 100%;
	text-align: center;
	position: absolute;
	height: 500px;
	opacity: 0;
	-webkit-transition-duration: 0.5s;
	transition-duration: 0.5s;
	overflow: hidden;
	}
	
	.options:hover	{
		opacity: 1;
	}
	
	.options p	{
		text-align: center;
		line-height: 100px;
		width: 100%;
	}
	
	.options button	{
	background-color: transparent;
	color: black;
	font-size: 1.5em;
	border: 2px solid black;
	font-weight: 400;
	border-radius: 3px;
	}
	
	.options button:hover, .new:hover	{
	cursor: pointer;
	}
	
	.options button:focus, .new:focus	{
	outline: none;
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
	
	<script>

	
	</script>
	
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
			
			<form>
				<input type="text" id="classRoom" name="classRoom" value="Teacher 1's Classroom"/>
			</form>
			
			<a href=""><button class="new">New Study Set</button></a>
			<a href=""><button class="new">Make Announcement</button></a>
			
			<div class="module">
				<div style="position:relative">
				<div class="options">
					<p><a href="announcement.php"><button>View</button></a>
					<a href=""><button style="margin:30px;">Edit</button></a>
					<a href=""><button>Delete</button></a></p>
				</div>
			
				<div class="icon">
				<img src="images/announcementicon.png" />
				</div>
				
				<div class="description">
					<h3>Your announcement goes here!!!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices sodales euismod. Maecenas tincidunt ultrices massa eget rutrum. Donec quis iaculis nisi, et finibus turpis. Proin nec est interdum odio placerat molestie. Nunc lectus nibh, placerat et ultricies eget, congue nec nibh. Phasellus et porttitor tortor. Nam vel posuere arcu. Nulla at arcu tincidunt, semper erat in, lacinia erat. Nullam a est ut diam rutrum porttitor eget at lectus. Donec mi arcu, auctor vitae purus at, tristique porta est. Curabitur eget nunc dapibus, mollis leo sed, semper est. Integer eget purus at augue tempor suscipit placerat nec risus. Duis quis lacus lorem. In porta enim dignissim blandit pharetra. Suspendisse tincidunt mattis massa vitae bibendum. Maecenas et quam lacus.</p>
				</div>
				</div>
			</div><br />
			
			<div class="module">
				<div style="position:relative">
				<div class="options">
					<p><a href="flashcards.php"><button>View</button></a>
					<a href=""><button style="margin:30px;">Edit</button></a>
					<a href=""><button>Delete</button></a></p>
				</div>
				</div>
			
				<div class="icon">
				<img src="images/flashcardicon.png" />
				</div>
				
				<div class="description">
					<h3>The name of the flashcards set goes here.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			
			</div><br />
			
			<div class="module">
				<div style="position:relative">
				<div class="options">
					<p><a href="announcement.php"><button>View</button></a>
					<a href=""><button style="margin:30px;">Edit</button></a>
					<a href=""><button>Delete</button></a></p>
				</div>
				</div>
			
				<div class="icon">
				<img src="images/announcementicon.png" />
				</div>
				
				<div class="description">
					<h3>Announcement 2</h3>
					<p>Duis quis lacus lorem. In porta enim dignissim blandit pharetra. Maecenas et quam lacus.</p>
				</div>
			</div><br />
			
			<div class="module">
				<div style="position:relative">
				<div class="options">
					<p><a href="flashcards.php"><button>View</button></a>
					<a href=""><button style="margin:30px;">Edit</button></a>
					<a href=""><button>Delete</button></a></p>
				</div>
				</div>
			
				<div class="icon">
				<img src="images/flashcardicon.png" />
				</div>
				
				<div class="description">
					<h3>This is another flahcard set</h3>
					<p>Description of what this set does.</p>
				</div>
			
			</div><br />
			
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