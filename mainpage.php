<?php
session_start();
// $user = $_SESSION['uname'];
// if($user==null)
// {
//     header(location:'login.php')
// }
?>
<?php

require_once('connection.php');



$sql = "SELECT * FROM imagepro";
$all_product = mysqli_query($con, $sql);

$user=$_SESSION['uname'];
if(empty($user)){
    header('location:login.php');
}
// if(!empty($user)){
//     $user=$_SESSION['uname'];
//     echo "<script>alert($user)</script>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <link src="loginscript.js">
</head>
<body>
    

<!-- header area -->
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
<!-- main body -->
<main>
    <div> 
        <img class="backgroundimage" src="custom.png">

    </div>
    <?php
        while($row=mysqli_fetch_assoc($all_product)){
    ?>
    <div class="card">
        <div class="image">
            <img src="uploads/<?php echo $row["product_img"]; ?>" alt="">
        </div>
        <div class="caption">
            <p class="title">Car Name:<?php echo $row["product_name"]; ?></p>
            <p class="title">Price:<b><?php echo $row["price"]; ?></b></p>
            <p class="title">Owner:<?php echo $row["owner_name"]; ?></p>
            <p class="title">Registered at:<?php echo $row["registration_state"]; ?></p>
            <p class="title">KMS driven:<?php echo $row["kms_driven"]; ?></p>
            <p class="title">Owner Contact:<?php echo $row["owner_contact"]; ?></p>
            <p class="title">Id:  <?php echo $row["id"]; ?></p>

        </div>
        <button class="add" id="btn-book" onclick="booking()">Book Test Drive</button>
    </div>
    <?php
        }

    ?>
 


</main>
<footer>
    <p>Car Selling Website</p><br>
    <p>For Any Queries Contact abc@gmail.com</p>
</footer>

<script>
    function booking(){
        window.location.href="booking.php";
    }
</script>


  
    
    
</body>
</html>