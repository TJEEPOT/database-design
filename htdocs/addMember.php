<?php
$title="Add Member";
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['firstName']))
		echo "<p>You must enter a first name.</p>";
	else if(empty($_POST['lastName']))
		echo "<p>You must enter a last name.</p>";
	else if(empty($_POST['grade']))
		echo "<p>You must enter a grade.</p>";
	else if($_POST['grade'] != 'j' AND $_POST['grade'] != 's') 
		echo "<p>Grade must be 'j' or 's'.</p>";
	else{
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$grade=$_POST['grade'];
		
		$conn = mysqli_connect('mariadb', $_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']); 
		$query = "INSERT INTO member (firstName, lastName, grade) VALUES ( '$firstName','$lastName', '$grade')";
		$result = mysqli_query($conn, $query);
		if (mysqli_affected_rows($conn) <= 0)
			echo "<p> Error: Unable to add member.</p><br>";
		else
			echo "<p> Member $firstName $lastName added to grade $grade.</p><br>";
		mysqli_close($conn);
	}
	echo "<a href='index.php'>Continue</a>"; 
echo"</body>";
echo"</html>";
?> 