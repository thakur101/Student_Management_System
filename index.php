<Doctype html>
<html>

<head>
<title>Student Management System</title>
<style>

input[type=number], select {
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

body  {
    background-image: url("");
    
}
</style>
</head>

<body>
<div align="center">
	<h1><a href="login.php">ADMIIN LOGIN</a></h1>
	<form method="POST" action="index.php" >
		<table style="width:50%" border="2" >
		<tr><td colspan="2" align="center"style="background-color:blue">Student Details</td></tr>
		<tr>
			<td align="right" style="color:red" >Choose Standard</td>
			<td>
				<select name="std" required >
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
					<option value="8">8th</option>
					<option value="9">9th</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right" style="color:red">Enter Roll No</td>
			<td><input type="number" name="rollno" required /></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="show info"/></td>
		</tr>
		</table>
	</form>
</div>
</body>
</html>	

<?php

if(isset($_POST['submit'])){
	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];

	include('dbcon.php');
	include('function.php');

	showdetails($standard,$rollno);
	
	}
?>

				
		
