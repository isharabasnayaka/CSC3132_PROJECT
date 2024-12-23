// Collect form data
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
$password = $_POST['Password'] ?? null; // Get password from form

// Check if the password is provided and not empty
if (empty($password)) {
    die("Password is required.");
}

// Hash the password for security
$password_hash = password_hash($password, PASSWORD_BCRYPT);

// Insert data into the database
$sql = "INSERT INTO find_caregiver_requests (
            name, phone, email, patient_details, location, nurse_gender, 
            qualifications, work_duration, area, hiring_duration, password_hash
        ) VALUES (
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
        )";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssss", 
    $name, $phone, $email, $patient_details, $location, 
    $nurse_gender, $qualifications, $work_duration, $area, 
    $hiring_duration, $password_hash
);

if ($stmt->execute()) {
    echo "<script>alert('Form submitted successfully!'); window.location.href = 'login.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
