<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student management System</title>
</head>
<body>
	<h3 align="right" style="margin: 20px"><a href="login.php">Admin Login</a></h3>
<h1 align="center">welcome to Student Management System</h1>
<br>
<br>
<form method="post" action="index.php">
	<table style="width: 30%" align="center" border="1px">
		<tr>
			<td colspan="2" align="center">Student Information</td>
		</tr>
		<tr>
			<td>Choose Standerd</td>
			<td>
				<select name="std">
					<option value="1">1st</option>
					<option value="2">2st</option>
					<option value="3">3st</option>
					<option value="4">4st</option>
					<option value="5">5st</option>
					<option value="6">6st</option>
					

				</select>
			</td>
		</tr>
		<tr>
			<td>Enter Rollno</td>
			<td><input type="text" name="rollno" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
		</tr>



	</table>



</form>
<?php
	
	if (isset($_POST['submit'])) {
		
		$standerd = $_POST['std'];
		$rollno = $_POST['rollno'];

		include('dbcon.php');

		include('function.php');

		showdetails($standerd,$rollno);

	}


?>
</body>
</html>
