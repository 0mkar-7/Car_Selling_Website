<?php
session_start();
?>
<?php



    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db ="loginuser";
    date_default_timezone_set('Asia/Kolkata');


    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);


    $name = $_SESSION['uname'];
    $time = date('d-m-Y-H:s');
    
 
    

    
    






if(isset ($_POST['buyPartSet']))
{
    $partname = $_POST['buyPart'];
    $query = "INSERT INTO buyparts (username,partname,time) VALUES ('$name','$partname','$time')";
    mysqli_query($conn, $query);
}




?>