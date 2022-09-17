<?php
	$id=$_GET['fid'];

	$con=mysqli_connect('localhost','root','','project');
		
	$query="update registration set flag=1 where f_id=$id";

	mysqli_query($con,$query);

	header('location:admin faculty menu.php');
	
?>