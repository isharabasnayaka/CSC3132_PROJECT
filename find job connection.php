<?php
// Database connection details
$servername = "127.0.0.1";
$username = "root"; // Replace with your MySQL username
$password = "mariadb"; // Replace with your MySQL password
$dbname = "Carebond";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$job_type = $_POST['job_type'];
$qualifications = $_POST['qualifications'];
$location = $_POST['location'];
$work_hours = $_POST['work_hours'];
$salary = $_POST['salary'];
$patients = $_POST['patients'];
$experience = $_POST['experience'];
$password = $_POST['password'];

// Hash the password for security
$password_hash = password_hash($password, PASSWORD_BCRYPT);

// Handle file upload
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$profile_photo = $_FILES['profile_photo']['name'];
$target_file = $target_dir . basename($profile_photo);

// Move uploaded file to the server
if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $target_file)) {
    $profile_photo_path = $target_file;
} else {
    die("Error uploading profile photo.");
}

// Insert data into the database
$sql = "INSERT INTO find_job_applications(
            name, phone, email, job_type, qualifications, 
            location, work_hours, salary, patients, experience, 
            profile_photo_path, password_hash
        ) VALUES (
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
        )";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssssssss",
    $name, $phone, $email, $job_type, $qualifications,
    $location, $work_hours, $salary, $patients, $experience,
    $profile_photo_path, $password_hash
);

if ($stmt->execute()) {
    echo "<script>alert('Form submitted successfully!');</script>";
    echo "<script>window.location.href = 'success_page.html';</script>"; // Redirect to success page
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
