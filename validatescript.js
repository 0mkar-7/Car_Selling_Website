
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const phoneNumber = document.getElementById("phno");
    const firstname = document.getElementById("firstname");
    const lastname = document.getElementById("lastname");
    const username = document.getElementById("username");


    // function for form validation
    function validate() {


                // checking email
                if (!email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2, 3})+$/)) {
        alert("Please enter a valid email!");
    email.focus();
    return false;
                }
    // checking password
    if (!password.value.match(/^.{8, 15}$/)) {
        alert("Password length must be between 8-15 characters!");
    password.focus();
    return false;
                }
    // checking phone number
    if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
        alert("Phone number must be 10 characters long number and first digit can't be 0!");
    phno.focus();
    return false;
                }
    // checking name length
    if (firstname.value.length < 2 || firstname.value.length > 10) {
        alert("Name length should be more than 2 and less than 11");
    firstname.focus();
    return false;
                }
    // checking name length
    if (lastname.value.length < 3 || lastname.value.length > 20) {
        alert("LastName length should be more than 2 and less than 21");
    lastname.focus();
    return false;
                }
    // checking name length
    if (username.value.length < 5 || username.value.length > 20) {
        alert("UserName length should be more than 5 and less than 21");
    username.focus();
    return false;
                }




    return true;
            }