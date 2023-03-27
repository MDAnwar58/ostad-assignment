<?php

// this for registration page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if all fields are filled
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($confirm_password)) {

        // Check if email is valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Check if passwords match
            if ($password == $confirm_password) {

                // Registration successful
                echo "<p>Registration successful! Welcome, $fname!</p>";
            } else {
                echo "<p>Passwords do not match.</p>";
            }
        } else {
            echo "<p>Invalid email address.</p>";
        }
    } else {
        echo "<p>All fields are required.</p>";
    }
}
