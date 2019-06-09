<?php
include 'connection.php';
session_start();

$user = $_SESSION["user"];
$role = $_SESSION["role"];
$classID = $_REQUEST['classID'];


$getClassroom = "SELECT * from enrollment where courseID = '$classID';";

$result = $conn->query($getClassroom);
 
$insertEnrollment = "INSERT INTO Learnhub.enrollment (courseID, username) VALUES ('$classID', '$user');"; 
 
if($conn->query($insertEnrollment) === TRUE) {

	$_SESSION["courseID"] = $classID;

    if ($role == "teacher") {
        header("Location: teacherpage.php");
    }
    else if ($role == "student")
	    header("Location: studentpage.php");
}
else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
	// Throw error message
}

$conn->close();
?>