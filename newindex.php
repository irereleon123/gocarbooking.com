<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<doctype html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<div class="header">
<h2></h2>
</div>
<div class="main">
    <div class="nav-bar">
        
           <fieldset> <center><h1>Car Booking</h1></center></fieldset>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="type to text">
                <a href="#"><button class="btn">search</button></a>
            </div>

    </div>
    <div class="menu">
        <ul>
            <li><a href="http://localhost/final/menu.php">MENU</a></li>
            <li><a href="http://localhost/final/about.php">ABOUT US</a></li>
            <li><a href="http://localhost/final/cont.php">CONTACT US</a></li>
        </ul>
    </div>
    <div class="content">
                <h1>BOOKCAR & <br><span>YOUR</span><br>TICKET TRAVEL</h1>
                <p class="book">Welcome to Car booking system tha helps you to book for travel you <br> want to make safely at home and then keep our <b>SMS</b> as proofe of your booked travel</p>
                <p><b>Please join us for carbooking system!!</b></p>
            <div class="book">

                <div class="content">
                    <!-- notification message -->
                    <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success" >
                        <h3>
                        <?php 
                            echo $_SESSION['success']; 
                            unset($_SESSION['success']);
                        ?>
                        </h3>
                    </div>
                    <?php endif ?>
              
                  <!-- logged in user information -->
                  <?php  if (isset($_SESSION['username'])) : ?>
                      <p class="wel" >Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
                      <button class="lee">
                          <p><a href="login.php?logout='1'" style="color: white;"><a href="logout.php">logout</a></a></p></button>
                  <?php endif ?>
              </div><br><br>
              <fieldset>
                     <footer class="footer">
                        <p>this web designed by rusakara leon</p>
                     </footer> 
                     </fieldset>
              </body>
              </html>