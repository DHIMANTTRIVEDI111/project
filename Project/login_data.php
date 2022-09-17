<?php
	session_start();

	$name=$_POST['uname'];
	$pass=$_POST['upass'];
	$st=$_POST['status'];

	$count=0;

	$connect=mysqli_connect('localhost','root','','project');

	if($st=="Admin")
	{
		$query="select * from admin_details where user_name='$name' and password='$pass'";
		$res=mysqli_query($connect,$query);

	while($data=mysqli_fetch_array($res))
	{
	/*	echo $data['user_id'].'<br>';
		echo $data['user_name'].'<br>';
		echo $data['password'].'<br>';
		echo $data['user_type'].'<br>';
	*/
		$count++;

		$_SESSION['fid']=$data['user_id'];
	}
	}
	else
	{
		$query="select * from registration where email='$name' and password='$pass' and flag=1";

		$res=mysqli_query($connect,$query);

	while($data=mysqli_fetch_array($res))
	{
	/*	echo $data['user_id'].'<br>';
		echo $data['user_name'].'<br>';
		echo $data['password'].'<br>';
		echo $data['user_type'].'<br>';
	*/
		$count++;

		$_SESSION['fid']=$data['f_id'];
	}
	}
	
	if($count==1)
	{
		if($st=='Admin')
		{
			header('location:admin_home.php');
		}
		else
		{
			
			header('location:faculty home.php');
		}
	}
	else
		header('location:Index.php');
?>