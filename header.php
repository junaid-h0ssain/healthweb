<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Guidance</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>
    
    <section id="header">
      
       
        <div class="logo-container">
            <div class="dropdown">
              <i id="bar" class="fas fa-outdent"></i>
              <div id="menu" class="menu">
                <a href="#foot">Contact</a>
                <a href="wellness_program.php">Wellness Programs</a>
                <a href="FAQ_s_support.php">FAQs and Support </a>
                <a href="home.php#calculator">Health Calculator</a>
              </div>
            </div>
            
            
            
  
              <a href="home.php">
                <img src="img/logo.png" class="logo" alt="Logo">
    
             
          </div>

        <div class="navbar-container">
        <?php if(isset($_SESSION["username"])): ?>
            <ul id="navbar">
                
                <li><a style="background-color: red;"  href="drugs_suppliment.php">Drugs Suppliment</a></li>
                <li><a style="background-color: red;"  href="find_doctors.php">Find Doctors</a></li>
                <li><a  style="background-color: red;"href="Emergency_Numbers.php">Emergency numbers</a></li>
                <li class="active" ><a href="symptoms.php" ><?php echo $_SESSION["username"]; ?></a></li>
                <li><a style="background-color: red;" href="login.php">Log Out</a></li>

            </ul>
          <?php else: ?>
            <ul id="navbar">
                
                <li><a   href="drugs_suppliment.php">Drugs Suppliment</a></li>
                <li><a  href="find_doctors.php">Find Doctors</a></li>
                <li><a  href="Emergency_Numbers.php">Emergency numbers</a></li>
                <li class="active" ><a href="login.php" >Login</a></li>
                <li><a href="create.php">Create</a></li>

            </ul>
            <?php endif; ?>
        </div>
        
</section>
</body>
</html>

<?php
    session_abort();
?>