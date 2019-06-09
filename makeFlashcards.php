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
	<title>Create a New Study Set LearnHub</title>
	
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="flashcards.js"></script>
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
	
	</script>
	<style type="text/css">
    .changeCard {
        height:70px; 
        width:35%; 
        position:relative;
        top:50%; 
        margin-left: 10%;
        background-color: white;
        color: black;
        border: 2px solid #555555;
        transition: all 0.5s;
        cursor: pointer;
        font-size: 40px;
    }


    .changeCard:hover {
        background-color: #ff9900;
        color: white;
    }

    .changeCard span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .changeCard span:after {
        content: '\002B';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

	#deleteCard span::after {
		content: '\002D';
	}

    .changeCard:hover span {
        padding-right: 25px;
    }

    .changeCard:hover span:after {
        opacity: 1;
        right: 0;
    }
	
    input[type=text], select {
        width: 30%;
        padding: 12px 20px;
        margin-left: 2px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    label {
        cursor: default;
        margin-left: 10%;
    }

    .separator {
        height: 10px;
    }
	.submitCard{
        height:70px; 
        width: 20%; 
        position:relative;
        margin-left: 40%;
        background-color: #ff9900;
        color: black;
        border: 2px solid #555555;
        cursor: pointer;
        font-size: 40px;
	}
	.submitCard:hover {
		opacity: 0.8;
		color: white;
    }

	#login	{
	border: none;
	font-weight: 700;
	font-size: 1em;
	}
	</style>
	
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
			
		<a href="teacherClassrooms.php" >
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
	
    <!-- Time to make flashcards -->
    <br><br><br><br><br><br>
    <fieldset>
    <form name="flashCardInfo" method="post" action="insertFlashcards.php">
    <legend><Font size = "6" face="Arial"><center>
        Create Flashcards
	</center></Font></legend>
	
		<label for="setTitleLabel" id="labelSetTitle"><font size="4" face="Arial"><center>Name your set:</center></font></label>
		<center><input type="text" id="setTitle" name="setTitle"></center>
		<br>
		<input type="hidden" id="numTerms" name="numTerms" value="">
        <label for="term1" id="labelTerm1"><font face="Arial">Term 1:</font></label>
        <input type="text" id="term1" name="term1">
        <label for="def1" id="labelDef1"><font face="Arial">Defintion 1:</font></label>
        <input type="text" id="def1" name="def1">
        <div class="separator"></div>
        <label for="term2" id="labelTerm2"><font face="Arial">Term 2:</font></label>
        <input type="text" id="term2"name="term2">
        <label for="def2" id="labelDef2"><font face="Arial">Defintion 2:</font></label>
        <input type="text" id="def2" name="def2">
        <div class="separator"></div>
        <label for="term3" id="labelTerm3"><font face="Arial">Term 3:</font></label>
        <input type="text" id="term3" name="term3">
        <label for="def3" id="labelDef3"><font face="Arial">Defintion 3:</font></label>
		<input type="text" id="def3" name="def3">
		<div id="cards"></div>
		<br><br><br>
		
        <button class="submitCard" onclick="validateCards()" type="button">Submit</button>

    </form>
    </fieldset>
    <br><br>
	<button class="changeCard" id="addCard" onclick="addCard()"><span>Add Card</span></button>
	<button class="changeCard" id="deleteCard" onclick="deleteCard()"><span>Delete Card</span></button>
    <br><br><br>
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