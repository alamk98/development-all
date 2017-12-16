<?php
session_start();
if (isset($_SESSION['uid'])) {

	echo "";
	}
else{
	header('location: ../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');

?>

<div style="background-color: #346dc9;
	color: #fff;
	text-align: center;
	margin: 0px 50px ;
	height: 245px;
	font-size: 25px;
	text-decoration: none;">
<form method="post" action="addstudent.php" enctype="multipart/form-data">
	
	<table border="2" style="border-color: white; border-collapse: collapse; height: 95%" align="center" width="50%">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name" placeholder="Enter student Name" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter Student City" required></td>
		</tr>
		<tr>
			<th>Parent Contact no</th>
			<td><input type="text" name="pcon" placeholder="Enter Parent Contact No" required></td>
		</tr>
		<tr>
			<th>Standerd</th>
			<td><input type="number" name="std" placeholder="Enter Standerd" required></td>
		</tr>
		<tr>
			<th>Upload Image</th>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
	
</form>
</div>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		include('../dbcon.php');
		$rollno= $_POST['rollno'];
		$name= $_POST['name'];
		$city= $_POST['city'];
		$pcon= $_POST['pcon'];
		$std= $_POST['std'];
		$imagename =$_FILES['simg']['name'];
		$tempname =$_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname,"../data_imgs/$imagename");

		$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `parent_contact`, `standerd`,`image`) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')" ;
		$run = mysqli_query($con,$qry);

		if ($run == true) {
			?>
			<script type="text/javascript">
				alert('data insert is successfully');
			</script>
			<?php
		}

	}
?>