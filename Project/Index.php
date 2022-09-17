<html>
	<head>
		<title></title>
		
		<style type="text/css">

			#rbtn{
				position:absolute;
				top:10;
				right:50;
				text-decoration:none;
				color:white;
				font-family:verdana;
				font-size:15px;
				height:30px;
		width:100px;
		background-color:#7575a3;
		border-radius:30px;
		text-align:center;
		line-height:30px;
			}
			#uname{

				height:30px;
				width:200px;
				border-radius:30px;
				border:none;
				padding-left:15px;
				outline:none;
			}
			#upass{
				outline:none;
				height:30px;
				width:200px;
				border-radius:30px;
				border:none;
				padding-left:15px;
			}
			#user{
				outline:none;
				height:30px;
				width:200px;
				border-radius:30px;
				border:none;
				padding-left:15px;
			}

			#btnsub{

				outline:none;
				height:30px;
				width:100px;
				border-radius:30px;
				border:none;
				background-color:white;
			}
			div{
			height:120px;
			width:200px;
			margin-top:180px;
			margin-left:600px;
			
			font-size:30px;
			font-family:Bauhaus 93 black;
			color:white;
			padding-top:80px;
			text-align:center;
			transition:all 0.5s ease;
		}
		/*div:hover{
			border-radius:100px;
			-webkit-transform:rotate(360deg),scale(1.5);
			background-color:;
			background-image:url(i2.jpg);
			background-size:cover;
		}*/
		body{
			scrollbar-face-color:#ff0000;
			background-image:url(sirbptiimg.jpg);
			background-size:100% 100%;
			background-repeat:no-repeat;
			
			}
			
			.aa{
				width:300px;
				height:auto;
				background-color:;
				margin:0 auto;
				margin-top:90px;
				padding-top:10px;
				padding-bottom:10px;
				padding-left:0px;
				border-radius:15px;
				-webkit-border-radius:15px;
				-o-border-radius:15px;
				-moz-border-radius:30px;
				color:white;
				font-weight:bolder;
				box-shadow: 0px 0px  30px  black;
				font-size:18px;
				
				
				}
			/*.aa input[type="text"]{
				width:200px;
				height:35px;
				border:0;
				-webkit-border-radius:5px;
				-o-border-radius:5px;
				-moz-border-radius:5px;
	
				background-color:;
				}
					.aa input[type="text"]:hover{
				color:yellow;
				border-radius:25px;

				*/
							
		background-color:skyblue;	 
			
			background-size:cover;	
			transition:all 2s;

				}
		/*	.aa input[type="password"]{
				width:200px;
				height:35px;
				border:0;
				border-radius:5px;
				-webkit-border-radius:5px;
				-o-border-radius:5px;
				-moz-border-radius:5px;
				padding-left:5px;
				background-color:white;
			}
				
				.aa input[type="password"]:hover{
				color:red;
				border-radius:25px;
			
		background-color:skyblue;	 
			
			background-size:cover;	
			transition:all 2s;
			}
				
			.aa input[type="submit"]
				{
					width:100px;
					height:35px;
					padding-left:5px;
					border:0;
					border-radius:5px;
					
				
				border-radius:10px;
				-webkit-border-radius:5px;
				-o-border-radius:5px;
				-moz-border-radius:5px;
				background-color:skyblue;
				font-weight:bolder;
				transition:all 10s;
				
				}
					
				.aa input[type="submit"]:hover{
				color:green;
				border-radius:25px;
			
		background-color:skyblue;	 
			
			background-size:cover;	
			transition:all 10s;
			}
					
					.aa input[type="email"]{
				width:200px;
				height:35px;
				border:0;
				border-radius:5px;
				-webkit-border-radius:5px;
				-o-border-radius:5px;
				-moz-border-radius:5px;
				padding-left:5px;
				background-color:;
				font-color:saffron;

				}
					.aa input[type="email"]:hover
				{
				color:#ff00ff;
				border-radius:25px;
			
		background-color:skyblue;	 
			
			background-size:cover;	
			transition:all 2s;
			*/
		
			
			
		</style>
				

	</head>
		<body>
				
			<script>"type=text/language">
				
			
			</script>
				
			<a id="rbtn" href="faculty re.html">SIGN UP</a>

			<div class="aa">
			
		<form action="login_data.php" method="post">
			<img src="logo.gif" height="70px" width="70px"/><h3 style="color:gray; ">AUTOMATIC MUSTER GENERATION</h3>
			<input type="text" id="uname" name="uname" placeholder="please enter username..." required><br><br>
			<input type="password" id="upass" name="upass" placeholder="please enter password..."required><br><br>
			<select id="user" name="status">
				<option>Admin</option>
				<option>Faculty</option>
			</select>
			<br><br>
			<input type="submit" id="btnsub" value="Login"/>
		
			
		</form>
			</div>
</html>