<?php
	$id=$_GET['fid'];

	$free_faculty=$_POST['freefaculty'];

	$con=mysqli_connect('localhost','root','','project');
		
	$query="update free_faculty set flag=1,ref_id=$id where name='$free_faculty'";

	mysqli_query($con,$query);


	header('location:admin faculty Leave.php');
?>