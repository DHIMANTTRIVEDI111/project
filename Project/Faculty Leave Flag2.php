<?php
	$id=$_GET['fid'];

	$con=mysqli_connect('localhost','root','','project');
		
	$query="update leave_db set flag=2 where f_id=$id";

	mysqli_query($con,$query);

	header('location:admin faculty Leave.php');
	
?>