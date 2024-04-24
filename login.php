<?php
  include 'header.php';
  session_start();
  if(isset($_SESSION["username"])){
    session_destroy();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>

<div class="container2">
    <div class="left-section">
     
        <h1><span>Get access to everything</span><br>HEALTHCARE GUIDANCE<br>offers</h1>
        <div class="blue-box">
            <div class="circle"></div>
            <h3>Expert Insights and patient stories </h3>
            <div class="clearfix"></div>
            <div class="circle"></div>
            <h3 class="new-line">Saved Articles and conditions </h3>
          </div>
          
          
    </div>
    
    <div class="right-section">
        <h3>Welcome Back!</h3>
        <img src="img/login.jpg" alt="Login Logo" class="login-logo">
      <form action="#" method="POST" class="login-form">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <div class="form-actions">
          <label><input type="checkbox" name="remember"> Remember me</label>
          <a href="#" class="forgot-password">Forgot password?</a>
        </div>
        <button type="submit" class="btn-login">Login</button>
        <div class="signup-link">
          Don't have an account? <a href="#">Sign up</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<?php
  include 'footer.php';
?>