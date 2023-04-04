<?php

include "../partials/db.php";
function ContactRequest($conn)
{
    if (isset($_POST['contactSend'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo "Please fill in all fields.";
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }

        $contactSql = "INSERT INTO `contacts`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

        $query = mysqli_query($conn, $contactSql);
        if ($query) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }
}
