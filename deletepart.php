<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "";



$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);












if (isset($_POST['deleteProSet'])) {
    $productname = $_POST['deletepro'];
    $query = " DELETE FROM imagepro WHERE id ='$productname'";
    mysqli_query($conn, $query);
}




?>