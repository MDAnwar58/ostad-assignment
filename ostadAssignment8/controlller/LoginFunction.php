<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if all fields are filled
    if (!empty($email) && !empty($password)) {

        // Check if email and password are correct
        if ($email == "anwar.saeed656@gmail.com" && $password == "01234567") {

            // Login successful, redirect to welcome page
            header("Location: /welcome.php?email=$email");
        } else {
            echo "<p>Invalid email or password.</p>";
        }
    } else {
        echo "<p>All fields are required.</p>";
    }
}
