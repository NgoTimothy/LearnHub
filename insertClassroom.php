<?php
include 'connection.php';
session_start();

$user = $_SESSION["user"];
$classDescript = $_REQUEST['classDesc'];
$courseName = $_REQUEST['className'];
$classID; 

$getBiggestClassroom = "SELECT max(courseID) from Learnhub.enrollment;";

$resultID = $conn->query($getBiggestClassroom);
 
if($resultID->num_rows > 0) {
	$row = $resultID->fetch_assoc();
	$classID = $row["max(courseID)"] + 1;
}
else {
	$classID = 10000;
}

$_SESSION["courseID"] = $classID;
$insertClassInfo = "INSERT INTO Learnhub.courseInformation(courseID, courseName, CourseDescription) VALUES ('$classID', '$courseName' , '$classDescript');";
$conn->query($insertClassInfo);

$insertEnrollment = "INSERT INTO Learnhub.enrollment (courseID, username) VALUES ('$classID', '$user');"; 
$conn->query($insertEnrollment);
echo $_SESSION["courseID"];

header("Location: teacherpage.php");

$conn->close();

?>