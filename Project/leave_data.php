<?php
	session_start();

	$fid=$_SESSION['fid'];

	$ldate=$_POST['ldate'];
	$reason=$_POST['reason'];

	$cdate=date('Y-m-d');

	if($cdate>=$ldate OR $reason==""){

		header('location:Not Valid Date.php');
}
else{

	
	$con=mysqli_connect('localhost','root','','project') or die('con');
	
	$query="insert into leave_db(f_id,leave_date,reason,flag) values($fid,'$ldate','$reason',0)";

	mysqli_query($con,$query) or die('query');
		
	header('location:fault.php');
}
?>