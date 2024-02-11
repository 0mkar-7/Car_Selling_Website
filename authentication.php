<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="loginuser";

$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM logincreds WHERE username='$username'AND password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($username=="" && $password=="")
{
	
	header('location:login.php');
}
if($row['username']==$username && $row['password']==$password){
		$_SESSION['uname'] = $row['username'];
		header('location:mainpage.php');

}else{
	echo "<script>alert('Wrong Credentials')</script>";
	echo "<script>location.replace('login.php')</script>";


}
?>