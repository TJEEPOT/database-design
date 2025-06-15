<?php
$title="Races by Course";
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['courseName']))
		echo "<p>You must enter a course name.</p>";
	else{
		$courseName=$_POST['courseName'];	
		$conn = mysqli_connect('mariadb', $_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);
		$query = "SELECT courseName, firstName, lastName, grade, seriesName, seriesYear, raceName, raceDate, position
					FROM course, member, series, race, competitor, enrolment
					WHERE courseName = '$courseName'
					AND course.courseID = enrolment.courseID
					AND member.memberID = enrolment.memberID
					AND member.memberID = competitor.memberID
					AND race.raceID = competitor.raceID
					AND race.seriesID = series.seriesID
					AND position != 'NULL'
					ORDER BY lastName
					"; 
		$result = mysqli_query($conn, $query);
		
		if (mysqli_affected_rows($conn) <= 0)
			echo "No results found for $courseName.<br><br>";
		else {
			echo "<table>
			<tr>
				<th>Course Name</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Grade</th>
				<th>Series Name</th>
				<th>Series Year</th>
				<th>Race Name</th>
				<th>Race Date</th>
				<th>Position</th>
			</tr>";
			
			while ($row = mysqli_fetch_assoc($result)){ 
				echo "<tr>"; 
					echo "<td>".$row['courseName']."</td>"; 
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