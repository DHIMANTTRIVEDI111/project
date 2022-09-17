<?php
	$sname=$_POST['Surname'];
	$name=$_POST['fname'];
	$address=$_POST['uaddress'];
	$status=$_POST['status'];
	$email=$_POST['uemail'];
	$password=$_POST['upass'];
	$cpassword=$_POST['cpass'];
	$mobile=$_POST['mobile'];
	$file=$_FILES['fn']['name'];

	$path="faculty photos/".$file;
	
	if($password==$cpassword)
	{

		$con=mysqli_connect('localhost','root','','project') or die('con');


		$query="insert into registration(s_name,name,address,status,email,password,c_password,mobile_no,upload,flag) values('$sname','$name','$address','$status','$email','$password','$cpassword','$mobile','$file',0)";

		mysqli_query($con,$query) or die('query');

		move_uploaded_file($_FILES['fn']['tmp_name'],$path);

		if($status=="Visting Faculty"){
			
			$query="insert into free_faculty(name,ref_id,flag) values('$name',0,0)";

			mysqli_query($con,$query) or die('query');
		}


		header('location:Index.php');
	}
	else
	{
		header('location:faculty re.html');
	}
?>