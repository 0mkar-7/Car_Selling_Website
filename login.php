
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <script  src="loginscript.js"></script>
    <title>Login</title>
</head>
<body>
    <form method="post" action="authentication.php">
    <center>
        <div class="login-elements">
            <h1>LOGIN</h1>
    
   UserName:  <input type="text" class="input" name="username" placeholder="Enter UserName" required><br><br>
   Password :   <input type="password" class="input" name="password" placeholder="Enter Password" required><br><br>
  
   <button id="user-submit" class="btn">Login</button>
   
        </div><br><br>
        <div id="register">
            Not a User ?<a href="register.html"> Register</a><br>
            Login as admin?<a href="adminlogin.html">Admin</a><br>
            <a href="resetpassword.php">Reset Password</a>
            
        </div>
   </center>
</form>

    
    
</body>
</html>