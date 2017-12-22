<?php
$name_value = $_POST['name'];

if (isset($name_value)===true && empty($name_value)=== false) {

include('../db/connect.php');

$qry ="SELECT * FROM `names` WHERE name = '$name_value'";

$run = mysqli_query($con,$qry);

	if (mysqli_num_rows($run) < 1) {
		echo "no record found";
	}
	else{
		$count =0 ;

		while ($data = mysqli_fetch_assoc($run)) {

			$count++ ;
		
			echo "seriar no = ".$count." ";
			echo $data['name']." " ;
			echo $data['location']." ";

			
		}
	}

	
}
?>