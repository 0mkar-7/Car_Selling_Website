
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
    <title>Sell Car</title>
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
    <h1 class="lead text-center">Sell Your Car Within Minutes. Just Fill out the details Below!</h1>
    <form method="post" action="adminAddCarConn.php" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="card-body w-50 mx-auto border border-secondary rounded">
            <div class="form-group mt-3 mx-2">

                <span class="fw-bold">Car Name:</span><input type="text" class="form-control" id="carname" placeholder="Enter car Name"
                    name="product_name" required>
            </div>
        

            <div class="form-group mx-2">

                <span class="fw-bold">Price:</span><input type="number" class="form-control" id="price"
                    placeholder="price of the car" name="product_price" required>
            </div>
            
            <div class="form-group mx-2">

                <span class="fw-bold">Owner Name:</span><input type="text" class="form-control" id="ownname"
                    placeholder="Name of owner" name="owner_name" required>
            </div>
            
            <div class="form-group mx-2">

                <span class="fw-bold">Registered At:</span><input type="text" class="form-control" id="reg"
                    placeholder="Registration State" name="registration_state" required>
            </div>
            
            <div class="form-group mx-2">

                <span class="fw-bold">Kms Driven:</span><input type="number" class="form-control" id="kms" placeholder="KMS Driven"
                    name="kms_driven" required>
            </div>
            

            <div class="form-group mx-2">

                <span class="fw-bold">Owner Contact:</span><input type="number" class="form-control" id="owncon"
                    placeholder="Contact Number of Seller" name="owner_contact" required>
            </div>
            
            <div class="form-group mx-2">
                <span class="fw-bold">Insurance:</span><input type="text" class="form-control" id="ins"
                    placeholder="Input valid or Invalid" name="note" required>
            </div>
            
            <div class="form-group mx-2">
            <span class="fw-bold">Image of Car:</span><input type="file" class="form-control" 
                    placeholder="Image of Your car" name="product_img" required>
            </div>
            

             <div class="card-footer mx-2 mt-2">
            <button type="submit" class="btn btn-primary mb-3" name="submit_details">Submit</button>
            </div>


        </div>
        <!-- /.card-body -->

        


    </form>
     <script>
            const carname = document.getElementById("carname");
              const price = document.getElementById("price");
              const ownname = document.getElementById("ownname");
              const reg = document.getElementById("reg");
              const kms = document.getElementById("kms");
              const owncon = document.getElementById("owncon");
              const ins = document.getElementById("ins");


              // function for form validation
              function validate() {


                
                
                // checking password
                
                // checking phone number
              
                // checking carname length
                if (carname.value.length < 3 || carname.value.length > 20) {
                  alert("Car Name length should be more than 2 and less than 20");
                  carname.focus();
                  return false;
                }
                // checking price
                if (price.value.length < 5 || price.value.length > 11) {
                  alert("Price should be more than 5 digits and less than 11");
                  price.focus();
                  return false;
                }
                // checking name length
                if (ownname.value.length < 2 || ownname.value.length > 20) {
                  alert("Name length should be more than 2 and less than 21");
                  ownname.focus();
                  return false;
                }
                 // checking registered state
                if (reg.value.length < 2 || reg.value.length > 20) {
                  alert("state Name length should be more than 2 and less than 21");
                  reg.focus();
                  return false;
                }
                 // checking Insurance
                if (ins.value.length < 4 || ins.value.length > 20) {
                  alert("Insurance  must be written Valid or Invalid");
                  ins.focus();
                  return false;
                }
                 // checking Phonenumber
                if (!owncon.value.match(/^[1-9][0-9]{9}$/)) {
                  alert("Phone number must be 10 characters long number and first digit can't be 0!");
                  owncon.focus();
                  return false;
                }




                return true;
              }
           </script>

</body>

</html>