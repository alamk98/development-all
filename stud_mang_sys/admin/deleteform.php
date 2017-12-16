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
		
		$id = $_REQUEST['sid'];

		$qry = "DELETE FROM `student` WHERE id ='$id'";

		$run = mysqli_query($con,$qry);

		if ($run == true) {
			
			?>
			<script type="text/javascript">
				alert('data deleted successfully');
				window.open('deletestudent.php','_self');
			</script>
			<?php
		}

	
?>
