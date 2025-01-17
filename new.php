<?php
require_once 'dbconf.php';

// Initialize the result variable to avoid undefined variable warnings
$result = null;

// Your existing query logic
if (isset($_GET['location']) || isset($_GET['gender']) || isset($_GET['job_type']) || isset($_GET['work_hours'])) {
    $location = $_GET['location'];
    $gender = $_GET['gender'];
    $job_type = $_GET['job_type'];
    $work_hours = $_GET['work_hours'];

    // Prepare your SQL query
    $query = "SELECT name, location, profile_photo_path FROM find_job 
              WHERE location = '$location' 
                AND gender = '$gender' 
                AND job_type = '$job_type' 
                AND work_hours = '$work_hours'";

    // Execute the query
    $result = $connect->query($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Caregiver</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="cssstyles/search.css">
</head>
<body class="bg-light">
    <!-----------------title bar------------>
    <section>
        <div class="navbar">
            <p class="logo" style="margin-top: 0px;">Care bond....</p>
        </div>
    </section>

    <div class="container search-container">
        <!-- Left Side: Filters -->
        <div class="col-md-4">
            <div class="filter-section">
                <h4>Find a Caregiver</h4>
                <form action="searchconn.php" method="GET">
            <div class="col-md-6">
              <label for="location" class="form-label">Location</label>
              <select id="location" name="location" class="form-select" required>
                <option value="" disabled selected>Select your district</option>
                <option value="Colombo">Colombo</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Kandy">Kandy</option>
                <option value="Matale">Matale</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Galle">Galle</option>
                <option value="Matara">Matara</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Mannar">Mannar</option>
                <option value="Vavuniya">Vavuniya</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Ampara">Ampara</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Badulla">Badulla</option>
                <option value="Moneragala">Moneragala</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Kegalle">Kegalle</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Gender</label>
              <div>
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male" class="me-3">Male</label>
                <input type="radio" id="female" name="gender" value="Female" required>
                <label for="female">Female</label>
              </div>
            </div>
            <div class="col-md-6">
              <label for="job_type" class="form-label">Job Type</label>
              <select id="job_type" name="job_type" class="form-select" required>
                <option value="" disabled selected>Select job type</option>
                <option value="Child Care">Child Care</option>
                <option value="Senior Care">Senior Care</option>
                <option value="Nursing">Nursing</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="work_hours" class="form-label">Work Hours</label>
              <select id="work_hours" name="work_hours" class="form-select" required>
                <option value="" disabled selected>Select work hours</option>
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
              </select>
            </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Search Job Seekers</button>
                </div>
            </form>
        </div>
    </div>
               

        <!-- Right Side: Results -->
        <div class="col-md-7 offset-md-1">
            <div class="results-section">
                <h3 class="mb-4">Search Results</h3>
                <div class="row">
                    <?php if ($result && $result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <img src="<?php echo htmlspecialchars($row['profile_photo_path']); ?>" class="card-img-top" alt="Profile Photo">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                                        <p class="card-text">Location: <?php echo htmlspecialchars($row['location']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-muted">No results found. Try adjusting your filters.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$connect->close();
?>
