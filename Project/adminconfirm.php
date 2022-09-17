<?php
	session_start();
?>

<html>
    <head>
            <style>
                 body{
            margin: 0px;
            padding: 0px;
        }
                    #mainw{
                        height: 100px;
                        width: 500px;
                        border-right: 1px solid #7575a3;
                        border-left: 1px solid #7575a3;
                        border-top: 1px solid #7575a3;
                
                        font-family: verdana;
                        position: absolute;
                        top:130px;
                        left:0;
                        right:0;
                        bottom: 0;
                        margin: 0 auto;
                         box-shadow: 0px 0px 5px #444;
            
            
                }   
                    #main{
                        height: 100px;
                        width: 500px;
                        border-right: 1px solid #7575a3;
                        border-left: 1px solid #7575a3;
                         border-top: 1px solid #7575a3;
                        border-bottom: 1px solid #7575a3;
                
                         font-family: verdana;
                        position: absolute;
                        top:230px;
                        left:0;
                        right:0;
                        bottom: 0;
                        margin: 0 auto;
                         box-shadow: 0px 0px 5px #444;
                    
                }  
                    #menu{
			             height:100%;
			             width:200px;
			             background-color:#7575a3;	
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
			             top:300px;
		      }
                    #att{
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
			             top:400px;
		      }
		              #img{
			             text-align:center;
			             padding-top:50px;
               }
        
            </style>
    </head>
        <body>
               
            <form>
                <div id="menu">
			<div id="img"><img src="faculty.png" height="100px" width="100px"/></div>
			<div id="home">
			HOME
			</div>
            <div id="att">ATTENDANCE</div>
			<div id="leave">LEAVE</div>
			<div id="note">NOTIFICATION</div>
		
		</div>
                
                <table align="center" border="0" id="mainw">
                     <tr>
                    <td colspan="2">
                        <font size="3">Demo has send leave application and in this time free faculty demo2 is attend this lecture?</font>
                         </td>
            
                    </tr>
                        
                        
                </table>
                        <table align="center"  id="main">
                             <tr align="center">
                            <td align="center">
                            Confirm Leave Application
                            </td>
                        </tr>
                                <tr>
                                    <td align="center">
                                        Yes <input type="radio" name="msg" id="yes"/>
                                        No <input type="radio" name="msg" id="no"/>
                                       
                                    </td>
                                </tr>
                        <tr align="center">
                                        <td colspan="3" align="center">
                                                Confirm Lecture
                                            
                                         </td>
                            </tr>
                                <tr>
                                <td colspan="3" align="center">
                                 Yes <input type="radio" name="msg" id="yes"/>
                                 No <input type="radio" name="msg" id="no"/>
                                
                            </td>
                        </tr>
                        </table>
            </form>
      </body>
</html>