<?php
// Database connection details
$servername = "127.0.0.1";
$username = "root";
$password = "mariadb";
$dbname = "Carebond";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['mail'] ?? '';
$details = $_POST['details'] ?? '';
$location = $_POST['location'] ?? '';
$nurse_gender = $_POST['nurse_gender'] ?? '';
$qualifications = $_POST['qualifications'] ?? '';
$work_duration = $_POST['work_duration'] ?? '';
$area = $_POST['area'] ?? '';
$hiring_duration = $_POST['hiring_duration'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// Validate inputs
if (empty($name) || empty($phone) || empty($email) || empty($details) || empty($location) || empty($nurse_gender) || empty($qualifications) || empty($work_duration) || empty($area) || empty($hiring_duration) || empty($password) || empty($confirm_password)) {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

if ($password !== $confirm_password) {
    die("Passwords do not match.");
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO find_caregiver_requests 
    (name, phone, email, patient_details, location, nurse_gender, qualifications, work_duration, area, hiring_duration, password) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $name, $phone, $email, $details, $location, $nurse_gender, $qualifications, $work_duration, $area, $hiring_duration, $hashed_password);

// Execute the query and handle errors
if ($stmt->execute()) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
