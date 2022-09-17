<!DOCTYPE html>
<html>
<head>
	<style>
        body{
            margin: 0px;
            padding: 0px;
        }
        #title{
            height:80px;
            width: 500px;
            background-color:#7575a3;
            text-align: center;
            line-height: 80px;
            color: white;
            font-family: verdana;
            position: absolute;
            top:50px;
            left:0;
            right:0;
            bottom: 0;
            margin: 0 auto;
            border-radius: 20px 20px 0px 0px;
            
        }
        table{
            width:500px;
            border-right: 1px solid #7575a3;
            border-left: 1px solid #7575a3;
            border-bottom: 1px solid #7575a3;
            font-family: verdana;
            position: absolute;
            top:130px;
            left:0;
            right:0;
            bottom: 0;
            margin: 0 auto;
            box-shadow: 5px 5px 65px #444;
        }
        #date{
            height: 30px;
            width:200px;
            padding-left: 5px;
            outline: none;
        }
        #reason{
            height: 200px;
            resize: none;
            padding-left:5px;
        }
        #ok{
            height: 30px;
            border-radius: 15px;
            outline: none;
            border: none;
            width: 80px;
           background-color: white;
            border: 1px solid #7575a3;
            margin-right: 20px;
        }
        #cancel{
            height: 30px;
            width: 80px;
             border-radius: 15px;
            outline: none;
            border: none;
             background-color: white;
            border: 1px solid #7575a3;
        }
        #menu{
			height:100%;
			width:200px;
            position: absolute;
			background-color:#7575a3;	
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
		#img{
			text-align:center;
			padding-top:50px;
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
			<a href="faculty home.php"><div id="home">HOME</div></a>
			<a href="fault.php"><div id="leave">LEAVE</div></a>
			<a href="Notification.php"><div id="note">NOTIFICATION</div></a>
			<a href="Faculty Attendance.php"><div id="atte">ATTENDANCE</div></a>
			<a href="Time Table.php"><div id="timetable">TIME TABLE</div></a>
			<a href="logout.php"><div id="logout">LOGOUT</div></a>
		</div>	
    
    
    <center>
    <div id="title">
    
        Faculty Leave Application
    
    
    </div>
    </center>
    
	<form action="leave_data.php" method="post">
		<table border="0" align="center" cellspacing="20px">	
            <tr>
                <td align="center">
                    Leave Date :
                </td>
                <td align="center">
                    <input type="date" id="date" name="ldate" />
                </td>
            </tr>
            <tr align="center">
				<td colspan="2">
					<textarea rows="7" cols="50" id="reason" name="reason" placeholder="Reason:"></textarea>
				</td>
            </tr>
            
					
			<tr>
                <td align="center" colspan="2">
                    <input type="submit" value="OK" id="ok"/><input type="button" value="Cancel" id="cancel"/>
                </td>
			</tr>
					
		</table>
	</form>
</body>
</html>
