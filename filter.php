<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['location'], $_GET['experience'], $_GET['cost'], $_GET['availability'])) {
    // Sanitize the inputs
    $location = mysqli_real_escape_string($conn, $_GET['location']);
    $experience = mysqli_real_escape_string($conn, $_GET['experience']);
    $cost = mysqli_real_escape_string($conn, $_GET['cost']);
    $availability = mysqli_real_escape_string($conn, $_GET['availability']);

    // Build the query for the find_job table
    $query = "SELECT name, location, photo FROM find_job ";//WHERE location LIKE '%$location%'";

    if ($experience) {
        $query .= " AND experience >= $experience";
    }

    if ($cost) {
        $query .= " AND cost <= $cost";
    }

    if ($availability) {
        $query .= " AND availability = '$availability'";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if there are results
    if (mysqli_num_rows($result) > 0) {
        echo "<h4>Available Job Seekers</h4><div class='row'>";

        // Loop through each result and display it
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col-md-6 mb-4'>
                    <div class='card'>
                        <img src='{$row['photo']}' class='card-img-top' alt='Job Seeker Photo'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$row['name']}</h5>
                            <p class='card-text'>Location: {$row['location']}</p>
                        </div>
                    </div>
                  </div>";
        }
        echo "</div>";
    } else {
        echo "<p>No job seekers found matching your criteria.</p>";
    }
}
?>
