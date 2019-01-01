<?php

	function showdetails($standard,$rollno)
	{
		include('dbcon.php');
		
		$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";

		$run=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($run)>0)
		{
			$data=mysqli_fetch_assoc($run); 
			?>
		<table border="2" align="center" width="60%">
			<tr>
				<th colspan="3">STUDENT DETAILS</th>
			</tr>
			<tr>
				<td rowspan="5"><img src="dataimg/ <?php echo $data['image']; ?>" style="max-height:200px; max-width:150px;"/></td>
				<th>Roll No</th>
				<td><?php echo $data['rollno']; ?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<th>Standard</th>
				<td><?php echo $data['standard']; ?></td>
			</tr>
		</table>
		<?php
		}
		else
		{
			echo "<script>alert('No such Record.');</script>";
		}
	}
?>