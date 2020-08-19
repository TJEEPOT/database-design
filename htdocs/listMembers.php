<?php
$title="List Members";
$db = parse_ini_file("db.ini"); // ENSURE THIS FILE IS AVAILABLE IN HTDOCS
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
    $conn = mysqli_connect($db['host'], $db['user'],$db['password'], $db['database']); 
    $query = "SELECT * FROM member"; 
    $result = mysqli_query($conn, $query);
	
    echo "<table>
	<tr>
		<th>Member ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Grade</th>
	</tr>";
	
    while ($row= mysqli_fetch_assoc($result)){ 
        echo "<tr>"; 
			echo "<td>".$row['memberID']."</td>"; 
			echo "<td>".$row['firstName']."</td>"; 
			echo "<td>".$row['lastName']."</td>"; 
			echo "<td>".$row['grade']."</td>"; 
        echo "</tr>"; 
    } 
    echo "</table><br>"; 
	mysqli_close($conn);
    echo "<a href='index.php'>Continue</a>"; 
echo "</body>"; 
echo "</html>"; 
?>