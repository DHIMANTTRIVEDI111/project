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
		#rpanel{
			float: left;
			height: 100px;
			width: 400px;
			background-color: #7575a3;
			position: absolute;
			top:50%;
			left: 50%;
			transform: translate(-50%,-50%);
			box-shadow: 10px 10px 5px silver;
		}
		#rpanel table{
			margin-top: 30px;
			color: white;
			font-size: 18px;
			font-family: verdana;
		}
		#btnsub{
			height: 40px;
			width: 100px;
			border-radius: 40px;
			background-color: white;
			border: none;
			outline: none;
			margin-left: 10px;
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

		<div id="rpanel">
			<table border="0" align="center">
				<form action="attendance data.php" method="post">
				<tr>
					<td>
						PRESENT AT : <?php echo date('d-m-Y');?>	
					</td>
					<td align="center">
						<input type="submit" value="SUBMIT" id="btnsub"/>
					</td>
				</tr>
				</form>
			</table>
		</div>
	</body>

</html>
<?php

	}

?>