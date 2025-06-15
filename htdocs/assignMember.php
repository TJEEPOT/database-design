<?php
$title="Assign Member";
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['memberID']))
		echo "<p>You must enter a Member ID.</p>";
	else if(empty($_POST['raceID']))
		echo "<p>You must enter a Race ID.</p>";
	else{
		$memberID=$_POST['memberID'];
		$raceID=$_POST['raceID'];
		
		$conn = mysqli_connect('mariadb', $_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']); 
		$query = "INSERT INTO competitor VALUES (NULL, '$memberID', '$raceID', NULL)";		
		
		$result = mysqli_query($conn, $query);
		if (mysqli_affected_rows($conn) <= 0)
			echo "<p> Error: Unable to assign member $memberID to race $raceID.</p><br>";
		else
			echo "<p> Member $memberID added to race $raceID.</p><br>";
		mysqli_close($conn);
	}

	echo "<a href='index.php'>Continue</a>"; 
echo"</body>";
echo"</html>";
?> 