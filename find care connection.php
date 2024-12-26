<?php
require_once 'dbconf.php';

function AddData($connect, $name, $phone, $email, $patient_details, $location, $nurse_gender, $qualifications, $work_duration, $area, $hiring_duration, $password_hash) {
  try {
    // Prepared statement to insert data
    $sql = "INSERT INTO find_caregiver_requests (name, phone, email, patient_details, location, nurse_gender, qualifications, work_duration, area, hiring_duration, password_hash)
            VALUES ('$name', '$phone', '$email', '$patient_details', '$location', '$nurse_gender', '$qualifications', '$work_duration', '$area', '$hiring_duration', '$password_hash')";
    
    // Execute the query
    $result = mysqli_query($connect, $sql);

    // Check if query was successful
    if ($result) {
      echo "Record created successfully";
    } else {
      die("Error: " . mysqli_error($connect));
    }

  } catch (Exception $e) {
    die($e->getMessage());
  }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
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
  $password = $_POST['confirm_password'];  // Password from form
  
  // Hash the password before inserting it into the database
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  // Call AddData function to insert data
  AddData($connect, $name, $phone, $email, $patient_details, $location, $nurse_gender, $qualifications, $work_duration, $area, $hiring_duration, $password_hash);
}
?>
