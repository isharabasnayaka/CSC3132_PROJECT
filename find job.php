<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nursing Job Search Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="cssstyles/findjobcss.css">
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
      <div class="card-header text-center text-white bg-primary py-4">
        <h2 class="mb-1">To Be A Caregiver </h2>
        <p class="mb-0">Fill out this form to find your ideal Caregiver job</p>
      </div>
      <div class="card-body px-4 py-5">
        <form action="find job connection.php" method="POST" enctype="multipart/form-data">
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
            <!-- Job Type -->
            <div class="col-md-6">
              <label for="job_type" class="form-label">What Kind of Caregiver Job Are You Looking For?</label>
              <input type="text" id="job_type" name="job_type" class="form-control" placeholder="e.g., Home care, ICU nurse" required>
            </div>

            <!-- Qualifications -->
            <div class="col-md-6">
              <label for="qualifications" class="form-label">What Qualifications Do You Have?</label>
              <textarea id="qualifications" name="qualifications" class="form-control" placeholder="e.g., B.Sc. in Nursing, ACLS certification" rows="3" required></textarea>
            </div>

            <!-- Location -->
            <div class="col-md-6">
              <label for="location" class="form-label">Where Do You Live?</label>
              <input type="text" id="location" name="location" class="form-control" placeholder="Enter your location" required>
            </div>

            <!-- Work Hours -->
            <div class="col-md-6">
              <label for="work_hours" class="form-label">How Many Hours Do You Expect to Work?</label>
              <input type="text" id="work_hours" name="work_hours" class="form-control" placeholder="e.g., Full-time, 8 hours a day" required>
            </div>

            <!-- Expected Salary -->
            <div class="col-md-6">
              <label for="salary" class="form-label">What Salary Do You Expect?</label>
              <input type="text" id="salary" name="salary" class="form-control" placeholder="e.g., $5000/month" required>
            </div>

            <!-- Patients -->
            <div class="col-md-6">
              <label for="patients" class="form-label">What Kind of Patients Do You Care For?</label>
              <textarea id="patients" name="patients" class="form-control" placeholder="e.g., Elderly, pediatric, ICU patients" rows="3" required></textarea>
            </div>

            <!-- Experience -->
            <div class="col-md-12">
              <label for="experience" class="form-label">What Experience Do You Have?</label>
              <textarea id="experience" name="experience" class="form-control" placeholder="Describe your past experience" rows="4" required></textarea>
            </div>

            <!-- Profile Photo -->
            <div class="col-md-12">
              <label for="profile_photo" class="form-label">Upload Your Profile Photo:</label>
              <input type="file" id="profile_photo" name="profile_photo" class="form-control" accept="image/*" required>
            </div>
          </div>

          <!-- Password -->
          <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
  
        </div>

         <!-- Confirm Password -->
        <div class="col-md-6">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password"  class="form-control" id="confirm_password" style="max-width: 360px;" placeholder="Confirm your password" required>
         <!-- Error Message -->
        <small id="error-message" class="text-danger" style="display: none;">Passwords do not match</small>
        </div>

<script>
  const password = document.getElementById('password');
  const confirmPassword = document.getElementById('confirm_password');
  const errorMessage = document.getElementById('error-message');

  confirmPassword.addEventListener('input', () => {
    if (password.value !== confirmPassword.value) {
      errorMessage.style.display = 'block'; 
      confirmPassword.setCustomValidity('Passwords do not match'); 
    } else {
      errorMessage.style.display = 'none'; 
      confirmPassword.setCustomValidity(''); 
    }
  });
</script>


          <div class="mt-5 text-center">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
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
