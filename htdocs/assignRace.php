<?php
$title="Assign Member to a Race";
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['firstName']))
		echo "<p>You must enter a first name.</p>";
	else if(empty($_POST['lastName']))
		echo "<p>You must enter a last name.</p>";
	else if(empty($_POST['raceName']))
		echo "<p>You must enter a race name.</p>";
	else if(empty($_POST['seriesName']))
		echo "<p>You must enter a series name.</p>";
	else if(empty($_POST['_year']))
		echo "<p>You must enter a year.</p>";
	else{
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$raceName=$_POST['raceName'];
		$seriesName=$_POST['seriesName'];
		$seriesYear=$_POST['_year'];
		
		$conn = mysqli_connect('mariadb', $_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']); 
		$query = "INSERT INTO competitor (memberID, raceID)
					SELECT memberID, raceID
					FROM member, race, series
					WHERE series.seriesID = race.seriesID
					AND firstName = '$firstName'
					AND lastName = '$lastName'
					AND raceName = '$raceName'
					AND seriesName = '$seriesName'
					AND seriesYear = '$seriesYear'
					";	
		$result = mysqli_query($conn, $query);
		if (mysqli_affected_rows($conn) <= 0)
			echo "<p> Error: Unable to add member $firstName $lastName to race $raceName.</p><br>";
		else
			echo "<p> Member $firstName $lastName added to race $raceName.</p><br>";
		mysqli_close($conn);
	}
	
	echo "<a href='index.php'>Continue</a>"; 
echo"</body>";
echo"</html>";
?> 