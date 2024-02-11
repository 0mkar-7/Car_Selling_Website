<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "begin";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);


$image = $_FILES['image'];

$sql = "INSERT INTO data ()VALUES()'";
$result = mysqli_query($conn, $sql);
if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    move_uploaded_file($file_tmp, "upload/" . $filename);

}
?>