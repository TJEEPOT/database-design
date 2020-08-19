<?php
$title="Delete Race";
$db = parse_ini_file("db.ini"); // ENSURE THIS FILE IS AVAILABLE IN HTDOCS
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['raceID']))
		echo "<p>You must enter a Race ID.</p>";
	else{
		$raceID=$_POST['raceID'];
		
		$conn = mysqli_connect($db['host'], $db['user'],$db['password'], $db['database']); 
		$query = "DELETE FROM race WHERE raceID = '$raceID'";
		$result = mysqli_query($conn, $query);

		if (mysqli_affected_rows($conn) <= 0)
			echo "<p> Error: Unable to delete race number $raceID, please check that the Race ID is correct and not in use.</p><br>";
		else
			echo "<p> Race number $raceID has been deleted.</p><br>";
		mysqli_close($conn);
	}
	echo "<a href='index.php'>Continue</a>"; 
echo"</body>";
echo"</html>";
?> 