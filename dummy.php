<?php

require_once('connection.php');



$sql = "SELECT * FROM imagepro";
$all_product = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <link src="loginscript.js">
</head>
<body>

<!-- header area -->
<header class="header">
    <a href="#" class="logo"><span>CarSelling</span>Website</a>

    <nav class="navbar">
        <a href="mainpage.php">Home</a>
        <a href="cars.html">Sell Cars</a>
        <a href="parts.html">Buy Parts</a>
        <a href="about.html">About Us</a>
        <a href="feedback.html">Feedback</a>

    </nav>
</header>
<!-- main body -->
<main>
    <div> 
        <img class="backgroundimage" src="custom.png">

    </div>
    <?php
    if (isset($_POST['bookBtn'])) {

        $name = $row["product_name"];
        $priceins = $row["price"];
        $ownerins = $row["owner_name"];
        $regins = $row["registration_state"];
        $kmsins = $row["kms_driven"];
        $conins = $row["owner_contact"];
        $insuranceins = $row["insurance"];


        $query = "INSERT INTO booking (product_name,price,owner_name,registration_state,kms_driven,owner_contact,insurance) VALUES ('$name','$priceins','$ownerins','$regins','$kmsins','$conins','$insuranceins')";
        $query_run = mysqli_query($con, $query);
        if ($query_run) {

            echo "<script>alert(' Booking Successfull')</script>";
            echo "<script>location.replace('dummy.php')</script>";


        } else {

            echo "<script>alert('Please Try Again')</script>";
        }
    }
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        while($row = mysqli_fetch_assoc($all_product));
{
    ?>
    <div class="card">
        <div class="image">
            <img src="uploads/<?php echo $row["product_img"]; ?>" alt="">
        </div>
        <div class="caption">
            <p class="product_name">Car Name:<?php echo $row["product_name"]; ?></p>
            <p class="price">Price:<b><?php echo $row["price"]; ?></b></p>
            <p class="owner_name">Owner:<?php echo $row["owner_name"]; ?></p>
            <p class="reistration_state">Registered at:<?php echo $row["registration_state"]; ?></p>
            <p class="kms">KMS driven:<?php echo $row["kms_driven"]; ?></p>
            <p class="owner-contact">Owner Contact:<?php echo $row["owner_contact"]; ?></p>
            <p class="insurance">Insurance:<?php echo $row["insurance"]; ?></p>

        </div>
        <button class="add" id="btn-book" name="bookBtn">Book Test Drive</button>
        

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