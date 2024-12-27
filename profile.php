<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caregiver Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="profilecss.css">
</head>
<body>
    <section>
        <div class="navbar">
            <p class="logo" style="margin-top: 0px;">Care bond....</p>
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="service.php">Service</a></li>
              <li><a href="joinnow.php">Join now</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="login.php">Log Out</a></li>
              
            </ul>
        </div>
    </section>

  <div class="container my-4">
    <!-- Profile Header -->
    <div class="profile-header text-center">
      <img src="https://via.placeholder.com/150" alt="Caregiver Photo" class="profile-img">
      <h2 class="mt-3">Jane Doe</h2>
      <p>Experience nd were live</p>
      <button id="hiredButton" class="hired-btn hired" onclick="toggleHiredStatus()">Hired</button>
    </div>

    <!-- Edit Profile Option -->
    <div class="text-end mt-3">
      <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
        Edit Details
      </button>
    </div>

    <!-- Profile Details -->
    <div class="row my-5">
      <div class="col-md-4">
        <h4>About Me</h4>
        <p id="about-text"></p>
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
        <h4>contact</h4>
        <ul class="list-unstyled">
          <li><strong>Mail:</strong> 9 AM - 6 PM</li>
          <li><strong>number:</strong> 10 AM - 4 PM</li>
          <li><strong>:</strong> Available upon request</li>
        </ul>
      </div>
    </div>

    <!-- Reviews Section -->
    <div class="my-5">
      <h4>Reviews</h4>
      <div class="card mb-3">
        <div class="card-body">
          <p class="review-stars">★★★★★</p>
          <p>"Jane has been a wonderful caregiver for my mother. She’s attentive, kind, and highly professional."</p>
          <small>- John Smith</small>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <p class="review-stars">★★★★☆</p>
          <p>"Reliable and compassionate service. Highly recommend Jane for elderly care needs."</p>
          <small>- Mary Johnson</small>
        </div>
      </div>

      <!-- Customer Feedback Form -->
      <h5 class="mt-4">Leave Your Feedback</h5>
      <form>
        <div class="mb-3">
          <label for="stars" class="form-label">Rating</label>
          <select id="stars" class="form-select">
            <option value="5">★★★★★</option>
            <option value="4">★★★★☆</option>
            <option value="3">★★★☆☆</option>
            <option value="2">★★☆☆☆</option>
            <option value="1">★☆☆☆☆</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="feedback" class="form-label">Your Feedback</label>
          <textarea id="feedback" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Feedback</button>
      </form>
    </div>
  </div>

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
