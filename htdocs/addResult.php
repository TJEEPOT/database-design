<?php
$title="Add Result";
require_once('head.php');

echo "<body>";
    echo "<h2>$title</h2>";
	if(empty($_POST['memberID']))
		echo "<p>You must enter a Member ID.</p>";
	else if(empty($_POST['raceID']))
		echo "<p>You must enter a Race ID.</p>";
	else if(empty($_POST['position']))
		echo "<p>You must enter a Result.</p>";
	else{
		$memberID=$_POST['memberID'];
		$raceID=$_POST['raceID'];
		$position=$_POST['position'];
		
		$conn = mysqli_connect('localhost', 'root','password', 'canary');    
		$query = "UPDATE competitor SET position = '$position' 
					WHERE memberID = '$memberID'
					AND raceID = '$raceID'";
		
		$result = mysqli_query($conn, $query);
		if (mysqli_affected_rows($conn) <= 0)
			echo "<p> Error: Unable to assign result $position to member $memberID.</p><br>";
		else
			echo "<p> Result $position assigned to member $memberID for race $raceID.</p><br>";
		mysqli_close($conn);
	}
	
	echo "<a href='index.php'>Continue</a>"; 
echo"</body>";
echo"</html>";
?> 