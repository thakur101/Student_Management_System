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
</head>
<body>
	<div class="admin"> 
		<h5><a href="logout.php" style="float:right;margin-right:30px;color:gray;font-size:20px;">Logout</a></h5>
		<h1>Admin Dashboard<h1>
	</div>
	<table>
	<form action="deletestudent.php" method="POST">
		<tr>
			<th>Enter Standard</th>
			<td><input type="number" name="standard" placeholder="Enter Your Standard" required /></td>
		</tr>
		<tr>
		<th>      Enter student Name</th>
		<td><input type="text" name="stuname" placeholder="Enter Student Name" required/></td>
		</tr>
		<tr>
		<td colspan="2"><input type="submit" name="submit" value="submit" /></td>
	</tr>
	</form>
	</table>
	
	<table align="center" width="60%" border="2" style="margin-top:30px">
		<tr style="background-color:#000; color:#fff;">
			<th>No</th>
			<th>Image</th>
			<th>Name</th>
			<th>Rollno</th>
			<th>Edit</th>
		 </tr>
	<?php
		if(isset($_POST['submit'])){	
			include('../dbcon.php');
			$standard=$_POST['standard'];
			$name=$_POST['stuname'];

			$sql="SELECT * FROM student WHERE standard='$standard' AND name LIKE '%$name%'";
			$run=mysqli_query($conn,$sql);
	
			if(mysqli_num_rows($run)<1){
				echo "<tr><td colspan='5'>No Records Found</td></tr>";
			}
		
			else{
				$count=0;
				while($data=mysqli_fetch_assoc($run)){
					$count++;
					?>
				<tr>
					<td><?php echo $count ?></td>
					<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px" /></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno']; ?></td>
					<td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
				</tr>
	
			<?php
		}
	      }
	  }
	?>
	</table>
</body>
</html>

	

			
