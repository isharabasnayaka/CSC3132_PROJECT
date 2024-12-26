<?php
// Database connection details
$servername = "127.0.0.1";
$username = "root";
$password = "mariadb";
$dbname = "Carebond";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure all required POST fields are set
$required_fields = [
    'name', 'phone', 'mail', 'details', 'location', 
    'nurse_gender', 'qualifications', 'work_duration', 
    'area', 'hiring_duration', 'password', 'confirm_password'
];

foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        die("The field '$field' is required.");
    }
}

// Assign and sanitize input data
$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$email = htmlspecialchars($_POST['mail']);
$details = htmlspecialchars($_POST['details']);
$location = htmlspecialchars($_POST['location']);
$nurse_gender = htmlspecialchars($_POST['nurse_gender']);
$qualifications = htmlspecialchars($_POST['qualifications']);
$work_duration = htmlspecialchars($_POST['work_duration']);
$area = htmlspecialchars($_POST['area']);
$hiring_duration = htmlspecialchars($_POST['hiring_duration']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Ensure passwords match
if ($password !== $confirm_password) {
    die("Passwords do not match.");
}

// Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL statement
$stmt = $conn->prepare(
    "INSERT INTO find_caregiver_requests 
    (name, phone, email, patient_details, location, nurse_gender, 
    qualifications, work_duration, area, hiring_duration, password_hash) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
);
$stmt->bind_param(
    "sssssssssss", 
    $name, $phone, $email, $details, $location, 
    $nurse_gender, $qualifications, $work_duration, $area, $hiring_duration, $password_hash
);

// Execute the statement and handle the response
if ($stmt->execute()) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
