<?php
include 'dbconf.php';

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
        // Display the results
        echo "<div class='container'><h3>Available Caregivers</h3><ul class='list-group'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li class='list-group-item'>
                    <h5>{$row['name']}</h5>
                    <p>Location: {$row['location']}</p>
                    <p>Experience: {$row['experience']} years</p>
                    <p>Cost: {$row['cost']} per hour</p>
                    <p>Availability: {$row['availability']}</p>
                  </li>";
        }
        echo "</ul></div>";
    } else {
        echo "<div class='container'><p>No caregivers found matching your criteria.</p></div>";
    }
}
?>
