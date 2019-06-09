<?php
$servername = "cs319-131.misc.iastate.edu";
$username = "team1";
$password = "Group_1_2019";
$dbname = "Learnhub";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
else
{
	echo "connected <br/>";
}

$sql = "SELECT * FROM Learnhub.user;";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {     
   while($row = $result->fetch_assoc()) {         
	echo "<p>username: " . $row["username"]. " email: " . $row["email"]. " Password:" . $row["userPassword"]. "<br/></p>";    
	} 
} 
else {     
echo "0 results"; 
} 

//$conn->close(); 

?> 