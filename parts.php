<?php

require('connection.php');
include('bookingConfirm.php');



$sql = "SELECT * FROM parts";
$all_product = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parts</title>
    <link rel="stylesheet" href="style.css">
    <link src="script.js">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- header area -->
    <header class="header">
        <a href="parts.php" class="logo"><span>CarSelling</span>Website</a>

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

    <main>
      
        
         <!-- <div> 
        <img class="backgroundimage" src="autoparts.jpg">

        </div> -->
       
        <?php
            while($row=mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card-parts">
            <div class="image">
                <img src="parts/<?php echo $row["part_img"]; ?>" alt="">
            </div>
            <div class="caption">
                <input type="hidden" class="book_id" value=<?php echo $row["partname"]; ?>>
                <p class="title">Part Name:
                    <?php echo $row["partname"]; ?>
                </p>
                <p class="title">Price:<b>
                        <?php echo $row["price"]; ?>
                    </b></p>
                <p class="title">Vehicle Supported:
                    <?php echo $row["vehicle"]; ?>
                </p>
               
    
            </div>
            <button class="add" id="btn-book">Buy Now</button>
        </div>
        <?php
            }
        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
    
        ?>
        
    
    
    
    </main>

    <!-- <footer>
        <p>Car Selling Website</p><br>
        <p>For Any Queries Contact abc@gmail.com</p>
    </footer> -->

    <script>
    $(document).ready(function () {
        $('.add').click(function (e) { 
            e.preventDefault();
            // alert('hello');
            var bookpart = $(this).closest("div").find('.book_id').val();
            // console.log(bookpart);
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to confirm the order!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Place Order!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "bookingConfirm.php",
                        data: {
                            "buyPartSet":1,
                            "buyPart":bookpart,
                        },
                        
                        success: function (response) {
                            Swal.fire("Order Placed successfully!",{
                                icon:"success",
                            }).then((result) => {
                                location.reload();
                            });
                            
                            
                        }
                    });
                   
                }
                })
        });
    });
</script>



</body>


</html>