<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Caregiver</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cssstyles/search.css">
</head>
<body>

<div class="container search-container">
    <!-- Left side for filters -->
    <div class="col-md-4">
        <div class="filter-section">
            <h4>Find a Caregiver</h4>
            <p class="lead">Select your preferences to find a caregiver.</p>

            <form action="caregiver_search.php" method="GET">
                <!-- Location Filter -->
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" required>
                </div>

                <!-- Experience Filter -->
                <div class="mb-3">
                    <label for="experience" class="form-label">Experience</label>
                    <select class="form-select" id="experience" name="experience">
                        <option value="">Select experience level</option>
                        <option value="1">1-3 years</option>
                        <option value="2">4-6 years</option>
                        <option value="3">7+ years</option>
                    </select>
                </div>

                <!-- Cost Filter -->
                <div class="mb-3">
                    <label for="cost" class="form-label">Maximum Cost per Hour</label>
                    <input type="number" class="form-control" id="cost" name="cost" placeholder="Enter cost" min="0">
                </div>

                <!-- Availability Filter -->
                <div class="mb-3">
                    <label for="availability" class="form-label">Availability</label>
                    <select class="form-select" id="availability" name="availability">
                        <option value="">Select availability</option>
                        <option value="full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                        <option value="on-call">On-call</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Search Caregivers</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Right side for displaying results -->
    <div class="col-md-7 offset-md-1">
        <div class="results-section">
            <?php
            // Handle form submission and query the database
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['location'], $_GET['experience'], $_GET['cost'], $_GET['availability'])) {
                // Sanitize the inputs
                $location = mysqli_real_escape_string($conn, $_GET['location']);
                $experience = mysqli_real_escape_string($conn, $_GET['experience']);
                $cost = mysqli_real_escape_string($conn, $_GET['cost']);
                $availability = mysqli_real_escape_string($conn, $_GET['availability']);

                // Build the query
                $query = "SELECT * FROM caregivers WHERE location LIKE '%$location%' ";

                if ($experience) {
                    $query .= "AND experience >= $experience ";
                }

                if ($cost) {
                    $query .= "AND cost <= $cost ";
                }

                if ($availability) {
                    $query .= "AND availability = '$availability' ";
                }

                // Execute the query
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    echo "<h4>Available Caregivers</h4><ul class='list-group'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li class='list-group-item'>
                                <h5>{$row['name']}</h5>
                                <p>Location: {$row['location']}</p>
                                <p>Experience: {$row['experience']} years</p>
                                <p>Cost: {$row['cost']} per hour</p>
                                <p>Availability: {$row['availability']}</p>
                              </li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No caregivers found matching your criteria.</p>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
