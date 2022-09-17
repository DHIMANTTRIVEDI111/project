<?php
	session_start();
	
	$fid=$_SESSION['fid'];

	if(!isset($fid))
	{
		header('location:Index.php');
	}
	else{
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
			position: fixed;
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
			margin-left: 200px;
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
			<table align="center" border="0" cellspacing="50px">
				<tr>
					<td>
						<img src="Time Tabe\Div A.png"/>
					</td>
				</tr>
				<tr>
					<td>
					<img src="Time Tabe\Div B.png"/>
					</td>
				</tr>
				<tr>
					<td>
					<img src="Time Tabe\Div C.png"/>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
<?php
	}
?>

