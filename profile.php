<?php
    session_start();
    
?>
<?php
   $user=$_SESSION['uname'];
if (empty($user)) {
    header('location:login.php');
}
?>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "loginuser";

$con = new mysqli($dbhost, $dbuser, $dbpass, $db);
$query = "SELECT * FROM logincreds WHERE username='$user'";
$userdet = mysqli_query($con, $query);
$sql= "SELECT * FROM buyparts WHERE username='$user'";
$orderdata=mysqli_query($con,$sql);





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
     <header class="header">
        <a href="#" class="logo"><span>CarSelling</span>Website</a>

        <nav class="navbar">
            <a href="mainpage.php">Home</a>
            <a href="cars.html">Sell Cars</a>
            <a href="parts.php">Buy Parts</a>
            <a href="about.html">About Us</a>
            <a href="feedback.html">Feedback</a>
            <a href="profile.php">Profile</a>

            <a href="logout.php" class="btn-logout">Logout</a>

        </nav>
    </header>
   <div class="banner">
    
        Get All your Information Here
    
   </div>
   <div class="userdetails">
    <p>Account</p>
</div>
<div class="account">
    
    <table class="details">
            
            <tbody>
                <?php
                
              
                while ($row = mysqli_fetch_assoc($userdet)) {

                    ?>

                </tbody>
                <tr>
                    <th>FirstName</th>
                    <td>
                        <?php echo $row['firstname']; ?>
                    </td>
                </tr>
                <tr>
                    <th>Lastname</th>
                    <td>
                        <?php echo $row['lastname'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>
                        <?php echo $row['username'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <?php echo $row['email']; ?>
                        </td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>
                        <?php echo $row['phno']; ?>
                    </td>
                </tr>
        
                    
            <?php } ?>
        </table>
        </div>
         <div class="userdetails">
            <p>Orders</p>
        </div>
        <div class="account">
    <table class="details">
            
            <tbody>
                <?php
                
              
                while ($row = mysqli_fetch_assoc($orderdata)) {

                    ?>

                </tbody>
                
                <tr>
                    <th>Partname</th>
                    <td>
                        <?php echo $row['partname'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>
                        <?php echo $row['time'];
                            echo "<br>";
                        echo '--------------------------------' ;?>
                        
                    </td>
                
                </tr>
                
                
        
                    
            <?php } ?>
        </table>
        </div>
        
   

        
</body>
</html>