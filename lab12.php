<?php
if (isset($_POST['register'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['pass'];
    $cp = $_POST['cpass'];
    $ph = $_POST['phone'];
    if (empty($n) || empty($e) || empty($p) || empty($cp) || empty($ph)) {
        echo "<script>alert('All fields are required');</script>";
    }
    elseif (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Enter valid email');</script>";
    }
    elseif (strlen($p) <= 6) {
        echo "<script>alert('Password must have more than 6 characters');</script>";
    }
    elseif ($p != $cp) {
        echo "<script>alert('Passwords do not match');</script>";
    }
    elseif (!preg_match("/^[0-9]{10}$/", $ph)) {
        echo "<script>alert('Enter valid 10 digit phone number');</script>";
    }
    else {
        echo "<script>alert('Registration Successful!');</script>";
 }}
?>
<html>
<head><title>Registration Form</title>
<style>body {
            background: lightblue;
            text-align: center;
        }
        form {
            background: white;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
        }
        h2 {color: darkblue;}
        input {
            padding: 8px;
            margin: 8px;
            border: 1px solid gray;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: darkblue;
            color: white;
            cursor: pointer;
        }
</style></head>
<body>
<form method="POST" onsubmit="return validate()">
<h2>Registration Form</h2>
<input type="text" id="name" name="name" placeholder="Name"><br>
<input type="text" id="email" name="email" placeholder="Email"><br>
<span id="emailWarning" style="color:red; font-size:12px;"></span><br>
<input type="password" id="pass" name="pass" placeholder="Password"><br>
<input type="password" id="cpass" name="cpass" placeholder="Confirm Password"><br>
<input type="text" id="phone" name="phone" placeholder="Phone Number"><br>
<input type="submit" name="register" value="Register"></form>
<script>
      document.getElementById("email").addEventListener("blur", function() {
    var e = this.value;
    if (e != "" && !/^[a-zA-Z0-9._%+-]{2,}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(e)) {
        document.getElementById("emailWarning").innerHTML = " Please enter a valid email address";
    } else {
        document.getElementById("emailWarning").innerHTML = "";
    }});
        function validate() {
            var n = document.getElementById("name").value;
            var e = document.getElementById("email").value;
            var p = document.getElementById("pass").value;
            var cp = document.getElementById("cpass").value;
            var ph = document.getElementById("phone").value;
            if (n == "" || e == "" || p == "" || cp == "" || ph == "") {
                alert("All fields are required");
                return false;
            }
            if (!/^[a-zA-Z0-9._%+-]{2,}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(e)) {
                alert("Enter valid email");
                return false;
            }
            if (p.length <= 6) {
                alert("Password must have more than 6 characters");
                return false;
            }
            if (p != cp) {
                alert("Passwords do not match");
                return false;
            }
            if (!/^\d{10}$/.test(ph)) {
                alert("Enter valid 10 digit phone number");
                return false;
            }

            alert("Registration Successful!");
            return true;} 
</script></body></html>
