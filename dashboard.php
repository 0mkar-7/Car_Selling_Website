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
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php">Admin</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-secondary" href="dashboard.php">User Details</a>
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
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>

                </tr>
            </thead>
            <tbody>
             <?php
             require('adminconnectuserdetails.php');
             $sqlquery="SELECT * FROM logincreds" ;
             $query=mysqli_query($conn,$sqlquery);
             while($row=mysqli_fetch_array($query))
             {

             ?>

            </tbody>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['email']; ?></tdd>
                <td><?php echo $row['phno']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>