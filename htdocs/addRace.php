<?php
$title="Add Race";
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['raceName']))
		echo "<p>You must enter a race name.</p>";
	else if(empty($_POST['raceDate']))
		echo "<p>You must enter the date of the race.</p>";
	else if(empty($_POST['seriesName']))
		echo "<p>You must enter the series name.</p>";
	else if(empty($_POST['_year']))
		echo "<p>You must enter the series year.</p>";
	else{
		$raceName=$_POST['raceName'];
		$raceDate=$_POST['raceDate'];
		$seriesName=$_POST['seriesName'];
		$seriesYear=$_POST['_year'];
		
		$conn = mysqli_connect('mariadb', $_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']); 
		$query = "INSERT INTO race (seriesID, raceName, raceDate)
					SELECT series.seriesID, '$raceName', '$raceDate'
					FROM series 
					WHERE seriesName = '$seriesName'
					AND seriesYear = '$seriesYear'
				";
		$result = mysqli_query($conn, $query);
		if (mysqli_affected_rows($conn) <= 0)
			echo "<p> Error: Unable to add a new race, please check that the series name and year are correct, and that the race date is in the correct format.</p><br>";
		else
			echo "<p> Added race $raceName on $raceDate to the $seriesYear $seriesName series.</p><br>";
		mysqli_close($conn);
	}
	echo "<a href='index.php'>Continue</a>"; 
echo"</body>";
echo"</html>";
?> 