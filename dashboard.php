<doctype html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/dash.css">
    </head>
    <body>
    
    <div class="header">
    <h2></h2>
    </div>
    <div class="main">
        <div class="nav-bar">
            
               <fieldset><center><h1>Car Booking</h1></center></fieldset><br>
    
    <div class="top">

        <div class="search">
        </div>
        <div class="ticket">
            <a href="../final/cruds/bookcreate.php"><button class="dashboard" id="book_">Booked</button>
            <a href="/cruds/drivercreate.php"><button class="dashboard" id="driver_">Drivers</button>
            <a href="/cruds/carcreate.php"><button class="dashboard"id="car_">Cars</button>
            <a href="/cruds/usercreate.php"><button class="dashboard" user="user_">Users</button>
            <a href="/cruds/destinationcreate.php"><button class="dashboard" id="dest_">Destination</button>
        </div>
    </div><br><br>
<fieldset>
<?php 

// include "dbconnection.php";
//session_start();
$con=mysqli_connect("localhost","root","","carbooking_system")or die("connection failed");

$sql = "SELECT * FROM book";

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

        <h2>bookings</h2>

<table class="table">

    <thead>

        <tr>

        <th>name</th>

        <th>email</th>

        <th>Phone</th>

        <th>no_of_passenger</th>

        <th>pick_up_date</th>

        <th>pstreet</th>

        <th>pzip_code</th>

        <th>pcity</th>

        <th>pstreet</th>

        <th>dzip_code</th>

        <th>dcity</th>

        <th>vehicle_type</th>

        <th>side</th>

        <th>crated_at</th>

        <th>action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['no_of_passenger']; ?></td>
    <td><?php echo $row['pick_up_date']; ?></td>
    <td><?php echo $row['pstreet']; ?></td>
    <td><?php echo $row['pzip_code']; ?></td>
    <td><?php echo $row['dcity']; ?></td>
    <td><?php echo $row['dstreet']; ?></td>
    <td><?php echo $row['dzip_code']; ?></td>
    <td><?php echo $row['dcity']; ?></td>
    <td><?php echo $row['vehicle_type']; ?></td>
    <td><?php echo $row['side']; ?></td>
    <td><?php echo $row['created_at']; ?></td>
    <td><a class="btn btn-info" href="/cruds/bookupdate.php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="/cruds/bookdelete.php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
} // end while loop
?>
                    

        <?php       

            

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>




</fieldset><br><br>
<fieldset>
<?php 

// include "dbconnection.php";
//session_start();
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

        <h2>destinations</h2>

<table class="table">

    <thead>

        <tr>

        <th>pstreet</th>

        <th>dcity</th>

        <th>action</th>



    </tr>

    </thead>

    <tbody> 
                    <?php

while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row['pstreet']; ?></td>
    <td><?php echo $row['dcity']; ?></td>

    <td><a class="btn btn-info" href="/cruds/destinationupdate.php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="/cruds/destinationdelete.php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
} // end while loop
?>

</table>

    </div> 

</body>

</html>




</fieldset><br><br>
<fieldset>
<?php 

// include "dbconnection.php";
//session_start();
$con=mysqli_connect("localhost","root","","carbooking_system")or die("connection failed");

$sql = "SELECT * FROM driver";

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

        <h2>driver</h2>

<table class="table">

    <thead>

        <tr>

        <th>Fname</th>

        <th>lname</th>

        <th>telephone</th>

        <th>address</th>

        <th>carID</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

    <?php

while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
        <td><?php echo $row['Fname']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><?php echo $row['telephone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['carID']; ?></td>

        <td><a class="btn btn-info" href="./cruds/driverupdate.php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="./cruds/driverdelete.php echo $row['id']; ?>">Delete</a></td>
              

        <?php    
}
        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>


        <?php    

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>



        <?php    

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>


</fieldset><br><br>
<fieldset>
<?php 

// include "dbconnection.php";
//session_start();
$con=mysqli_connect("localhost","root","","carbooking_system")or die("connection failed");

$sql = "SELECT * FROM users";

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

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>username</th>

        <th>email</th>

        <th>password</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 



<?php

while ($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
        <td><?php echo $row['username']; ?></td>
         <td><?php echo $row['email']; ?></td>
         <td><?php echo $row['password']; ?></td>
       <td><a class="btn btn-info" href="/cruds/userupdate.php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="/cruds/userdelete.php echo $row['id']; ?>">Delete</a></td>

        <?php       

    }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>



</fieldset><br><br>
<fieldset>
<?php 

// include "dbconnection.php";
//session_start();
$con=mysqli_connect("localhost","root","","carbooking_system")or die("connection failed");

$sql = "SELECT * FROM car";

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

        <h2>CAR</h2>

<table class="table">

    <thead>

        <tr>

        <th>plateNO</th>

        <th>power</th>

        <th>model</th>

        <th>mandate</th>

        <th>destinationcode</th>

        <th>vehicle_type</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['plateNO']; ?></td>

                    <td><?php echo $row['power']; ?></td>

                    <td><?php echo $row['model']; ?></td>

                    <td><?php echo $row['mandate']; ?></td>

                    <td><?php echo $row['destinationcode']; ?></td>
                    
                    <td><?php echo $row['vehicle_type']; ?></td>

                    <td><a class="btn btn-info" href="/cruds/carupdate.php echo $row['carID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="/cruds/cardelete.php echo $row['carID']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>


</fieldset><br><br>