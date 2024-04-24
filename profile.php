<?php
  include 'header.php';
  session_start();
?>
<h2>Welcome <?php echo $_SESSION["username"];?></h2>

<?php
  include 'footer.php';
?>