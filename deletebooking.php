<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "booking";



$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);












if (isset($_POST['deletebook'])) {
    $id = $_POST['deletepro'];
    $query = " DELETE FROM book WHERE id ='$id'";
    mysqli_query($conn, $query);
}





?>