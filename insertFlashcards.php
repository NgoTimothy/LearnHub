<?php
include 'connection.php';
session_start();

$flashID;
$setID;
$cardSet = $_REQUEST['setTitle'];
$cardDesc = $_REQUEST['setDesc'];
$numTerms = $_REQUEST['numTerms'];
$termText;
$defText;
$username = $_SESSION['user'];
$classID = $_SESSION['courseID'];
// Need to query the highest set ID then add one
// or if null make the $setID = 1;
// "select setID from Learnhub.flashcards where 
//
$getBiggestID = "select max(s.setID) from Learnhub.study_set s, Learnhub.enrollment e where e.courseID = s.classID and e.username = '$username';";

$resultID = $conn->query($getBiggestID);

if($resultID->num_rows > 0) {
	$row = $resultID->fetch_assoc();
	$setID = $row["max(s.setID)"] + 1;
}
else {
	$setID = 1;
}

echo $setID;

//Insert into study_set table for tracking which sets they have
$insertStudySet = "INSERT INTO Learnhub.study_set(setID, classID, setName, setDescription) VALUES ('$setID', '$classID', '$cardSet', '$cardDesc');";
$conn->query($insertStudySet);

for($i = 1; $i <= $numTerms; $i++) {//Loop to get all the flashcards
	$termText = $_REQUEST['term' . $i];
	$defText = $_REQUEST['def' . $i];
	$flashID = $i;
	
	echo '<p>'. $flashID. ' '. $setID .' '. $termText . " " . $defText . ' ' . $cardSet . "</p>";

	$sql = "INSERT INTO Learnhub.flashcards (flashID, setID, term, definition)
VALUES ('$flashID', '$setID', '$termText', '$defText');";
	$conn->query($sql);
}

$conn->close(); 

header("Location: teacherpage.php");
?>