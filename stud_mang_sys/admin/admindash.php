<?php
session_start();
if (isset($_SESSION['uid'])) {

	echo "";
	}
else{
	header('location:../login.php');
}
?>
<?php
include('header.php');
?>
	<dir class="admintitle" align="center">
<h3  style="margin-right: 20px; float: right;"><a href="logout.php" style="color: #fff">Logout</a></h3>
	<h1 align="center">Welcome to Admin Dashboard</h1>
</dir>
<div class="dashboard">
	<table style="width: 50%;height: 140px;" align="center">
		<tr>
			<td>1.</td>
			<td><a href="addstudent.php">insert student details</a></td>
		</tr>
		<tr>
			<td>2.</td>
			<td><a href="updatestudent.php">Update student details</a></td>
		</tr>
		<tr>
			<td>3.</td>
			<td><a href="deletestudent.php">Delete student details</a></td>
		</tr>
	</table>
</div>
</body>
</html>