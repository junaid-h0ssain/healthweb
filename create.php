<?php
  include 'header.php';
  session_start();
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
          <h3 class="new-line">Saved Articles and conditions</h3>
      </div>
    </div>
    
    <div class="right-section">
      <h3>Welcome!</h3>
      <img src="img/sign up.jpg" alt="Login Logo" class="login-logo">
      <form action="create.php" method="post" class="login-form">
      <input name="username" placeholder="Username" required>
      <input type="password" name="pass" placeholder="Password" required>
      

      <div class="form-actions">
        <label><input type="checkbox" name="remember"> Remember me</label>
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>
      <input type="submit" class="btn-login" name="signup" value="Sign Up">
      </form>
    </div>
  </div>

</body>
</html>

<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "project";
    $conn = "";
    
    try{
        $conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
    }catch(mysqli_sql_exception){
        echo "<h2>MySQL Error. Couldn't connect :-(</h2>";
    }
    if(isset($_POST["signup"])){
        
        $username = $_POST["username"];
        $pass = $_POST["pass"];

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["pass"] = $_POST["pass"];

          
        $sq = "INSERT INTO USER (name,pass) VALUES ('$username','$pass')";
        mysqli_query($conn,$sq);
        header("Location: home.php");
        
    }

    
?>

<?php
  include 'footer.php';
  mysqli_close($conn);
?>