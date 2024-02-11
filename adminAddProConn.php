<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "images";



$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if (isset($_POST['submit_details'])) {


    $part_name = $_POST['partname'];

    $price = $_POST['partprice'];

    $vehicle = $_POST['vehicle'];

    

    

    $part_img = $_FILES['partimg']['name'];

    $query = "INSERT INTO parts (partname,price,vehicle,part_img) VALUES ('$part_name','$price','$vehicle','$part_img')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        move_uploaded_file($_FILES["partimg"]["tmp_name"], "parts/" . $_FILES["partimg"]["name"]);

        echo "<script>alert(' Part Added Successfully')</script>";
        echo "<script>location.replace('adminParts.php')</script>";


    } else {

        echo "<script>alert('Cannot Add Part')</script>";
    }
}


?>