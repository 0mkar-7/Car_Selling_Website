<?php 
require_once('connection.php');



$sql = "SELECT * FROM imagepro";
$qry = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Drive</title>
    <link rel="stylesheet" href="addcarsstyle.css">
</head>

<body>
    <form method="post" action="bookTestCar.php" onsubmit="return validate();">
        <center>
        <h1>You are one step away from Booking your Car!</h1>
        
            Full Name:<input type="text" name="flname" class="inputstyle"  id="name" required><br><br><br>
            Contact:<input type="number" name="contact" class="inputstyle" id="con" required><br><br><br>
            Email:<input type="email" name="email" class="inputstyle" id ="mail" required><br><br><br>
            Address<textarea class="textarea-input" name="address" rows="5" id="add"></textarea><br><br><br>

            Car Id:<select name="carid" class="inputstyle">
            <?php
            while($row=mysqli_fetch_assoc($qry)){ 
            ?>
               
                <option><?php echo $row['id']; ?></option>
            
            
            
                
            
            <?php } ?>
            </select><br>
            <button  name="submit_details" class="btn-submit-details">Submit Details</button>
        
  

        </center>
    </form>
     <script>
        const name = document.getElementById("name");
        const add = document.getElementById("add");
        const con = document.getElementById("con");
        const mail = document.getElementById("mail");
       

        // function for form validation
        function validate() {




            
           
            // checking name length
            if (name.value.length < 5 || name.value.length > 20) {
                alert("Name length should be more than 5 and less than 21");
                name.focus();
                return false;
            }
            if (add.value.length < 8) {
                alert("Address length should be more than 8");
                add.focus();
                return false;
            }
           
        
            // checking Phonenumber
            if (!con.value.match(/^[1-9][0-9]{9}$/)) {
                alert("Phone number must be 10 characters long number and first digit can't be 0!");
                con.focus();
                return false;
            }
            if (!mail.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                  alert("Please enter a valid email!");
                  mail.focus();
                  return false;
                }




            return true;
        }
    </script>

</body>

</html>