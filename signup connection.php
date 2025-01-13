<?php
// Include the database connection
include 'dbconf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password hashing

    // Prepare the SQL query to insert data
    $sql = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $password);

        if (mysqli_stmt_execute($stmt)) {
            // Redirect to login page after successful registration
            header("Location: login.php");
            exit(); // Make sure no further code is executed after the redirect
        } else {
            // Handle query execution failure
            echo "Error executing query: " . mysqli_stmt_error($stmt);
        }
    } else {
        // Handle failed statement preparation
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}
?>