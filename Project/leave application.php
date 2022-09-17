<html>

    <head>
    <style>
        #t1{
            height: 100px;
            width: 500px;
              border-right: 1px solid #7575a3;
            border-left: 1px solid #7575a3;
           
            font-family: verdana;
            box-shadow: 5px -45px 65px #444;
        }    
        #t2{
            height: 100px;
            width:500px;
            top:50px;
            left:0;
            right:0;
            bottom: 0;
            margin: 0 auto;
            border-right: 1px solid #7575a3;
            border-left: 1px solid #7575a3;
            box-shadow: 5px 5px 65px #444;
            font-family: verdana;
            border-bottom: 1px solid #7575a3;
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
            margin-top: 130px;
            font-family:verdana;
            width:500px;
          
            
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
         #submit{
            height: 30px;
            border-radius: 15px;
            outline: none;
            border: none;
            width: 80px;
           background-color: white;
            border: 1px solid #7575a3;
            margin-right: 20px;
        }
        #lec{
            height: 30px;
            width:100px;
            padding-left: 5px;
            outline: none;
        }
           #sem{
            height: 30px;
            width:80px;
            padding-left: 5px;
            outline: none;
        }
           #time{
            height: 30px;
            width:120px;
            padding-left: 5px;
            outline: none;
        }
        </style>
    </head>
    
    <body>
        
         <div id="title">
    
         Lecture Management
    
    
    </div>
    
        <table align="center" border="0" id="t1">
          
            <tr align="center" id="r2">
                <td> 
                    Number Of Lecture :
                </td>
                <td>
                    <select id="lec">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </td>
                <td>
                    <input type="submit" value="OK" id="ok" />
                </td>
            </tr>
        
        </table>
        
        
        <table border="0" align="center" id="t2">
            <tr>
                <td>
                    Select Semester : <select id="sem"> 
                    
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                </td>
                <td>
                    Time : <select id="time">
                                <option>7:20 TO 8:20</option>
                                <option>8:20 TO 9:20</option>
                                <option>9:30 TO 10:30</option>
                                <option>10:30 TO 11:30</option>
                                <option>11:30 TO 12:30</option>
                                <option>12:30 TO 1:30</option>
                                
                            </select>
                </td>
            </tr>
            <tr align="center" >
                <td colspan="2"><input type="submit" value="SUBMIT" id="submit"/></td>
            </tr>
        </table>
    
    </body>
</html>