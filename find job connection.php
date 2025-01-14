<?php
require_once 'dbconf.php';

function AddData($connect, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path) {
    try {
        $stmt = $connect->prepare("INSERT INTO find_job_applications (name, phone, email, job_type, qualifications, location, work_hours, salary, gender, experience, profile_photo_path) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path);
        if ($stmt->execute()) {
            header("Location: profile.php"); 
            exit();
        } else {
            die("Error: " . $stmt->error);
        }

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
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

    // Call the AddData function to insert the data into the database
    AddData($connect, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path);
}
?>
