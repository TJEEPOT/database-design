<?php
$title="Index";

require_once('head.php');
?>

<body>
	<h1> Canary Canoes Database </h1>
	<table>
	<tr>
	<td>
		<h2>3. Add New Member</h2> 
		<form action ='addMember.php' method='post'>
			First Name <input type='text' name = 'firstName'><br>
			Last Name <input type='text' name = 'lastName'><br>
			Grade <input type='text' name = 'grade'><br>
			<input type ='submit' value = 'Add'>
		</form>
	</td>
	</tr>
	
    <tr>
	<td>
		<h2>4. List Members</h2> 
		<form action ='listMembers.php' method='post'>
			<input type ='submit' value = 'List Members'>
		</form>
	</td>
	</tr>

	<tr>
	<td>
		<h2>5. Delete a Race</h2> 
		<form action ='deleteRace.php' method='post'>
			Race ID <input type='text' name = 'raceID'><br>
			<input type ='submit' value = 'Delete Race'>
		</form>
	</td>
	</tr>
	
	<tr>
	<td>
		<h2>6. Assign a Member</h2>
		<form action = 'assignMember.php' method='post'>
			Member ID <input type ='text' name = 'memberID'><br>
			Race ID <input type='text' name = 'raceID'><br>
		<input type = 'submit' value = 'Assign'>
		</form>
	</td>
	</tr>

	<tr>
	<td>
		<h2>7. Add Result</h2> 
		<form action ='addResult.php' method='post'>
			Member ID <input type='text' name = 'memberID'><br>
			Race ID <input type='text' name = 'raceID'><br>
			Result <input type='text' name = 'position'><br>
			<input type ='submit' value = 'Add Result'>
		</form>
	</td>
	</tr>

		
	<tr>
	<td>
		<h2>8. List Results</h2> 
		<form action ='listResults.php' method='post'>
			First Name <input type='text' name = 'firstName'><br>
			Last Name <input type='text' name = 'lastName'><br>
			<input type ='submit' value = 'List Results'>
		</form>
	</td>
	</tr>
		
	<tr>
	<td>
		<h2>9. List Races by Course</h2>
		<form action = 'listRaces.php' method='post'>
			Course <input type = 'text' name = 'courseName'><br>
		<input type = 'submit' value = 'List Races'>
		</form>
	</td>
	</tr>
		
	<tr>
	<td>
		<h2>10. Enrol Member onto Course</h2> 
		<form action ='enrol.php' method='post'>
			First Name <input type='text' name = 'firstName'><br>
			Last Name <input type='text' name = 'lastName'><br>
			Course Name <input type='text' name = 'courseName'><br>
			<input type ='submit' value = 'Enrol'>
		</form>
	</td>
	</tr>
	
	<tr>
	<td>
		<h2>11. Add New Race</h2>
		<form action = 'addRace.php' method='post'>
			Race Name <input type = 'text' name = 'raceName'><br>
			Race Date <input type='text' name = 'raceDate'><br>
			Series Name <input type = 'text' name = 'seriesName'><br>
			Year <input type = 'text' name = '_year'><br>
		<input type = 'submit' value = 'Add'>
		</form>
	</td>
	</tr>

	<tr>
	<td>
		<h2>12. Assign Member to Race</h2> 
		<form action ='assignRace.php' method='post'>
			First Name <input type='text' name = 'firstName'><br>
			Last Name <input type='text' name = 'lastName'><br>
			Race Name <input type='text' name = 'raceName'><br>
			Series Name <input type='text' name = 'seriesName'><br>
			Year <input type='text' name = '_year'><br>
			<input type ='submit' value = 'Assign Member'>
		</form>
	</td>
	</tr>
	
	</table>
</body>
</html>