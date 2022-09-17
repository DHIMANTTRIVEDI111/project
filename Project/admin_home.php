<?php
	session_start();
	
	$aid=$_SESSION['fid'];

	if(!isset($aid))
	{
		header('location:Index.php');
	}
	else
	{
	$con=mysqli_connect('localhost','root','','project');

	$query="select * from admin_details where user_id=$aid";

	$res=mysqli_query($con,$query);
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
		body{
			margin:0;
			padding:0;
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
	</style>
        <body>
               
            
                <div id="menu">
			<div id="img"><img src="faculty.png" height="100px" width="100px"/></div>
			<a href="admin_home.php"><div id="home">HOME</div></a>
			<a href="admin faculty menu.php"><div id="faculty">FACULTY</div></a>
			<a href="logout.php"><div id="logout">LOGOUT</div></a>
		</div>
		<div id="rightp">
			<table border="0" align="center" id="info" cellspacing="10" >

				<?php
		
					while($data=mysqli_fetch_array($res))
					{
				?>
				<tr align="center">
					<td>
						<img src="sirbptiimg.jpg" id="fimg"  height="200" width="200"/>
					</td>
				</tr>
				<tr>
					<td>
						<h1 id="wmsg">Welcome <?php echo $data['user_name']; ?>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
     	</body>
</html>

<?php
	}
	
?>