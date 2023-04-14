<!doctype html>
<title>Menu</title>
<link rel="stylesheet" type="text/css" href="st.css">
</head>
<body>

<div class="header">
<h2></h2>
</div><br><br>
<div class="main">
    <div class="nav-bar">
        
           <fieldset> <center><h1>Car Booking</h1></center></fieldset>
    </div>
</div><br><br><br>
<fieldset class="booking">
    <center><img class="car-book" src="../images/download (2).jpeg" alt=""></center>
    <p>Welcome to car booking system <br> After choose the location that you want to go thank you <br>
    now it's your time to fill your booking form in order to specify where you are and where you are going <br><br><br>
<center><button class="bookin"><a href="cruds/bookcreate.php">Booking</a></button></center></p>
</fieldset>
<fieldset class="destination"><br><br><br>
    <center><p><u>Those are our destinations if you want choose</u></p></center>
    <center><img class="img-dest" src="../images/free messemger.png" alt="" srcset=""></center>
    <p><br>
    <?php 

// include "dbconnection.php";
session_start();
$con=mysqli_connect("localhost","root","","carbooking_system")or die("connection failed");

$sql = "SELECT * FROM destination";

$result = $con->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Destinations</h2>

<table class="table">

    <thead>

        <tr>

        <th>pstreet</th>

        <th>dcity</th>

        <!--<th>action</th>-->



    </tr>

    </thead>

    <tbody> 
                    <?php

while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['pstreet']; ?></td>
    <td><?php echo $row['dcity']; ?></td>

    <!--<td><a class="btn btn-info" href="updatedestination.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deletedestination.php?id=<?php echo $row['id']; ?>">Delete</a></td>-->
</tr>
<?php
} // end while loop
?>

</table>

    </div> 

</body>

</html>

