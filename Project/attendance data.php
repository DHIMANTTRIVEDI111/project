<?php
	session_start();

	$fid=$_SESSION['fid'];

	$status="";

	$count=0;

	$cdate=date('d-m-Y');

	$con=mysqli_connect('localhost','root','','project');

	$query="select * from registration where f_id=$fid";

	$res=mysqli_query($con,$query);

	while($data=mysqli_fetch_array($res))
	{
		$status=$data['status'];
	}

	mysqli_close($con);

	$con=mysqli_connect('localhost','root','','project');

	$query="select * from attendance where fid=$fid and date='$cdate'";

	$res=mysqli_query($con,$query);

	while($date=mysqli_fetch_array($res))
	{
		$count++;
	}

	mysqli_close($con);
	if($count==0)
	{
		$con=mysqli_connect('localhost','root','','project');

		$query="insert into attendance(status,fid,date) values('$status',$fid,'$cdate')";

		mysqli_query($con,$query);
	}
	header('location:Faculty Attendance.php');
?>