<?php
include 'connection.php';
$user = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM Learnhub.user WHERE username = '$user';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {     
   while($row = $result->fetch_assoc()) {         
	echo "<p>username: " . $row["username"]. " email: " . $row["email"]. " Password:" . $row["userPassword"]. "<br/></p>";   
	if ($row["username"] == $user And $row["userPassword"] == $password)
	{
		session_start();
		$_SESSION["user"] = $user;
		$_SESSION["role"] = $row["userRole"];
		echo $_SESSION["user"];
		echo $_SESSION["role"];
		
		if ($row["userRole"] == "teacher")
			header("Location: teacherClassrooms.php");
		else if ($row["userRole"] == "student")
			header("Location: classrooms.php");
		

	}
	else {     
		header("Location: index.html");
	} 
	} 
} 
else {     
header("Location: index.html");
} 
$conn->close(); 
?>