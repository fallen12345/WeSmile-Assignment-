<!DOCTYPE html>
<html>
<head>
 <title>Share Your Feedback</title>
   <style type="text/css">
    
    body{
      font-family: sans-serif;
      background:#F8F8FF;
      margin: 0px;
      padding: 0px;
     }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

     li {
      float: left;
    }

     li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
     }
      li a:hover {
       background-color: #111;
     }
        
    .header{
      background-color: #fff #dbe2e8 ;
      text-align: center;
     }
    .header h1{
      display: inline-block;
      text-transform: uppercase;
      border-bottom: 2px solid #2c3e50;
      font-size: 25px;
      padding-bottom: 20px;
      margin-top: 25px;
     }
    
    form{
      
      margin: 0px auto;
      padding: 10px;
      background:transparent;
      border-radius:0px 0px 10px 10px;
    }
   .input-group{
      margin:20px 10px 10px 0px;
       position: center;
       width: 50%
    }
   .input-group label{
      display:block;
      text-align:left;
      margin:10px;
    }
   .input-group input{
      height:30px;
      width:93%;
      padding:5px 10px;
      font-size:16px;
      border-radius:5px;
      border:1px solid gray;
     }
    .box{
       margin:20px 10px 10px 0px;
       position: center;
        
       }
    .btn{
         background: transparent;
         border: none;
         outline: none;
         color: white;
         background: #03a9f4;
         padding: 10px 20px;
         
         cursor: pointer;
         border-radius: 5px;;
         box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
         width: 30%
    }
  
    </style>
    </head>
    <body>
        <ul>
        <li><a href="main.php">WeSmile</a></li>
        <li><a href="main.php">Home</a></li>
        <li><a href="story.php">Check Out Stories</a></li>
        <li><a href="displayfb.php">Feedback</a></li>
        </ul>
        <div class="header">
            <h1>Share Your Feedback</h1>
        </div>
        <div align="center">
        <form method="post" action="server.php";>
            <div class="input-group">
            <label>Nickname</label>
            <input type="text"placeholder="Enter Nickname" name="nick"required="">
            </div>
            <div class="input-group">
            <label>Feedback</label>
            <input type="text"placeholder="Enter Feedback" rows="5" name="feedback"required="">
              
            </div>
            <div class="input-group">
            
            <label>Date</label>
             <input type="date" name="date"required="">
             </div>

            
            
            <div class="input-group">
            <button type="submit" name="submit" class="btn">Submit</button>    
            </div>
             <?php
                    if(isset($_GET['success']))
                    {
                        echo"<p style='color:green;'>Submit Success</p>";
                    }
                ?>
            </form>
        </div>
    </body>
</html>
