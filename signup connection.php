<?php
// Include the database connection
include 'dbconf.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form input
    $name = trim($_POST['name']) ?? null;
    $email = trim($_POST['email']) ?? null;
    $phone = trim($_POST['phone']) ?? null;
    $password = $_POST['password'] ?? null;
    $confirm_password = $_POST['confirm_password'] ?? null;

    // Check for missing fields
    if (empty($name) || empty($email) || empty($phone) || empty($password) || empty($confirm_password)) {
        die("All fields are required. Please fill in all fields.");
    }

    // Validate password confirmation
    if ($password !== $confirm_password) {
        die("Passwords do not match. Please try again.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check for duplicate email
    $check_email_sql = "SELECT id FROM users WHERE email = ?";
    $check_stmt = mysqli_prepare($connect, $check_email_sql);

    if ($check_stmt) {
        mysqli_stmt_bind_param($check_stmt, "s", $email);
        mysqli_stmt_execute($check_stmt);
        mysqli_stmt_store_result($check_stmt);

        if (mysqli_stmt_num_rows($check_stmt) > 0) {
            die("This email address is already registered. Please use a different email.");
        }

        mysqli_stmt_close($check_stmt);
    } else {
        die("Error preparing email check statement: " . mysqli_error($connect));
    }

    // Prepare the SQL query to insert data
    $sql = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $hashed_password);

        if (mysqli_stmt_execute($stmt)) {
            // Redirect to login page after successful registration
            header("Location: login.php");
            exit(); // Ensure no further code is executed
        } else {
            // Handle query execution failure
            echo "Error executing query: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        // Handle failed statement preparation
        echo "Error preparing statement: " . mysqli_error($connect);
    }
}
?>
