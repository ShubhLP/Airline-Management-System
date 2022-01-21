<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection died ".mysqli_connect_error());
    }
    // echo "success connecting to the db";
    $name = $_POST['name'];
    $pnumber = $_POST['pnumber'];
    $pname = $_POST['pname'];
    $pid = $_POST['pid'];
    $sql = "INSERT INTO `airline dbms`.`pilot-plane`(`name`, `pnumber`, `pname`, `pid`) VALUES
     ('$name','$pnumber','$pname','$pid');";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="airline dbms.css">
    <title>Airline Database Management System</title>
    <style>
        <?php include "airline dbms.css" ?>
    </style>

</head>

<body>
    <header>
        <div class="container">
            <img id="img-header" src="images/airline-logo.jpg" alt="airline-logo" class="logo" width="150" height="150">
            <h1>SkyWay Airlines</h1>

            <nav>
                <ul>
                    <li><a href="ticket booking.php">Ticket Booking</a></li>
                    <li><a href="flight details.php">Flight</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="main-content">
        <div id="align">
            <form id="form" action="pilot-plane.php" method="POST">
            <?php
            if($insert == true)
            {
                echo"<p style='text-align: center; font-size: 20px'>Entry Added!</p>";
            }
            ?>
                <h2>Plane Details</h2>
                <label id="planename-label">Plane Name: </label><br><input name="name" id="name" class="details" type="text"
                    placeholder="Enter Plane Name" required><br>
                <label id="planeno-label">Plane Number: </label><br><input name="pnumber" id="pnumber" class="details" type="text" pattern="\d{5}"
                    placeholder="Enter Plane Number" required><br>

                <h2>Pilot Details</h2>
                <label id="pilotname-label">Pilot Name: </label><br><input name="pname" id="pname" class="details" type="text"
                    placeholder="Enter Pilot Name" required><br>
                <label id="id-label">Pilot ID: </label><br><input name="pid" id="pid" class="details" type="text" pattern="\d{5}"
                    placeholder="Enter Pilot ID" required><br>
                
                <center><input id="submit" type="submit"></center>
            </form>
        </div>
    </div>
    <footer>
        Copyright &copy; 2021 [COPYRIGHT Shubham Patil] All rights reserved.
    </footer>
</body>

</html>