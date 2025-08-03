var fname = document.getElementById("firstname").value;
var lname = document.getElementById("lastname").value;
var address = document.getElementById("address").value;
var city = document.getElementById("city").value;
var state = document.getElementById("state").value;
var phone = document.getElementById("phone").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var cpassword = document.getElementById("cpassword").value;
var amount = document.getElementById("amount").value;

function validateForm() {
    if (fname == "" || lname == "" || address == "" || city == "" || state == "" || phone == "" || email == "" || password == "" || cpassword == "") {
        alert("All fields must be filled out");
        return false;
    }
    if (password !== cpassword) {
        alert("Passwords do not match");
        return false;
    }
    if (phone.length < 12) {
        alert("Phone number must be 11 digits");
        return false;
    }
    if (!email.includes("@")) {
        alert("Please enter a valid email address");
        return false;
    }
    return true;
}

function submitForm() {
    if (validateForm()) {
        alert("Submitted successfully!");
    } else {
        alert("Please correct the errors.");
    }
}