<?php
	$id=$_GET['fid'];

	$con=mysqli_connect('localhost','root','','project');
		
	$query="delete from registration where f_id=$id";

	mysqli_query($con,$query);

	header('location:admin faculty delete.php');
?>