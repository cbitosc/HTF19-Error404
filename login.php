<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        body{
             background-size: cover;
        }
        .aa{
            width:300px;
            height:280px;
            background-color: rgba(0,0,0,0.5);
            margin:0 auto;
            margin-top: 40px;
            padding-top:10px;
            padding-left: 50px;
            border-radius: 50px;
            -webkit-border-radius:50px;
            -o-border-radius:15px;
            -moz-border-radius:15px;
            color:red;
            font-weight:border;
         }

        .aa input[type="text"]
        {
            width:200px;
            height:35px;
            border=0;
            border-radius: 5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
           
        }
       
        .aa input[type="password"]
        {
            width:200px;
            height:35px;
            border=0;
            border-radius: 5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
           
        }
        .aa input[type="submit"]
        {
         background-color: red;
        }
    </style>
</head>
<body>
    
  <div class="aa">
      <img src="https://tinhouse.com/wp-content/uploads/2013/10/brain-questions.jpg" position=middle width=35 height=35 allign="center">
   <h2>Login</h2>
      
   <form method="post" action="validone.php" >
       
    <input type="text" name="user" placeholder="please Enter username.."><br><br>
    <input type="password" name="pass" placeholder="please enter password..."><br><br>
    not registered yet?:<a href="register.php">register now!</a><br><br>
    <input type="submit" value="Login">
   </form>
 </div>
</body>
</html>