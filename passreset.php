<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "loginuser";
// try{
// connection

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
if (isset($_POST['btn-reset'])) {

$email = $_POST['email'];
$password=$_POST['password'];

$qry = "SELECT * FROM logincreds WHERE email='$email'";
$res = mysqli_query($conn, $qry);
$exist = mysqli_fetch_assoc($res);
$updateqry="UPDATE logincreds SET password='$password' WHERE email='$email'";


if ($exist < 1) {
        echo "<script>alert('Account doesn't Exists with that Email!')</script>";
        // echo "<script>console.log('4')</script>";

        echo "<script>location.replace('resetpassword.php')</script>";


    } 
else{
    $updateqryrun=mysqli_query($conn,$updateqry);
    echo "<script>alert('Password reset Successfull!')</script>";
    echo "<script>location.replace('login.php')</script>";



}
}


?>