<?php
include 'connection.php';
$user = $_REQUEST['username'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM Learnhub.user WHERE username = '$user';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {     
   while($row = $result->fetch_assoc()) {         
	echo "<p>username: " . $row["username"]. " email: " . $row["email"]. " Password:" . $row["userPassword"]. "<br/></p>";    
	if ($row["username"] = $user and $row["userPassword"] = $password)
	{
		echo "*******";
		
		if ($row["role"] == "teacher")
			header("Location: teacherpage.html");
		else if ($row["role"] == "student")
			header("Location: studentpage.html");
	}
	} 
} 
else {     
header("Location: index.html");
} 
$conn->close(); 
?>