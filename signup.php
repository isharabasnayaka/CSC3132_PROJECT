<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="cssstyles/signup.css">
</head>
<body>
    <div class="signup-container">
        <h2>Create an Account</h2>
        <form action="signup connection.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
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
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
        </form>
        <div class="form-footer">
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </div>
</body>
</html>
