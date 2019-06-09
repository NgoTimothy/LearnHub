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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="nav.js"></script>
	<script>
	var i = 0;
	
	function load() {
	var el = document.getElementsByClassName('front');
	var divHeight = el[i].offsetHeight
	var lineHeight = parseInt(el[i].style.lineHeight);
	var lines = divHeight / lineHeight; 
	if(lines % 2 == 0)
	{
		el[i].style.marginTop = '-3px';
	}
   
   
	el = document.getElementsByClassName('back');
	var divHeight = el[i].offsetHeight
	var lineHeight = parseInt(el[i].style.lineHeight);
	var lines = divHeight / lineHeight; 
	if(lines % 2 == 0)
	{
		el[i].style.marginTop = '-3px';
	}
	
	}
  
  var flipped = false;
   function flip()	{
   
   if (flipped == false)	{
   document.getElementsByClassName('flip-card-inner')[i].style.transform = 'rotateY(180deg)';
   document.getElementsByClassName('flip-card-back')[i].style.transform = 'rotateY(180deg)';
	flipped = true;
   }
   else	{
   document.getElementsByClassName('flip-card-inner')[i].style.transform = 'rotateY(0)';
   document.getElementsByClassName('flip-card-front')[i].style.transform = 'rotateY(0)';
	flipped = false;
   }
   }
   
   var cards = document.getElementsByClassName('flip-card');
   
	function next()	{
	if (i < document.getElementsByClassName('flip-card').length - 1)	{
		for (var x = 0; x < cards.length; x++)
		{
			cards[x].style.opacity = '0';
		}
		cards[i].style.left = '-500px';
		$(cards[i+1]).animate({opacity: '1', left:'0'});
		if (flipped == true)
		{
			flip();
		}
		i++;	
		load();
	}
	}

	function previous()	{
	if (i > 0)	{
		for (var x = 0; x < cards.length; x++)
		{
			cards[x].style.opacity = '0';
		}
		cards[i].style.left = '500px';
		$(cards[i-1]).animate({opacity: '1', left: '0'});
			if (flipped == true)
			{
				flip();
			}
			i--;	
			load();
	}
	}
	
	setInterval(function(){ 
	for (var x = 0; x < cards.length; x++)
		{
			if (x != i)
			cards[x].style.opacity = '0';
			if (x < i)
			cards[x].style.left = '-500px';
			if (x > i)
			cards[x].style.left = '500px';
		}
	}, 200);


	</script>
	
	<link rel="stylesheet" type="text/css" href="main.css">
	
	<style>
	
	body	{
	background-color: rgb(240, 240, 240); 
	max-width: 100%;
	overflow-x: hidden;
	}
	
	#flashcards	{
	position: relative;
	height: 100vh;
	width: 100%;
	display: inline-block;
	margin-bottom: -20px;
	}
	
	@font-face {
	font-family: architect;
	src: url("ArchitectsDaughter.ttf");
	}
	
	.flip-card {
	  background-color: transparent;
	  width: 500px;
	  height: 300px;
	  perspective: 1000px;
	  margin: auto;
	  display: block;
	opacity: 0;
	position: absolute;
	top: 0;
	left: 500px;
	right: 0;
	bottom: 0;
	margin: auto;
	}

	.flip-card-inner {
	  position: relative;
	  width: 100%;
	  height: 100%;
	  text-align: center;
	  transition: transform 0.8s;
	  -webkit-transition: transform 0.8s;
	  transform-style: preserve-3d;
	  backface-visibility: hidden;
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}	
	
	.flip-card-inner:hover	{
		cursor: pointer;
	}
	
	
	.flip-card-front, .flip-card-back {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  backface-visibility: hidden;
	  background-image: url("images/notecard.png");
	  line-height: 300px;
	  vertical-align: bottom;
	  overflow: hidden;
	}

	.flip-card-front {
	  background-color: #bbb;
	  color: black;
	  z-index: 2;
	}

	.flip-card-back {
	  background-color: #2980b9;
	  color: black;
	  z-index: 1;
	}

	.flip-card p {
		font-family: architect, Arial, sans-serif;
		line-height: 24px;
		font-size: 20px;
		position: relative;
		top: 50%;
		transform: translateY(-50%); 
		margin: 0;
		margin-top: 9px;
	}
	
	.button	{
		width: 100px;
		height: 40px;
		background-color: #ff9900;
		color: black;
		float: right;
		text-align: center;
		border-radius: 5px;
		font-weight: 700;
		font-size: 1em;
		-webkit-transition-duration: 0.5s;
		transition-duration: 0.5s;
		border: none;
		margin: 2px;
		font-family: Arial, sans-serif;
	}
	
	.button:hover	{
		cursor: pointer;
	}
	
	.button:focus	{
		outline: 0;
	}
	
	#buttons	{
	width: 312px;
	height: 200px;
	position: absolute;
	top: 600px;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	}
	
	#score{
		position: absolute;
		top: 50px;
		left: 106px;
	}
	.scorebox{
		width: 100px;
		height: 60px;
		background-color: #ff9900;
		text-align: center;
		border-radius: 15px;
		font-weight: 700;
		font-size: 1em;
		font-family: Arial, sans-serif;
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
	
	#right, #left	{
		position: absolute;
		width: 220px;
		height: 150px;
		margin: auto;
		left: 0;
		right: 0;
		top: 43%;
		text-align: center;
		font: 20px bold arial, sans-serif;
	}
	
	#right p, #left p	{
		margin-top: 50px;
	}
	
	#left	{
		right: 750px;
	}
	
	#right	{
		left: 750px;
	}
	
	#check	{
		color: green;
		font-size: 100px;
		display: none;
		position: absolute;
		right: 50px;
		top: -50px;
		z-index: -1;
	}
	
	#ex	{
		color: red;
		font-size: 100px;
		display: none;
		position: absolute;
		right: 50px;
		top: -50px;
		z-index: -1;
	}
	
	</style>
	
	</head>
	<body onload="load()" onresize="resize()">
	
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
			
		<a href="classrooms.php">
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
	
	<div id="right">
		<p class="instruction">Drag the card right when you get it right! &#10004;</p>
		<p id="check">&#10004;</p>
	</div>
	<div id ="left">
		<p class="instruction">Drag the card left when you get it wrong!</p>
		<p id="ex">&#10008;</p>
	</div>
	
	<div id="flashcards">
		<div class="flip-card" onclick="flip()" style="display:block;opacity:1.0;left:0;">
			<div class="flip-card-inner">
				<div class="flip-card-front">
					<p style="line-height: 24px" class="front">Question 1</p>
				</div>
				<div class="flip-card-back">
					<p style="line-height: 24px;" class="back">Answer 1</p>
				</div>
			</div>
		</div>
		<div class="flip-card" onclick="flip()">
			<div class="flip-card-inner">
				<div class="flip-card-front">
					<p style="line-height: 24px" class="front">Question 2</p>
				</div>
				<div class="flip-card-back">
					<p style="line-height: 24px;" class="back">Answer 2</p>
				</div>
			</div>
		</div>
		<div class="flip-card" onclick="flip()">
			<div class="flip-card-inner">
				<div class="flip-card-front">
					<p style="line-height: 24px" class="front">Question 3</p>
				</div>
				<div class="flip-card-back">
					<p style="line-height: 24px;" class="back">Answer 3</p>
				</div>
			</div>
		</div>
		<div class="flip-card" onclick="flip()">
			<div class="flip-card-inner">
				<div class="flip-card-front">
					<p style="line-height: 24px" class="front">Question 4</p>
				</div>
				<div class="flip-card-back">
					<p style="line-height: 24px;" class="back">Answer 4</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<button class="button" onclick="next()">Next</button>
		<a href="javascript:history.back()"><button class="button" style="background-color:black;color:white;">Done</button></a>
		<button class="button" onclick="previous()">Previous</button>
	
	<div id="score">
		<div class = "scorebox">
		<label><font color="white">Score:</font></label>
		<p id = "scoreNum"></p>
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
	
	</body>
	<script>

dragElement(document.getElementById("flashcards"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0, score = 0;
  if (elmnt) {
    // if present, the header is where you move the DIV from:
    elmnt.onmousedown = dragMouseDown;
  } else {
    // otherwise, move the DIV from anywhere inside the DIV: 
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
	
	document.getElementsByClassName("instruction")[0].style.display = "none";
	document.getElementsByClassName("instruction")[1].style.display = "none";
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
	elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
	document.onmousemove = null;
	if((elmnt.offsetLeft-pos1)<-25){
	  score = score - 100;
	  setTimeout(function(){
			$("#ex").fadeIn(500);
		}, 0);
		setTimeout(function(){
			$("#ex").fadeOut(500);
		}, 500);
  	}else if((elmnt.offsetLeft-pos1)>25){
	  score = score + 100;
	  setTimeout(function(){
			$("#check").fadeIn(500);
		}, 0);
		setTimeout(function(){
			$("#check").fadeOut(500);
		}, 500);
	  }
	else
		return;
	if(score<0){
		document.getElementById("scoreNum").style.color = "red";
	} else if(score>0){
		document.getElementById("scoreNum").style.color = "green";
	}else{
		document.getElementById("scoreNum").style.color = "white";
	}
  	document.getElementById("scoreNum").innerHTML = score;
	next();
	flip();
	elmnt.style.top = 0;
	elmnt.style.left = 0;
  }

}
	</script>
	</html>