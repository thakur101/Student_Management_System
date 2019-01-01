<?php

$conn=mysqli_connect('localhost','root','','sms');

if($conn==true){
	echo"Connected";
	}
else{
	echo"not connected";
	}
?>