



<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass= "";
$db="loginuser";
// try{
// connection

$conn= new mysqli($dbhost, $dbuser, $dbpass, $db);


if (isset($_POST['btn-register'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];


    $qry="SELECT * FROM logincreds WHERE email='$email'";
    $res=mysqli_query($conn,$qry);
    $exist=mysqli_fetch_assoc($res);
    $sqlqry="SELECT * FROM logincreds WHERE username='$username'";
    $resuser=mysqli_query($conn,$sqlqry);
    $confirm=mysqli_fetch_assoc($resuser);
    
    $query = "INSERT INTO logincreds (username,password,firstname,lastname,email,phno) VALUES ('$username','$password','$firstname','$lastname','$email','$phno')";

    if($exist>0){
        echo"<script>alert('Account already Exists with that Email!')</script>";
        echo "<script>location.replace('login.php')</script>";
    }
    elseif($confirm>0){
        echo "<script>alert('Account already Exists with that Username!')</script>";
        echo "<script>location.replace('login.php')</script>";

    }
    else {
    
    





            $sqlquery = mysqli_query($conn, $query);
            echo "<script>alert('Account Registered Successfully!')</script>";
            echo "<script>location.replace('login.php')</script>";
    }
  

    // echo"conected successfully!";
// }
// catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
} else {

    echo "<script>alert('Cannot Register')</script>";
    echo "<script>location.replace('register.html')</script>";

} 




?>

