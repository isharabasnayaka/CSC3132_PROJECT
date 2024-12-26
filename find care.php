<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hire a Nurse Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cssstyles/findcarecss.css">
</head>
<body class="bg-light">
  <!-----------------title bar------------>
  <section>
    <div class="navbar">
        <p class="logo" style="margin-top: 0px;">Care bond....</p>
        </div>
        </section>

  <div class="container py-5">
    <div class="card shadow-lg">
      <div class="card-header text-center bg-primary text-white py-4">
        <h2 class="mb-1">Hire a Caregiver</h2>
        <p class="mb-0">Fill out the form to hire a nurse for your needs</p>
      </div>
      <div class="card-body px-4 py-5">
        <form action="find care connection.php" method="POST">
          <div class="row g-4">
            <!-- Name -->
            <div class="col-md-6">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
            </div>

            <!-- Phone Number -->
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
            </div>
             <!-- email address -->
             <div class="col-md-6">
              <label for="mail" class="form-label">e-mail address</label>
              <input type="text" id="mail" name="mail" class="form-control" placeholder="Enter your e-mail" required>
            </div>

            <!-- Patient Details -->
            <div class="col-md-12">
              <label for="details" class="form-label">Patient Details</label>
              <textarea id="details" name="details" class="form-control" placeholder="Provide any specific details" rows="3" required></textarea>
            </div>

            <!-- Location -->
            <div class="col-md-6">
              <label for="location" class="form-label">Where Do You Live?</label>
              <input type="text" id="location" name="location" class="form-control" placeholder="Enter your address" required>
            </div>

            <!-- Nurse Gender -->
            <div class="col-md-6">
              <label class="form-label">What Kind of Nurse Do You Need?</label>
              <select id="nurse_gender" name="nurse_gender" class="form-select" required>
                <option value="" disabled selected>Select nurse gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="no_preference">No Preference</option>
              </select>
            </div>

            <!-- Nurse Qualifications -->
            <div class="col-md-6">
              <label for="qualifications" class="form-label">What Kind of Qualifications Should the Nurse Have?</label>
              <input type="text" id="qualifications" name="qualifications" class="form-control" placeholder="E.g., Certified, Specialized in Pediatrics" required>
            </div>

            <!-- Work Duration -->
            <div class="col-md-6">
              <label for="work_duration" class="form-label">How Long Does the Nurse Need to Work?</label>
              <input type="text" id="work_duration" name="work_duration" class="form-control" placeholder="E.g., Full-time, 8 hours/day" required>
            </div>

            <!-- Area -->
            <div class="col-md-6">
              <label for="area" class="form-label">What Area Are You Looking In?</label>
              <input type="text" id="area" name="area" class="form-control" placeholder="Enter location/distric" required>
            </div>

            <!-- Hiring Duration -->
            <div class="col-md-6">
              <label for="hiring_duration" class="form-label">How Long Will You Be Hiring?</label>
              <input type="text" id="hiring_duration" name="hiring_duration" class="form-control" placeholder="E.g., 1 month, 6 months" required>
            </div>

          <!-- Password -->
          <div class="col-md-6">
  <label for="password" class="form-label">Password</label>
  <input 
    type="password" 
    id="password" 
    name="password"
    class="form-control" 
    placeholder="Enter your password" 
    required>
</div>

<div class="col-md-6">
  <label for="confirm_password" class="form-label">Confirm Password</label>
  <input 
    type="password" 
    id="confirm_password" 
    name="confirm_password" 
    class="form-control" 
    placeholder="Confirm your password" 
    required>
  
  <!-- Error Message -->
  <small id="error-message" class="text-danger" style="display: none;">Passwords do not match</small>
</div>

<script>
  const password = document.getElementById('password');
  const confirmPassword = document.getElementById('confirm_password');
  const errorMessage = document.getElementById('error-message');

  confirmPassword.addEventListener('input', function() {
    // Check if passwords match
    if (password.value !== confirmPassword.value) {
      errorMessage.style.display = 'block'; // Show error message
      confirmPassword.setCustomValidity('Passwords do not match'); // Trigger form validation
    } else {
      errorMessage.style.display = 'none'; // Hide error message
      confirmPassword.setCustomValidity(''); // Clear validation error
    }
  });
</script>


          </div>

          <div class="mt-5 text-center">
            <button type="submit" class="btn btn-primary btn-lg"> Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!------------------------------fotter------------------------->
&nbsp;

<footer class="bg-dark text-white py-5" id="contact">
  <div class="container">
      <div class="row g-4">
          <div class="col-md-6">
              <h5>About CareBond</h5>
              <p>CareBond is dedicated to connecting families with compassionate and experienced caregivers. Our mission is to provide quality care and support to the elderly and those in need.</p>
          </div>
          <div class="col-md-2">

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


</body>

</html>
