<?php
    require_once 'dbconf.php';
?>
<?php
    session_start();

    if(isset($_POST['login'])){
        $mail = mysqli_real_escape_string($connect,$_POST['mail']);
        $pswd = mysqli_real_escape_string($connect,$_POST['pswd']);

        $sql = "SELECT * FROM find_job_applications WHERE email='{$mail}'";
        $result_set = mysqli_query($connect, $sql);

        if($result_set && mysqli_num_rows($result_set) == 1){
            $row = mysqli_fetch_assoc($result_set);
            $hashedPassword = $row['password_hash'];

            if(password_verify($pswd,$hashedPassword)){
                $_SESSION['user_id'] = $row['id'];
                header("Location: profile.php");
            }
        }
    }
?>
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
        <form method="post" action="login.php">
            <div class="mb-5">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="mail" class="form-control" id="email" style="max-width: 360px;" placeholder="Enter your email" required>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pswd" class="form-control" id="password" style="max-width: 360px;" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100 mb-4">Continue</button>
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
