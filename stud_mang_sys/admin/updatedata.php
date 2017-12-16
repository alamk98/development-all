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

		$qry = "UPDATE `student` SET `rollno`=$rollno,`name`= '$name',`city`='$city',`parent_contact`=$pcon,`standerd`=$std,`image`='$imagename' WHERE id =$id ";

		$run = mysqli_query($con,$qry);

		if ($run == true) {
			
			?>
			<script type="text/javascript">
				alert('data Updated successfully');
				window.open('updateform.php?sid=<?php echo $id ; ?>','_self');
			</script>
			<?php
		}

	
?>
