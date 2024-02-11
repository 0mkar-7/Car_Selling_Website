<?php

require_once('connection.php');



$sql = "SELECT * FROM parts";
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
        <a href="parts.php">Buy Parts</a>
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
        while($row=mysqli_fetch_assoc($all_product)){
    ?>
    <div class="card">
        <div class="image">
            <img src="parts/<?php echo $row["part_img"]; ?>" alt="<?php echo $row["partname"]; ?>">
        </div>
        <div class="caption">
            <p class="title">Car Name:<?php echo $row["partname"]; ?></p>
            <p class="title">Price:<b><?php echo $row["price"]; ?></b></p>
            <p class="title">Owner:<?php echo $row["vehicle"]; ?></p>


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