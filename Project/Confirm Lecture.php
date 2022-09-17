<?php
	$name=$_GET['name'];

	$con=mysqli_connect('localhost','root','','project');

	$query="update free_faculty set flag=0 where name='$name'";

	mysqli_query($con,$query);

	header('location:Notification.php'); 
?>