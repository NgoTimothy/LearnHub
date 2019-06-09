<?php
include 'connection.php';
$user = $_REQUEST['newUsr'];
$password = $_REQUEST['newPsw'];
$email = $_REQUEST['newEmail'];
$role = $_REQUEST['acctType'];

echo $user. "<br/>";
echo $password. "<br/>";
echo $email. "<br/>";
echo $role. "<br/>";

$sql = "INSERT INTO Learnhub.user (username, userPassword, email, userRole)
VALUES ('$user', '$password', '$email', '$role')";

if ($conn->query($sql) === TRUE) {
    if ($role == "teacher")
			header("Location: teacherpage.html");
		else if ($role == "student")
			header("Location: studentpage.html");
} else {
    header("Location: register.html");
}

$conn->close(); 
?>