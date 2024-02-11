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
    <title>Admin Add Part</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    <h1 class="lead text-center">Add Your Part Data Here!</h1>
    <form method="post" action="adminAddProConn.php" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="card-body w-50 mx-auto border border-secondary rounded">
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Part Name:</span><input type="text" class="form-control" id="partname" placeholder="Enter Part Name"
                    name="partname" required>
            </div>
        

            <div class="form-group mx-2">

                <span class="fw-bold">Price:</span><input type="number" class="form-control" id="price"
                    placeholder="price of the part" name="partprice" required>
            </div>
            
            <div class="form-group mx-2">

                <span class="fw-bold">Vehicle Supported:</span><input type="text" class="form-control" id="vs"
                    placeholder="Vehicle Supported" name="vehicle" required>
            </div>
            
           
            
            <div class="form-group mx-2">
            <span class="fw-bold">Image of Part:</span><input type="file" class="form-control" id="exampleInputPassword1"
                    placeholder="Image of Part" name="partimg" required>
            </div>
            

             <div class="card-footer mx-2 mt-2">
            <button type="submit" class="btn btn-primary mb-3" name="submit_details">Submit</button>
            </div>


        </div>
        <!-- /.card-body -->

        


    </form>
     <script>
            const partname = document.getElementById("partname");
              const price = document.getElementById("price");
              const vs = document.getElementById("vs");
              

              // function for form validation
              function validate() {


                
                
                // checking password
                
                // checking phone number
              
                // checking name length
                
                // checking name length
                if (price.value.length < 2 || price.value.length > 11) {
                  alert("Price should be more than 5 digits and less than 11");
                  price.focus();
                  return false;
                }
                // checking name length
                if (partname.value.length < 2 || partname.value.length > 20) {
                  alert("Part Name length should be more than 2 and less than 21");
                  partname.focus();
                  return false;
                }
                if (vs.value.length < 2 || vs.value.length > 20) {
                  alert("Vehicle Name length should be more than 2 and less than 21");
                  vs.focus();
                  return false;
                }
               



                return true;
              }
           </script>

</body>

</html>