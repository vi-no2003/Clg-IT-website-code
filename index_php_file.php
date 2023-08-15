<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your custom validation here.
    // For simplicity, let's just check if both fields are not empty.
    if (!empty($username) && !empty($password)) {
        // Valid username and password, redirect or do further processing.
        // For this example, we will just echo a success message.
        echo "Login successful! Welcome, " . htmlspecialchars($username);
    } else {
        // Invalid username or password, display an error message.
        echo "Invalid username or password. Please try again.";
    }
}
?>
