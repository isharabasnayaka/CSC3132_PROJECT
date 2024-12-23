<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cssstyles/logincss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> 
  
</head>
<body>
  <!---------------------title bar----------------------------------------------------------------->
  <section>
    <div class="navbar">
      <p class="logo" style="margin-top: 0px;">Care bond....</p>
   </div>
 </section>

<section >
    <div class="login-container">
        <h2 class="text-center mb-4">Log in</h2>
        <form>
            <div class="mb-5">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" style="max-width: 360px;" placeholder="Enter your email" required>
                <label for="password" class="form-label">Password</label>
                <input type="email" class="form-control" id="password" style="max-width: 360px;" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-4">Continue</button>
            <p class="text-muted text-center" style="font-size: 12px;">
                This site is protected by reCAPTCHA and the Google
                <a href="#" class="text-decoration-none">Privacy Policy</a> and
                <a href="#" class="text-decoration-none">Terms of Service</a> apply.
            </p>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
