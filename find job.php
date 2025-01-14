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
            <!-- Email Address -->
            <div class="col-md-6">
              <label for="mail" class="form-label">Email Address</label>
              <input type="email" id="mail" name="mail" class="form-control" placeholder="Enter your email" required>
            </div>
            <!-- Gender -->
            <div class="col-md-6">
              <label class="form-label">Gender</label>
              <div>
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male" class="me-3">Male</label>
                <input type="radio" id="female" name="gender" value="Female" required>
                <label for="female">Female</label>
              </div>
            </div>
            <!-- Job Type -->
            <div class="col-md-6">
              <label for="job_type" class="form-label">Job Type</label>
              <select id="job_type" name="job_type" class="form-select" required>
                <option value="" disabled selected>Select job type</option>
                <option value="Child Care">Child Care</option>
                <option value="Senior Care">Senior Care</option>
                <option value="Nursing">Nursing</option>
              </select>
            </div>
            <!-- Qualifications -->
            <div class="col-md-6">
              <label for="qualifications" class="form-label">Qualifications</label>
              <textarea id="qualifications" name="qualifications" class="form-control" placeholder="e.g., B.Sc. in Nursing, ACLS certification" rows="3" required></textarea>
            </div>
            <!-- Location -->
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
            <!-- Work Hours -->
            <div class="col-md-6">
              <label for="work_hours" class="form-label">Work Hours</label>
              <select id="work_hours" name="work_hours" class="form-select" required>
                <option value="" disabled selected>Select work hours</option>
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
              </select>
            </div>
            <!-- Expected Salary -->
            <div class="col-md-6">
              <label for="salary" class="form-label">Expected Salary</label>
              <input type="text" id="salary" name="salary" class="form-control" placeholder="e.g., $5000/month" required>
            </div>
            <!-- Experience -->
            <div class="col-md-12">
              <label for="experience" class="form-label">Experience</label>
              <textarea id="experience" name="experience" class="form-control" placeholder="Describe your past experience" rows="4" required></textarea>
            </div>
            <!-- Profile Photo -->
            <div class="col-md-12">
              <label for="profile_photo" class="form-label">Profile Photo</label>
              <input type="file" id="profile_photo" name="profile_photo" class="form-control" accept="image/*" required>
            </div>
          </div>
          <div class="mt-5 text-center">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!------------------------------Footer----------------------------->
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
</body>
</html>
