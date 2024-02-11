<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <script src="loginscript.js"></script>
    <title>Reset Password</title>
</head>

<body>

    <form method="post" action="passreset.php">
        <center>
            <div class="login-elements">
                <h1>RESET PASSWORD</h1>
                Email ID : <input type="email" class="input" name="email" placeholder="Enter Your email ID"
                    required><br><br>


                Password : <input type="password" class="input" name="password" placeholder="Enter New Password"
                    required><br><br>
               
               




                <button id="reset" name="btn-reset" class="btn-admin">Reset</button>
            </div>
            <a href="login.php">Go back to Login page</a>
        </center>



</body>

</html>