<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "loginuser";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$adminid = $_POST['admin_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM adminlogin WHERE admin_id='$adminid' AND password='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if ($adminid=="" && $password=="") {
    header('location:adminlogin.html');
}
if ($row['admin_id'] == $adminid && $row['password'] == $password) {
    
    header('location:dashboard.php');
    $_SESSION['aname'] = $row['admin_id'];

} else {
    echo "<script>alert('Wrong Credentials')</script>";
    echo "<script>location.replace('adminlogin.html')</script>";


}
?>