<?php
session_start();
include('dbcon.php');
if(isset($_POST['login']))
    {
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	
	$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($run);

	if($row<1)
	   {
		?>
		<script>
		alert('Username and Password did not match');
		window.open('login.php',_self);
		</script>
		<?php
	   }
	else
	   {
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		
		$_SESSION['uid']=$id;
	   }
	}
?>
<?php
		if(isset($_SESSION['uid'])){
		session_start();
		header('location:admin/admindash.php');	
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Admin Login</title>
	<style>
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
	</style>
</head>
<body>
	<form action="login.php" method="POST">
		<div align="center">
			<h1 align="center" style="color:green">Admin Login</h1>
			<table border="1" width="300">
			<tr>
			<td width=60%><input type="text" name="uname" placeholder="Username" required /></td>
			</tr>
			<tr>
			<td><input type="password" placeholder="Password" name="pass" required /></td>
			</tr>
			<tr>
			<td><input type="submit" name="login" value="login"/></td>
			</tr>
			</table>
		</div>
	</form>
</body>
</html>
