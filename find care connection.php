<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "Carebond";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


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


if ($_POST['password'] !== $_POST['confirm_password']) {
    die("Passwords do not match.");
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO  find_caregiver_requests (name, phone, email, patient_details, location, nurse_gender, qualifications, work_duration, area, hiring_duration, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $name, $phone, $email, $details, $location, $nurse_gender, $qualifications, $work_duration, $area, $hiring_duration, $hashed_password);


if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>