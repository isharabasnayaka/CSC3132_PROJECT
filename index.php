<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareBond - Elder and Patient Caregiver Matching System</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="cssstyles/homecss.css">
</head>
<body>
<!----------------------------------title bar-------------------------------------------------------------------------------------------->
<section>
    <div class="navbar">
        <p class="logo" style="margin-top: 0px;">Care bond....</p>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="service.php">Service</a></li>
          <li><a href="signup.php">Sign Up</a></li>
          <li><a href="login.php">Login</a></li>
          
        </ul>
    </div>
</section>

<!--------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------image and search bars------------------------------------------------------->
<section id="home">
    <div class="col-md-7 bcimage">
        <h2 class="mb-3 highlight" style="top:150px; left: 40px; position: absolute;font-family:Bahnschrift Condensed ; ">Find a Caregiver</h3> &nbsp;
        <h3 class="mb-3 highlight" style="top:230px; left: 40px; position: absolute;font-family:Bahnschrift Condensed ; ">Connecting families with,quality, local caregivers</h3>
        
        <!--------------------------------------------------Search Form one ---------------------------------------------------------------- -->
           <!--<p style="top:350px; left: 40px; position: absolute; max-width:400px; font-size:30px;font-family:Bauhaus 93 ;color:black;font-style: bold;">Choose the caregiver closest to you </p>
            &nbsp;
            <input type="text" class="form-control" style="top:400px; left: 40px; position: absolute;max-width:280px;" placeholder="Location" >
            <button class="btn btn-secondary w-90" style="top:450px; left: 40px; position: absolute;">Search</button>
-->
            <p style="top:500px; left: 40px; position: absolute; max-width:400px; font-size:30px;font-family:Bauhaus 93 ;color:rgb(8, 8, 8)">Become a good caregiver </p>
            &nbsp;
            <button class="btn btn-secondary w-90" style="top:550px; left: 40px; position: absolute; color: rgb(24, 236, 236);"><a href="joinnow.php">Register</a></button>
                      
                
    </div>
</section>
<!---------------------------------------------------------------------------------------------------------------------------------------------------->
            
<!-------------------------------------------------------why choose carebond-------------------------------------------------------------------------------->
 <section class="py-5" id="home" style="position:relative; padding: 100px;">
    <div class="container position-relative">
        <!---------------------------------------- Background Pattern ---------------------------------------------->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://www.transparenttextures.com/patterns/asfalt-dark.png') repeat; opacity: 0.1;"></div>
            <!----------------------------------------- Title -------------------------------------------------------------------------------->
                <h1 class="text-center mb-5" style="font-style: italic;font-family: 'Poor Richard'; font-weight: bold; color: #007BFF; z-index: 2; position: relative;">
                  Why Choose CareBond? </h1>
                <p class="text-center mb-5" style="color: #444; z-index: 2; position: relative; max-width: 700px; margin: 0 auto; font-size: 18px;">
                  At CareBond, we understand the importance of trust, flexibility, and personalized care. Discover why families and healthcare providers choose us to meet their caregiving needs.
                </p>
                <!----------------------------------------------------------- Features ----------------------------------------------------------------------->
                    <div class="row g-4">
                    <!------------------------------- Feature 1 --------------------------------------------------------------->
                        <div class="col-md-4">
                        <div class="card feature-card h-100 border-0 shadow-lg rounded-4" style="overflow: hidden; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                        <div class="card-body text-center p-4" style="background: #f1d5b0; border: 2px solid #b2e2cd; position: relative;">
                        <i class="bi bi-person-check-fill fs-1 text-success mb-3"></i>
                        <h4 style="font-weight: bold; color: #055a3b;">Verified Caregivers</h4>
                        <p>Every caregiver in our network has passed rigorous background checks, ensuring peace of mind for families.</p>
                        <ul class="text-start mt-3" style="color: #555; font-size: 14px;">
                          <li>Background verification by certified agencies</li>
                          <li>Ongoing training and certification</li>
                          <li>Ratings and reviews from past clients</li>
                        </ul>
                        </div>
                        </div>
                        </div>
            
                    <!------------------------------------ Feature 2 ---------------------------------------------------------------------->
                        <div class="col-md-4">
                        <div class="card feature-card h-100 border-0 shadow-lg rounded-4" style="overflow: hidden; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                        <div class="card-body text-center p-4" style="background: #ffecd9; border: 2px solid #f7d8b5; position: relative;">
                        <i class="bi bi-clock-fill fs-1 text-warning mb-3"></i>
                        <h4 style="font-weight: bold; color: #d48806;">Flexible Scheduling</h4>
                        <p>Our platform offers various scheduling options tailored to your family’s unique needs.</p>
                        <ul class="text-start mt-3" style="color: #555; font-size: 14px;">
                          <li>Hourly, daily, or long-term care plans</li>
                          <li>Real-time rescheduling options</li>
                          <li>Automated reminders and alerts</li>
                        </ul>
                        </div>
                        </div>
                        </div>
            
                    <!------------------------------------ Feature 3 ------------------------------------------------------------->
                        <div class="col-md-4">
                        <div class="card feature-card h-100 border-0 shadow-lg rounded-4" style="overflow: hidden; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                        <div class="card-body text-center p-4" style="background: #f3d0d0; border: 2px solid #e8baba; position: relative;">
                        <i class="bi bi-heart-fill fs-1 text-danger mb-3"></i>
                        <h4 style="font-weight: bold; color: #ab2626;">Personalized Care</h4>
                        <p>We match you with caregivers based on your preferences and specific requirements.</p>
                        <ul class="text-start mt-3" style="color: #555; font-size: 14px;">
                          <li>Customizable care plans</li>
                          <li>Language and cultural alignment</li>
                          <li>Ongoing support and updates</li>
                        </ul>
                     
                        </div>
                        </div>
                        </div>
                        </div>
            
                
            <div class="text-center mt-5" style="z-index: 2; position: relative;">
            <h4 class="mb-3" style="color: #444;">Ready to find the perfect caregiver?</h4>
            <a href="signup.php" class="btn btn-primary btn-lg">Get Started Now</a>
        </div>
    </div>
 </section>
<!---------------------- ------------------------------------------------------------------------------------------------------------------->
 <!----------------------------------------------------------- How It Works ------------------------------------------>
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5" style="font-family: 'Courier New', Courier, monospace;">How It Works</h2>
    <div class="row">
      <!-- Slideshow Section -->
      <div class="col-md-6">
        <div class="slideshow-container">
          <!-- Slide 1 -->
          <div class="mySlides">
            <img src="images/homeimg/a.jpg" alt="Register" class="img-fluid" style="width: 100%;">
          </div>
          <!-- Slide 2 -->
          <div class="mySlides">
            <img src="images/homeimg/b.jpg" alt="Search" class="img-fluid" style="width: 100%;">
          </div>
          <!-- Slide 3 -->
          <div class="mySlides">
            <img src="images/homeimg/c.webp" alt="Schedule" class="img-fluid" style="width: 100%;">
          </div>
          <!-- Slide 4 -->
          <div class="mySlides">
            <img src="images/homeimg/d.jpg" alt="Quality Care" class="img-fluid" style="width: 100%;">
          </div>
        </div>
        <br>
        <div class="dots-container text-center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>
      
      <div class="col-md-6 d-flex align-items-center">
        <div class="row g-4 w-100">
        
            <!------------------------------ Register -------------------------------------->
            <div class="col-12">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3">
                        <img src="images/homeimg/register.png" alt="Register" class="img-fluid" style="width: 50px; height: 50px;">
                    </div>
                    <div>
                        <h4 class="mb-1">1. Register</h4>
                        <p class="mb-0">Create your account and set up your profile.</p>
                    </div>
                </div>
            </div>
        
            <!----------------------- Search for Caregivers --------------------------------------->
            <div class="col-12">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3">
                        <img src="images/homeimg/search.png" alt="Search" class="img-fluid" style="width: 50px; height: 50px;">
                    </div>
                    <div>
                        <h4 class="mb-1">2. Search for Caregivers</h4>
                        <p class="mb-0">Browse qualified caregivers based on your location, needs, and budget.</p>
                    </div>
                </div>
            </div>
        
            <!-------------------------------- Schedule and Book ------------------------------->
            <div class="col-12">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3">
                        <img src="images/homeimg/calender.webp" alt="Schedule" class="img-fluid" style="width: 50px; height: 50px;">
                    </div>
                    <div>
                        <h4 class="mb-1">3. Schedule and Book</h4>
                        <p class="mb-0">Select a caregiver and book them according to your preferred schedule.</p>
                    </div>
                </div>
            </div>
        
            <!------------------------ Receive Quality Care -------------------------------->
            <div class="col-12">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3">
                        <img src="images/homeimg/care2.png" alt="Quality Care" class="img-fluid" style="width: 50px; height: 50px;">
                    </div>
                    <div>
                        <h4 class="mb-1">4. Receive Quality Care</h4>
                        <p class="mb-0">Enjoy personalized care from a trusted caregiver for your loved ones.</p>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
      
    </div>
  </div>
</section>

<!------------------------------------- Slideshow Script ----------------------->
<script>
  let slideIndex = 0;
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");

  function showSlides() {
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex = (slideIndex + 1) > slides.length ? 1 : slideIndex + 1;
    slides[slideIndex - 1].style.display = "block";
    for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 2000);
  }
  showSlides();
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
                
            
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>