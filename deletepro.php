<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "images";



$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);












if (isset($_POST['deleteProSet'])) {
    $productname = $_POST['deletepro'];
    $query = " DELETE FROM imagepro WHERE id ='$productname'";
    mysqli_query($conn, $query);
}
if (isset($_POST['deletePartSet'])) {
    $partid = $_POST['deletepart'];
    $query = " DELETE FROM parts WHERE id ='$partid '";
    mysqli_query($conn, $query);
}




?>