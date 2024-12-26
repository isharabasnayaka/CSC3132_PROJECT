<?php
require_once 'dbconf.php';

function AddData($connect, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $patients, $experience, $profile_photo_path, $password_hash) {
    try {
        $stmt = $connect->prepare("INSERT INTO find_job_applications (name, phone, email, job_type, qualifications, location, work_hours, salary, patients, experience, profile_photo_path, password_hash) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $patients, $experience, $profile_photo_path, $password_hash);
        if ($stmt->execute()) {
            header("Location: login.php"); 
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
    $patients = $_POST['patients'];
    $experience = $_POST['experience'];

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT); 
    } else {
        echo "Password is required!";
        exit;
    }

    $profile_photo_path = ''; 
    if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] == 0) {
        $target_dir = "uploads/"; 
        $profile_photo_path = $target_dir . basename($_FILES['profile_photo']['name']);
        move_uploaded_file($_FILES['profile_photo']['tmp_name'], $profile_photo_path);
    }

    // Validate salary input
    if (!is_numeric($salary) || strlen($salary) > 10) {
        die("Invalid salary value. Ensure it's a valid number and doesn't exceed the length.");
    }

    // Call the AddData function to insert the data into the database
    AddData($connect, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $patients, $experience, $profile_photo_path, $password_hash);
}
?>
