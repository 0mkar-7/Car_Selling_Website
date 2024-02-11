<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "booking";



$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
if (isset($_POST['submit_details'])) {

    $name = $_POST['flname'];
    
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $carid = $_POST['carid'];

    $query = "INSERT INTO book (name,contact,email,address,carid) VALUES ('$name','$contact','$address','$email','$carid')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {

        echo "<script>alert(' Booking Successful')</script>";
        echo "<script>location.replace('mainpage.php')</script>";




    } else {

        echo "<script>alert('Please Try Again!')</script>";
        echo "<script>location.replace('booking.php')</script>";

    }
}


?>