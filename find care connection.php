<?php

$servername = "127.0.0.1";
$username = "root"; 
$password = "mariadb"; 
$dbname = "Carebond";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$patient_details = $_POST['details'];
$location = $_POST['location'];
$nurse_gender = $_POST['nurse_gender'];
$qualifications = $_POST['qualifications'];
$work_duration = $_POST['work_duration'];
$area = $_POST['area'];
$hiring_duration = $_POST['hiring_duration'];
$password = $_POST['password'] ;
$confirm_password = $_POST['confirm_password'];

// Validate passwords
if ($password !== $confirm_password) {
    die("Passwords do not match.");
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO find_caregiver_requests (name, phone, email, patient_details, location, nurse_gender, qualifications, work_duration, area, hiring_duration, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $name, $phone, $email, $details, $location, $nurse_gender, $qualifications, $work_duration, $area, $hiring_duration, $hashed_password);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
