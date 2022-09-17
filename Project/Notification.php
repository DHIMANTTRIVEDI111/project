<?php
	session_start();
	
	$fid=$_SESSION['fid'];

	if(!isset($fid))
	{
		header('location:Index.php');
	}
	else{

	$con=mysqli_connect('localhost','root','','project');

	$query="select * from leave_db where f_id=$fid and flag=1";

	$res=mysqli_query($con,$query);


?>

<html>
	<head>
	<style>
		body{
			padding:0px;
			margin:0px;
		}
		#menu{
			height:100%;
			width:200px;
			background-color:#7575a3;
			float:left;	
		}
		#home{
			height:50px;
			width:194px;
			background-color:white;
			color:black;
			text-align:center;
			line-height:50px;
			font-family:verdana;
			border:3px solid #7575a3;
			position:absolute;
			top:250px;
		}
		#leave{
			height:50px;
			width:194px;
			background-color:white;
			color:black;
			text-align:center;
			line-height:50px;
			font-family:verdana;
			border:3px solid #7575a3;
			position:absolute;
			top:300px;
		}
		#note{
			height:50px;
			width:194px;
			background-color:white;
			color:black;
			text-align:center;
			line-height:50px;
			font-family:verdana;
			border:3px solid #7575a3;
			position:absolute;
			top:350px;
		}
		#logout{
			height:50px;
			width:194px;
			background-color:white;
			color:black;
			text-align:center;
			line-height:50px;
			font-family:verdana;
			border:3px solid #7575a3;
			position:absolute;
			top:500px;
		}
		#timetable{
			height:50px;
			width:194px;
			background-color:white;
			color:black;
			text-align:center;
			line-height:50px;
			font-family:verdana;
			border:3px solid #7575a3;
			position:absolute;
			top:450px;
		}
		#img{
			text-align:center;
			padding-top:50px;
		}
		#rightp{
			height:100%;
			width:calc(100% - 200px);
			float:left;
		}
		#fimg{
			border-radius:50%;
			margin-top:-40px;
		}
		#info{
			margin-top:100px;
		}	
		#wmsg{
			font-family:verdana;
			margin-top:50px;
			color:#7575a3;
			text-shadow:-3px -1px 2px rgba(0,0,0,1);	
		}	
		#h1{
			font-family:verdana;
			margin-top:50px;
			color:#7575a3;
			//text-shadow:-3px -1px 2px rgba(0,0,0,1);	
		}	
		#sub{
			height:35px;
			width:90px;
			//border:none;
			//outline:none;
			background-color:white;
			border-radius:20px;

		}
		#atte{
			height:50px;
			width:194px;
			background-color:white;
			color:black;
			text-align:center;
			line-height:50px;
			font-family:verdana;
			border:3px solid #7575a3;
			position:absolute;
			top:400px;
		}
	</style>
	</head>
	<body>
		<div id="menu">
			<div id="img"><img src="faculty.png" height="100px" width="100px"/></div>
			<a href="faculty home.php"><div id="home">
			HOME	
			</div></a>
			<a href="fault.php"><div id="leave">LEAVE</div></a>
			<a href="Notification.php"><div id="note">NOTIFICATION</div></a>
			<a href="Faculty Attendance.php"><div id="atte">ATTENDANCE</div></a>
			<a href="Time Table.php"><div id="timetable">TIME TABLE</div></a>
			<a href="logout.php"><div id="logout">LOGOUT</div></a>
		</div>
		<div id="rightp">
			<table border="0" align="center" id="info" cellspacing="10" >

				<?php
		
					while($data=mysqli_fetch_array($res))
					{

				?>
				
				<tr>
					<td>
						<h1 id="wmsg">Your Leave Has Been Approved.</h1>
					</td>
				</tr>
				<?php
					}

					$con=mysqli_connect('localhost','root','','project');

					$query="select * from leave_db where f_id=$fid and flag=2";

					$res=mysqli_query($con,$query);

					while($data=mysqli_fetch_array($res))
					{
				
				?>
					<tr>
					<td>
						<h1 id="wmsg">Your Leave Has Been Not Approved.</h1>
					</td>
				</tr>
				<?php
					}

					$con=mysqli_connect('localhost','root','','project');

					$query="select * from registration where f_id=$fid and status='Visting Faculty'";

					$res=mysqli_query($con,$query);	

					$count=0;

					while($data=mysqli_fetch_array($res))
					{
						$rename=$data['name'];
						$count++;
					}

					if($count>0)
					{

					$con=mysqli_connect('localhost','root','','project');

					$query="select * from free_faculty where name='$rename' and flag=1";

					$res=mysqli_query($con,$query);	

					$rec=0;

					while($data=mysqli_fetch_array($res))
					{
						$ref_id=$data['ref_id'];

						$rec++;
					}

					if($rec>0)
					{
						$con=mysqli_connect('localhost','root','','project');

						$query="select * from leave_db where f_id=$ref_id and flag=1";

						$res=mysqli_query($con,$query);	

						while($data=mysqli_fetch_array($res))
						{
							
					?>
						<tr>
							<td>
								<h1 id="h1">You have a Lecture at <?php echo $data['leave_date']; ?> for Faculty ID = <?php echo $data['f_id']?>.
							</td>
						</tr>
					<?php
						}
					?>
					<tr>
					<td>
						<a href="Confirm Lecture.php?name=<?php echo $rename; ?>"><input type="submit"  value="OK" id="sub"/></a>
					</td>
				</tr>

					<?php
						}
					}

				?>
				
			</table>
		</div>
	</body>


</html>

<?php
	}
?>