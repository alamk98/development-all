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
include ('../dbcon.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM `student` WHERE id = '$sid'";
$run = mysqli_query($con,$sql);

$data =mysqli_fetch_assoc($run);
?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<br>
	<table border="2" style="border-color: white; border-collapse: collapse; height: 95%" align="center" width="50%">
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" value="<?php echo $data['rollno'] ;?>" required></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name" value="<?php echo $data['name']; ?>" required></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" value="<?php echo $data['city'] ;?>" required></td>
		</tr>
		<tr>
			<th>Parent Contact no</th>
			<td><input type="text" name="pcon" value="<?php echo $data['parent_contact'] ;?>" required></td>
		</tr>
		<tr>
			<th>Standerd</th>
			<td><input type="number" name="std" value="<?php echo $data['standerd'] ;?>" required></td>
		</tr>
		<tr>
			<th>Upload Image</th>
			<td><input type="file" name="simg" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="sid" value="<?php echo $data['id'] ;?>" >
			<input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
	
</form>
</body>
</html>
<?php
/*
if (isset($_POST['submit'])) {
include('../dbcon.php');
		$rollno= $_POST['rollno'];
		$name= $_POST['name'];
		$city= $_POST['city'];
		$pcon= $_POST['pcon'];
		$std= $_POST['std'];
		$id= $_POST['sid'];
		$imagename =$_FILES['simg']['name'];
		$tempname =$_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname,"../data_imgs/$imagename");

		$qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `parent_contact` = '$pcon', `standerd` = '$std` , `image` = `$imagename` WHERE `student`.`id` = `$id`";
		$run = mysqli_query($con,$qry);

		if ($run == true) {
			?>
			<script type="text/javascript">
				alert('data Updated successfully');
				window.open('updateform.php?sid=<?php echo $id ; ?>','_self');
			</script>
			<?php
		}
}
*/	
?>
