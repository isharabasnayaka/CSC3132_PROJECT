<?php

// Database connection
$servername = "127.0.0.1";
$username = "root"; 
$password = "mariadb"; 
$dbname = "Carebond";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure all POST fields are received
if (
    isset($_POST['name'], $_POST['phone'], $_POST['mail'], $_POST['details'], 
          $_POST['location'], $_POST['nurse_gender'], $_POST['qualifications'], 
          $_POST['work_duration'], $_POST['area'], $_POST['hiring_duration'], 
          $_POST['password'], $_POST['confirm_password'])
) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['mail'];
    $details = $_POST['details'];
    $location = $_POST['location'];
    $nurse_gender = $_POST['nurse_gender'];
    $qualifications = $_POST['qualifications'];
    $work_duration = $_POST['work_duration'];
    $area = $_POST['area'];
    $hiring_duration = $_POST['hiring_duration'];
    $password = $_POST['password']; 
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO find_caregiver_requests 
        (name, phone, email, patient_details, location, nurse_gender, qualifications, 
         work_duration, area, hiring_duration, password_hash) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "sssssssssss", 
        $name, $phone, $email, $details, $location, $nurse_gender, 
        $qualifications, $work_duration, $area, $hiring_duration, $hashed_password
    );

    // Execute and provide feedback
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    die("All fields are required.");
}

?>
