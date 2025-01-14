<?php
require_once 'dbconf.php';

function AddData($connect, $user_id, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path) {
    try {
        // Prepare the SQL statement
        $stmt = $connect->prepare("INSERT INTO find_job (user_id, name, phone, email, job_type, qualifications, location, work_hours, salary, gender, experience, profile_photo_path) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters - ensuring each data type matches the SQL table
        $stmt->bind_param(
            "issssssssss", 
            $user_id,  // user_id is an integer
            $name,     // name is a string
            $phone,    // phone is a string
            $email,    // email is a string
            $job_type, // job_type is a string
            $qualifications, // qualifications is a string
            $location, // location is a string
            $work_hours, // work_hours is a string
            $salary,   // salary is a string (could be numeric, but we're treating it as string)
            $gender,   // gender is a string
            $experience, // experience is a string
            $profile_photo_path // profile_photo_path is a string
        );
        
        // Execute the statement and check for errors
        if ($stmt->execute()) {
            header("Location: profile.php"); 
            exit(); // Ensure no further code is executed
        } else {
            die("Error: " . $stmt->error);
        }

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Assuming user is logged in and user_id is stored in session
    session_start();
    if (!isset($_SESSION['user_id'])) {
        die("You must be logged in to apply for a job.");
    }
    
    // Get user_id from the session
    $user_id = $_SESSION['user_id'];

    // Retrieve form data
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

    // Handle the profile photo upload
    $profile_photo_path = ''; 
    if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] == 0) {
        $target_dir = "uploads/"; 
        $profile_photo_path = $target_dir . basename($_FILES['profile_photo']['name']);
        if (!move_uploaded_file($_FILES['profile_photo']['tmp_name'], $profile_photo_path)) {
            die("Error uploading profile photo.");
        }
    }

    // Validate salary input (ensure it's numeric)
    if (!is_numeric($salary) || strlen($salary) > 10) {
        die("Invalid salary value. Ensure it's a valid number and doesn't exceed the length.");
    }

    // Call the AddData function to insert the data into the database
    AddData($connect, $user_id, $name, $phone, $email, $job_type, $qualifications, $location, $work_hours, $salary, $gender, $experience, $profile_photo_path);
}
?>

