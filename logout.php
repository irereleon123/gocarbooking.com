<form action="logout.php" method="post">
    <button type="submit" name="logout">Logout</button>
  </form>
  <?php
  session_start();
  
  // Unset all session variables
  $_SESSION = array();
  
  // Destroy the session
  session_destroy();
  
  // Redirect the user to the login page
  header("Location: login.php");
  exit;
  ?>
    