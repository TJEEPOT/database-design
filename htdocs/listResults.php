<?php
$title="List Results";
$db = parse_ini_file("db.ini"); // ENSURE THIS FILE IS AVAILABLE IN HTDOCS
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['firstName']))
		echo "<p>You must enter the member's first name.</p>";
	else if(empty($_POST['lastName']))
		echo "<p>You must enter the member's last name.</p>";
	else
	{
		$firstName=$_POST['firstName'];
		$lastName=$_POST['lastName'];
		$conn = mysqli_connect($db['host'], $db['user'],$db['password'], $db['database']); 
		$query = "SELECT firstName, lastName, grade, seriesName, seriesYear, raceName, raceDate, position 
					FROM member, series, race, competitor 
					WHERE member.memberID = competitor.memberID
					AND series.seriesID = race.seriesID 
					AND race.raceID = competitor.raceID
					AND firstName = '$firstName'
					AND lastName = '$lastName'
					AND position != 'NULL'
					ORDER BY position
					"; 
		$result = mysqli_query($conn, $query);
		
		if (mysqli_affected_rows($conn) <= 0)
			echo "No results found for $firstName $lastName.<br><br>";
		else {
			echo "<table>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Grade</th>
				<th>Series Name</th>
				<th>Year</th>
				<th>Race Name</th>
				<th>Date</th>
				<th>Position</th>
			</tr>";
			
			while ($row= mysqli_fetch_assoc($result)){ 
				echo "<tr>"; 
					echo "<td>".$row['firstName']."</td>"; 
					echo "<td>".$row['lastName']."</td>"; 
					echo "<td>".$row['grade']."</td>"; 
					echo "<td>".$row['seriesName']."</td>"; 
					echo "<td>".$row['seriesYear']."</td>"; 
					echo "<td>".$row['raceName']."</td>"; 
					echo "<td>".$row['raceDate']."</td>"; 
					echo "<td>".$row['position']."</td>"; 
				echo "</tr>"; 
			} 
			echo "</table><br>"; 
		}
		mysqli_close($conn);
	}
    echo "<a href='index.php'>Continue</a>"; 
echo "</body>"; 
echo "</html>"; 
?>  
