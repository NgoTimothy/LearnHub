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
<html>
	<head>
	<title>LearnHub</title>
	
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	
	function login()	{
	var x = document.getElementById("loginscreen")
	var y = document.getElementById("closelogin")
	if (x.style.display == '' || x.style.display === 'none')	{
	x.style.display = 'block';
	y.style.display = 'block';
	document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
	}
	else	{
	x.style.display = 'none';
	y.style.display = 'none';
	document.getElementsByTagName("BODY")[0].style.overflow = "visible";
	}}
	
	
	var menu1 = false;
	function menu()	{
	var elements = document.getElementsByClassName('link');
	if (menu1 == false)	{
		for (var i = 0; i < elements.length; i++)
		{
			elements[i].style.display = 'block';
		}
		menu1 = true;
		}
		else	{
		for (var i = 0; i < elements.length; i++)
		{
			elements[i].style.display = 'none';
		}
		menu1 = false;
		}
	}
	
	function resize()	{
		var h = window.innerWidth;
		if (h >= 1000)
		{
			menu1 = false;
			menu();
		}
		else	{
			menu1 = true;
			menu();
		}
	}
	
	function loaded()	{
		setTimeout(function(){
			$("#heading1").fadeIn(1000);
		}, 0);
		$("#heading1").fadeIn(1000);
		setTimeout(function(){
			$("#heading2").fadeIn(1000);
		}, 1000);
		setTimeout(function(){
			document.getElementById("hot").style.color = "black";
			document.getElementById("hot").style.backgroundColor = "#ff9900";
			document.getElementById("hot").style.textShadow = "none";
		}, 2000);
	}
	
	var role = "<?php echo $_SESSION["role"]; ?>"; 
	function classroomDirect()	{
		if (role == 'student')
			window.location.href = "classrooms.php";
		else
			window.location.href = "teacherClassrooms.php";
	}
	</script>
	<style type="text/css">
	
	body	{
	background-color: white;
	}
	
	#home	{
	width: 100%;
	height: 800px;
	margin-top: 60px;
	background-image: url("images/classroom2.jpg");
	background-color: black;
	background-size: auto 100%;
	background-repeat: no-repeat;
	background-position: right;
	-webkit-box-shadow: inset 0px 0px 300px 10px rgba(0,0,0,0.55);
	-moz-box-shadow: inset 0px 0px 300px 10px rgba(0,0,0,0.55);
	box-shadow: inset 0px 0px 300px 10px rgba(0,0,0,0.55);
	}
	
	@media (min-width: 1960px) {
		#home	{
			background-size: 100%;
		}
	}
	
	#home h1, h2	{
	font-family: Arial, Sans-Serif;
	color: white;
	text-align: center;
	padding-top: 50px;
	text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
	font-size: 4em;
	margin: 0;
	padding: 0;
	display: none;
	}
	
	#home h1	{
	padding-top: 300px;
	}
	
	#home h2	{
	font-size: 3em;
	font-weight: 500;
	margin-top: 30px;
	}
	
	#hot	{
	padding: 5px;
	border-radius: 5px;
	color: white;
	font-weight: 700;
	-webkit-transition-duration: 1s;
	transition-duration: 1s;
	}
	
	#signup	{
	padding: 5px;
	border-radius: 5px;
	color: black;
	text-shadow: none;
	background-color: #ff9900;
	width: 150px;
	margin: auto;
	font-size: 2em;
	}
	
	#signup:hover	{
	color: white;
	-webkit-transition-duration: 0.5s;
	transition-duration: 0.5s;
	}
	
	#info	{
	background-color: white;
	height: 600px;
	width: 100%;
	display: inline-block;
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
	
	</head>
	<body onresize="resize()" onload="loaded()">
	
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
			
		<a href="javascript:classroomDirect()" >
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
	
	<div id="home">
	
	<h1 id="heading1">Welcome to LearnHub!</h1>
	<h2 id="heading2">The <span id="hot">hottest</span> place to learn.</h2>
	
	<h1 id="heading3">Get Started Today</h1>
	<h2 id="heading4" style="font-size:2em">Study using flashcards, games, and interactive quizzes!</h2>
	<a href="register.html" style="text-decoration: none;"><h2 id="signup" style="font-weight:700;font-size:2em;">Sign Up</h2></a>
	
	</div>
	
	<div id="info">

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
	
	</body>
	</html>