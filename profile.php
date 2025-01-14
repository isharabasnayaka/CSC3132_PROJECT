<?php
require_once 'dbconf.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caregiver Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cssstyles/profilecss.css">
</head>
<body>
  <section>
    <div class="navbar">
      <p class="logo" style="margin-top: 0px;">Care bond....</p>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="joinnow.php">Join now</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="login.php">Log Out</a></li>
      </ul>
    </div>
  </section>

  <?php
    if (isset($_SESSION['user_id'])) {
      $finder = $_SESSION['user_id'];
      $sql = "SELECT * FROM find_job WHERE user_id=$finder";  // Use user_id instead of id
      $result = mysqli_query($connect, $sql);

      if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
  ?>
  <div class="container my-4">
    <!-- Profile Header -->
    <div class="profile-header text-center">
      <img src="<?php echo htmlspecialchars($row['profile_photo_path']); ?>" alt="Caregiver Photo" class="profile-img">
      <h2 class="mt-3"><?php echo htmlspecialchars($row['name']); ?></h2>
      <p>Experience: <?php echo htmlspecialchars($row['experience']); ?> | Location: <?php echo htmlspecialchars($row['location']); ?></p>
      <button id="hiredButton" class="hired-btn hired" onclick="toggleHiredStatus()">Hired</button>
    </div>
    <!-- Profile Details -->
    <div class="row my-5">
      <div class="col-md-4">
        <h4>About Me</h4>
        <p id="about-text"><?php echo htmlspecialchars($row['qualifications']); ?></p>
        <button class="btn btn-outline-secondary btn-sm mt-2" onclick="editAbout()">
          Edit About Me
        </button>
      </div>
      <div class="col-md-4">
        <h4>Qualifications</h4>
        <ul class="list-group">
          <li class="list-group-item">Medication Management</li>
          <li class="list-group-item">Meal Preparation</li>
          <li class="list-group-item">Physical Therapy Assistance</li>
          <li class="list-group-item">Companionship</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Contact</h4>
        <ul class="list-unstyled">
          <li><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></li>
          <li><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></li>
          <li><strong>Availability:</strong> <?php echo htmlspecialchars($row['work_hours']); ?></li>
        </ul>
      </div>
    </div>

  </div>
  <?php
      } else {
        echo "<p>No profile found. Please check your session or profile data.</p>";
      }
    } else {
      echo "<p>You must be logged in to view this page.</p>";
    }
  ?>

  <script>
    function toggleHiredStatus() {
      const button = document.getElementById('hiredButton');
      if (button.classList.contains('hired')) {
        button.classList.remove('hired');
        button.classList.add('not-hired');
        button.textContent = 'Not Hired';
      } else {
        button.classList.remove('not-hired');
        button.classList.add('hired');
        button.textContent = 'Hired';
      }
    }

    function editAbout() {
      const aboutText = document.getElementById('about-text');
      const newAbout = prompt('Edit your About Me section:', aboutText.textContent);
      if (newAbout !== null) {
        aboutText.textContent = newAbout;
      }
    }
  </script>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5" id="contact">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6">
          <h5>About CareBond</h5>
          <p>CareBond is dedicated to connecting families with compassionate and experienced caregivers. Our mission is to provide quality care and support to the elderly and those in need.</p>
        </div>
        <div class="col-md-3">
          <h5>Contact Us</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-phone me-2"></i>011-2544698</li>
            <li><i class="fas fa-envelope me-2"></i>info@carebond.com</li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-4">
        <p class="mb-0">&copy; 2023 CareBond. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
