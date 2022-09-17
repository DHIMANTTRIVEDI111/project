<?php
	session_start();
	
	$aid=$_SESSION['fid'];

	if(!isset($aid))
	{
		header('location:Index.php');
	}
	else
	{
?>
<html>
	<head>
	<style>
		#img{
			             text-align:center;
			             padding-top:50px;
               }

	  #faculty{
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

	#menu{
			             height:100%;
			             width:200px;
			             background-color:#7575a3;
					float:left;	
		        }
		            #home{
			             height:50px;
			             width:194.1px;
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
			             top:350px;
             }
                    
		body{
			margin:0;
			padding:0;
		}
		#rmenu{
			height:calc(100vh - 5px);
			width:calc(100% - 210px);
			float:left;
			background-color:#7575a3;
			border-left:5px solid white;
			border-right:5px solid white;
		}
		#nf,#df,#vf,#lf{
			height:40px;
			width:200px;
			background-color:white;
			text-align:center;
			line-height:40px;
			font-family:verdana;
			font-size:15px;
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
			             top:350px;
             }  
		.field{
			height:40px;
			width:200px;
			background-color:white;
			text-align:center;
			line-height:40px;
			font-family:verdana;
			font-size:15px;
		}	
		a{
			font-family:verdana;
			font-size:15px;
			color:black;
			text-decoration:none;
		}	
	</style>
	<body>
		<div id="menu">
			<div id="img"><img src="faculty.png" height="100px" width="100px"/></div>
			<a href="admin_home.php"><div id="home">HOME</div></a>
			
			<a href="admin faculty menu.php"><div id="faculty">FACULTY</div></a>
			<a href="logout.php"><div id="logout">LOGOUT</div></a>
		</div>

		<div id="rmenu">
			<table border="0" align="center" cellspacing="20px">
				<tr align="center">
					<td>
						<a href="admin faculty menu.php"><div id="nf">NEW FACULTY</div></a>
					</td>
					<td>
						<a href="admin faculty delete.php"><div id="df">DELETE FACULTY</div></a>
					</td>
					<td>
						<a href="admin faculty view.php"><div id="vf">VIEW FACULTY</div></a>
					</td>
					<td>
						<a href="admin faculty leave.php"><div id="lf">LEAVE</div></a>
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<hr size="3px" color="white" width="100%"/>
					</td>
				</tr>
				<tR>
					<td colspan="4">
						<?php
							$con=mysqli_connect('localhost','root','','project');
		
							$query="select * from registration";
						
							$res=mysqli_query($con,$query);
						
						?>

						<table border="0" align="center">
							<tr>
								<td>
									<div class="field">ID</div>
								</td>
								<td>
									<div class="field">NAME</div>
								</td>
								<td>
									<div class="field">CONTACT NO</div>
								</td>
								<td>
									<div class="field">IMAGE</div>
								</td>
								<td>
									<div class="field">ACTION</div>
								</td>
							</tr>
							<?php
								while($data=mysqli_fetch_array($res))
								{
							?>
							<tr>
								<td><div class="field"><?php echo $data['f_id'];?></div></td>
								<td><div class="field"><?php echo $data['s_name']." ".$data['name'];?></div></td>
								<td><div class="field"><?php echo $data['mobile_no'];?></div></td>
								<td><div class="field"><img src="faculty photos/<?php echo $data['upload'];?>" height="40px" width="50px" id="fimg"/></div></td>
								<td><div class="field"><a href="admin faculty view more.php?fid=<?php echo $data['f_id'];?>">VIEW MORE</a></div></td>
							</tr>	
							<?php
								}
							?>
						</table>

					</td>
			
				</tr>
			</table>
		</div>
	</body>	
	
</html>

<?php
	}
?>