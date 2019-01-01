<?php

include('../dbcon.php');// we gave .. because we wanted to come back that is back track to reach dbcon file in our principle directory.

		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$poon=$_POST['poon'];
		$std=$_POST['std'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		$id=$_POST['sid'];
		move_uploaded_file($tempname,"../dataimg/$imagename");

		$sql="UPDATE `student` SET `rollno` = '$rollno',`name`='$name',`city`='$city',`pcont`='$poon',`standard`='$std',`image`='$imagename' WHERE `student`.`id` = $id;";
		$result=mysqli_query($conn,$sql);
		
		if($result){
			?>
			<script>
				alert('Data successfully updated');
				window.open('updateform.php?sid=<?php echo $id;?>','_self );
			</script>
			<?php
		}

		


