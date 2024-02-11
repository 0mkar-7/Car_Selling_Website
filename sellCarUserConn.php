<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "images";



$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if (isset($_POST['submit_details'])) {


    $product_name = $_POST['product_name'];

    $product_price = $_POST['product_price'];

    $owner_name = $_POST['owner_name'];

    $registration_state = $_POST['registration_state'];

    $kms_driven = $_POST['kms_driven'];

    $owner_contact = $_POST['owner_contact'];

    $insurance = $_POST['insurance'];

    $product_img = $_FILES['product_img']['name'];

    $query = "INSERT INTO imagepro (product_name,price,owner_name,registration_state,kms_driven,owner_contact,insurance,product_img) VALUES ('$product_name','$product_price','$owner_name','$registration_state','$kms_driven','$owner_contact','$insurance','$product_img')";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        move_uploaded_file($_FILES["product_img"]["tmp_name"], "uploads/" . $_FILES["product_img"]["name"]);

        echo "<script>alert(' Car Added Successfully')</script>";
        echo "<script>location.replace('mainpage.php')</script>";


    } else {

        echo "<script>alert('Cannot Add Your Car')</script>";
    }
}


?>