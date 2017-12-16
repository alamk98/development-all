<?php

		

		function showdetails($standerd,$rollno){


			include('dbcon.php');

			$qry = "SELECT * FROM `student` WHERE rollno = '$rollno' AND standerd = '$standerd'";
			$run = mysqli_query($con,$qry);

			if (mysqli_num_rows($run)>0) {

				$data = mysqli_fetch_assoc($run);
				?>

				<table border="1" align="center" style="width: 80%; margin-top: 20px;">
					<tr >
						<th colspan="3">Student Details</th>
					</tr>
					<tr>
						<td rowspan="5" align="center"><img src="data_imgs/<?php echo $data['image']; ?>" style = "max-height: 200px;max-width: 300px"></td>
						<th>Roll No</th>
						<td><?php echo $data['rollno']; ?></td>
					</tr>
					<tr>
					
						<th>Name</th>
						<td><?php echo $data['name']; ?></td>
					</tr>
					<tr>
					
						<th>Standerd</th>
						<td><?php echo $data['standerd']; ?></td>
					</tr>
					<tr>
					
						<th>Parent Contact No</th>
						<td><?php echo $data['parent_contact']; ?></td>
					</tr>
					<tr>
					
						<th>City</th>
						<td><?php echo $data['city']; ?></td>
					</tr>

				</table>

				<?php
				
			}
			else{

				echo "<script>alert('No Students Found')</script>";
			}


		}


?>