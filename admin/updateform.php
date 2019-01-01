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
	include('../dbcon.php');
	$sid=$_GET['sid'];
	
	$sql="SELECT * FROM student WHERE id='$sid'";
	$run=mysqli_query($conn,$sql);
	
	$data=mysqli_fetch_assoc($run);
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

	<form action="updatedata.php" method="POST" enctype="multipart/form-data">
		<table border="2" align="center">
			
			<tr>
				<td>Roll No</td>
				<td><input type="number" value=<?php echo $data['rollno'];?> name="rollno" required/ ></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td ><input type="text" name="name" value=<?php echo $data['name'];?> required /></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" value=<?php echo $data['city'];?> required/></td>
			</tr>
			<tr>
				<td>Parents Contact</td>
				<td><input type="number" name="poon" value=<?php echo $data['pcont'];?> required/></td>
			</tr>
			<tr>
				<td>Standard</td>
				<td><input type="number" name="std" value=<?php echo $data['standard'];?> required/></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="simg" ></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="hidden" name="sid" value="<?php echo $data['id'];?>" />
					<input type="submit" name="submit" value="submit" /></td>
			</tr>
	</form>
</body>
</html>

	


