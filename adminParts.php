<?php
session_start();
// $user = $_SESSION['uname'];
// if($user==null)
// {
//     header(location:'login.php')
// }
?>
<?php
$user = $_SESSION['aname'];
if (empty($user)) {
    header('location:adminlogin.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Parts Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="img.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php">Admin</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-secondary" href="dashboard.php">Part Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="admincars.php">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="adminaddcar.php">Add Car</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="adminaddPart.php">Add Part</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="adminParts.php">Parts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="adminpartorder.php">Parts Orders</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link text-secondary" href="adminbooking.php">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="feedbacks.php">Feedbacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Part Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Vehicle Supportes</th>
                    <th scope="col">Part Image</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $dbhost = "localhost";
                $dbuser = "root";
                $dbpass = "";
                $db = "images";

                $sqlquery = "SELECT * FROM parts";

                $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

                $query = mysqli_query($conn, $sqlquery);

                while ($row = mysqli_fetch_array($query)) {

                    ?>

                </tbody>
                <tr>
                    <td>
                        <?php echo $row['id']; ?>
                        </td>
                         <input type="hidden" class="partid" value=<?php echo $row["id"]; ?>>
                        <td>
                        <?php echo $row['partname']; ?>
                    </td>
                    <td>
                        <?php echo $row['price']; ?>
                    </td>
                    <td>
                        <?php echo $row['vehicle']; ?>
                    </td>
                    
                    </td>
                    <td>
                        <img class="admin_img" src="parts/<?php echo $row["part_img"]; ?>" alt="">
                    </td>
                    <td>
                        <a  class="btn btn-danger">Delete</a>

                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
     <script>
    $(document).ready(function () {
        $('.btn').click(function (e) { 
            e.preventDefault();
            // alert('hello');
            var deleteid = $(this).closest("tr").find('.partid').val();
            // console.log(bookpart);
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to delete this product!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete Parts!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "deletepro.php",
                        data: {
                            "deletePartSet":1,
                            "deletepart":deleteid,
                        },
                        
                        success: function (response) {
                            Swal.fire("Deleted successfully!",{
                                icon:"success",
                            }).then((result) => {
                                location.reload();
                            });
                            
                            
                        }
                    });
                   
                }
                })
        });
    });
</script>

</body>

</html>