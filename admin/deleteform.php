<?php

include('../dbcon.php');// we gave .. because we wanted to come back that is back track to reach dbcon file in our principle directory.
		$id=$_REQUEST['sid'];

		$sql="DELETE FROM `student` WHERE `id`='$id';";
		$result=mysqli_query($conn,$sql);
		
		if($result){
			?>
			<script>
				alert('Data successfully updated');
				window.open('updateform.php','_self );
			</script>
			<?php
			
		}
?>
		


