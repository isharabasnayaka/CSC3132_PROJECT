<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> 
    <style>
        body {
            background-color: #e6f5e7;
           
        }
        .login-container {
            text-align: justify;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color:rgb(247, 245, 162) ;;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: absolute;
            margin-top: 150px; /* Added margin-top to create space between title bar and login section */
            margin-left: 500px;
        }
        .btn-google {
            background-color: #4285F4;
            color: white;
        }
        .btn-google:hover {
            background-color: #357ae8;
        }
        .btn-apple {
            background-color: black;
            color: white;
        }
        .btn-apple:hover {
            background-color: #333;
        }
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
        }
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        .divider::before {
            margin-right: 10px;
        }
        .divider::after {
            margin-left: 10px;
        }
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }
    </style>
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
                <label for="email" class="form-label">EMAIL ADDRESS</label>
                <input type="email" class="form-control" id="email" style="max-width: 360px;" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-4">Continue</button>
            <p class="text-muted text-center" style="font-size: 12px;">
                This site is protected by reCAPTCHA and the Google
                <a href="#" class="text-decoration-none">Privacy Policy</a> and
                <a href="#" class="text-decoration-none">Terms of Service</a> apply.
            </p>
            <div class="divider my-4">or</div>
            <button type="button" class="btn btn-google w-100 mb-2">
                <i class="bi bi-google me-2"></i> Continue with Google
            </button>
            <button type="button" class="btn btn-apple w-100">
                <i class="bi bi-apple me-2"></i> Continue with Apple
            </button>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
