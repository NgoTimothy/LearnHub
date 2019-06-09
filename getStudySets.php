<?php
include 'connection.php';
$user = $_REQUEST['username'];
$password = $_REQUEST['password'];
$flashID = -1;//Must init to invalid flashID to make sure it prints the first subject
$getFlash = "SELECT f.flashID, f.term, f.definition, f.cardSet from Learnhub.flashcards f, Learnhub.user u, Learnhub.enrollment e, study_set s where u.username = '$user' and u.userRole = 'teacher' and u.username = e.username and e.courseID = s.classID and s.setID = f.setID;";
$result = $conn->query($getFlash);
// I may not need u.userRole = 'teacher' because only teachers can access this page
if ($result->num_rows > 0) {     
   while($row = $result->fetch_assoc()) {
    if($row["f.flashid"] = $flashID {
        //Print term and definition
        echo "<p>Term: " . $row["f.term"]. " Definition: " . $row["f.definition"]. "<br/></p>";
    }
    else {
        $flashID = $row[f.flashID];
        echo "<br>";
        echo "<h3>Subject: " . $row["f.cardSet"]. "<br/>></h3>";
        echo "<p>Term: " .$row["f.term"]. " Definition: " .$row["f.definition"]. "<br/></p>";
        //Print new terms and defintions together
    }
} 
else {     
    echo "<h1>No sets have been made yet. <br></h1>";
    header("Location: teacherPage.html");
} 
$conn->close(); 
?>