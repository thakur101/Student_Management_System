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
<style>
.admin{
	background-color:#510600;
	color:#fff;
}

		input[type=password], select {
    			width: 100%;
   			 padding: 12px 20px;
    			margin: 8px 0;
   			 display: inline-block;
   	 		border: 1px solid #ccc;
   	 		border-radius: 4px;
   	 	box-sizing: border-box;
		}
		input[type=submit] {
    			width: 100%;
    			background-color: #4CAF50;
    			color: white;
    			padding: 14px 20px;
    			margin: 8px 0;
    			border: none;
    			border-radius: 4px;
    			cursor: pointer;
		}

		input[type=number] {
    			width: 85%;
    			background-color: #4CAF50;
    			color: white;
    			padding: 14px 20px;
    			margin: 8px 0;
    			border: none;
    			border-radius: 4px;
    			cursor: pointer;
		}
		input[type=text] {
    			width: 85%;
    			background-color: #4CAF50;
    			color: white;
    			padding: 14px 20px;
    			margin: 8px 0;
    			border: none;
    			border-radius: 4px;
    			cursor: pointer;
		}
	</style>
</head>
<body>
	
	<div class="admin">
		<h5><a href="logout.php" style="float:right;margin-right:30px;color:gray;font-size:20px;">Logout</a></h5>
		<h1 align="center">Admin Dashboard<h1>
	</div>
	<form action="addstudent.php" method="POST" enctype="multipart/form-data">
		<table border="2" align="center">
			
			<tr>
				<td>Roll No</td>
				<td><input type="number" placeholder="Roll No" name="rollno" required/></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="name" placeholder="Enter Full Name" required /></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" placeholder="Enter City" required/></td>
			</tr>
			<tr>
				<td>Parents Contact</td>
				<td><input type="number" name="poon" placeholder="Your Parents Contact Number" required/></td>
			</tr>
			<tr>
				<td>Standard</td>
				<td><input type="number" name="std" placeholder="Enter your Standard" required/></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="simg" ></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="submit" value="submit" /></td>
			</tr>
	</form>
</body>
</html>	
<?php

	if(isset($_POST['submit'])){
		include('../dbcon.php');// we gave .. because we wanted to come back that is back track to reach dbcon file in our principle directory.

		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$poon=$_POST['poon'];
		$std=$_POST['std'];
		$imagename=$_FILES['simg']['name'];
		$tempname=$_FILES['simg']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$imagename");

		$sql="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rollno','$name','$city','$poon','$std','$imagename')";
		$result=mysqli_query($conn,$sql);
		
		if($result){
			?>
			<script>
				alert('Data successfully inserted');
			</script>
			<?php
		}
	}
?>

