<?php

session_start();
	if(isset($_SESSION['uid'])){
		echo "";
	}
	else{
		header('location:../login.php');
	    }
?>
<?php
	include('header.php');
?>

	<div class="admin">
		<h5><a href="logout.php" style="float:right;margin-right:30px;color:gray;font-size:20px;">Logout</a></h5>
		<h1>Admin Dashboard<h1>
	</div>
	<div class="dashboard" align="center" border="2">
		<table>
		<tr>
			<td><a href="addstudent.php">Insert Student Details</a></td>
		<tr>
		<tr>
			<td><a href="updatestudent.php">Update Student Details</a></td>
		<tr>
			<td><a href="deletestudent.php">Delete Student </a></td>
		</tr>
		</table>
	</div>
</body>
</html>