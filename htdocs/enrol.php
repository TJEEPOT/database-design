<?php
$title="Enrol Member";
$db = parse_ini_file("db.ini"); // ENSURE THIS FILE IS AVAILABLE IN HTDOCS
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['firstName']))
		echo "<p>You must enter a first name.</p>";
	else if(empty($_POST['lastName']))
		echo "<p>You must enter a last name.</p>";
	else if(empty($_POST['courseName']))
		echo "<p>You must enter a course name.</p>";
	else{
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$courseName=$_POST['courseName'];
		
		$conn = mysqli_connect($db['host'], $db['user'],$db['password'], $db['database']); 
		$query = "INSERT INTO enrolment (memberID, courseID)
					(SELECT memberID, courseID
					FROM course, member
					WHERE firstName='$firstName'
					AND lastName='$lastName'
					AND courseName = '$courseName')";
		
		$result = mysqli_query($conn, $query);
		if (mysqli_affected_rows($conn) <= 0)
			echo "<p> Error: Unable to enrol member $firstName $lastName on course $courseName.</p><br>";
		else
			echo "<p> Member $firstName $lastName enroled on course $courseName.</p><br>";
		mysqli_close($conn);
	}
	
	echo "<a href='index.php'>Continue</a>"; 
echo"</body>";
echo"</html>";
?> 