<?php
require_once 'dbconf.php';

function AddData($connect, $user_id, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path) {
    // Prepare the SQL query
    $sql = "INSERT INTO find_job (user_id, name, phone, email, job_type, qualifications, location, work_hours, salary, gender, experience, profile_photo_path) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Check if the statement was prepared successfully
    if ($stmt = $connect->prepare($sql)) {
        // Bind parameters manually: (i = integer, s = string)
        $stmt->bind_param("isssssssssss", $user_id, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path);

        // Execute the query
        if ($stmt->execute()) {
            header("Location: profile.php"); 
            exit();
        } else {
            die("Error: " . $stmt->error);
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        die("Error preparing the SQL statement.");
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Assuming user_id is available in session
    session_start();
    if (!isset($_SESSION['user_id'])) {
        die("You must be logged in to apply for a job.");
    }

    // Get user_id from session
    $user_id = $_SESSION['user_id'];

    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['mail'];
    $job_type = $_POST['job_type'];
    $qualifications = $_POST['qualifications'];
    $location = $_POST['location'];
    $work_hours = $_POST['work_hours'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $experience = $_POST['experience'];

    // Handle profile photo upload
    $profile_photo_path = ''; 
    if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] == 0) {
        $target_dir = "uploads/"; 
        $profile_photo_path = $target_dir . basename($_FILES['profile_photo']['name']);
        if (!move_uploaded_file($_FILES['profile_photo']['tmp_name'], $profile_photo_path)) {
            die("Error uploading profile photo.");
        }
    }

    // Validate salary input
    if (!is_numeric($salary) || strlen($salary) > 10) {
        die("Invalid salary value. Ensure it's a valid number and doesn't exceed the length.");
    }

    // Call the AddData function to insert data into the database
    AddData($connect, $user_id, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path);
}
?>
