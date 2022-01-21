<?php
$insert = false;
if(isset($_POST['flightname'])){
    $server = "localhost"; 
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password); 
    
    if(!$con) {  
        die("connection to this database failed due to".mysqli_connect_error());
    }   
    // echo "success connecting to the db"; 

    $flightname = $_POST['flightname']; 
    $planenumber = $_POST['pnumber']; 
    $firstclassfare = $_POST['fcfare'];
    $businessclassfare = $_POST['bcfare']; 
    $economyclassfare = $_POST['ecfare'];
    $sql = "INSERT INTO `airline dbms`.`flight details`(`flightname`, `pnumber`, `firstclassfare`, `businessclassfare`, `economyclassfare`) 
    VALUES ('$flightname', '$planenumber', '$firstclassfare', '$businessclassfare', '$economyclassfare');";
    // echo $sql;

    if($con->query($sql) == true){ 
        // echo "successfully Inserted";
        $insert = true;
    } 
    else{ 
        echo "ERROR : $sql <br> $con->error";
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

</head>

<body>
    <header>
        <div class="container">
            <img id="img-header" src="images/airline-logo.jpg" alt="airline-logo" class="logo" width="150" height="150">
            <h1>SkyWay Airlines</h1>

            <nav>
                <ul>
                    <li><a href="ticket booking.php">Ticket Booking</a></li>
                    <li><a href="pilot-plane.php">Pilot - Plane</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="main-content">
        <div id="align">
            <form id="form" action = "flight details.php" method = "POST">
            <?php
            if($insert == true)
            {
                echo"<p style='text-align: center; font-size: 20px'>Flight details Added!</p>";
            }
            ?>
                <h2>Flight Details</h2>
                <label id="flightname-label">Flight Name: </label><br><input id="flightname" class="details" type="text" name=" flightname"
                    placeholder="Enter Plane Name" required><br>
                <!--Here add plane no.: 12345-->
                <label id="planeno-label">Plane Number: </label><br><input id="pnumber" class="details" type="text" pattern="\d{5}" name="pnumber"
                    placeholder="Enter Plane Number" required><br>
                <label id="first-label">First Class Fare (Rs.) </label><br><input id="fcfare" class="details" type="text" pattern="^\$\d{1,3}(.\d{3})*(\,\d+)?$" name="fcfare" data-type="currency" 
                    placeholder="Enter First Class Fare" required><br>
                <label id="busi-label">Business Class Fare (Rs.) </label><br><input id="bcfare" class="details" type="text" pattern="^\$\d{1,3}(.\d{3})*(\,\d+)?$" name="bcfare" data-type="currency" 
                    placeholder="Enter Business Fare" required><br>
                <label id="eco-label">Economy Class Fare (Rs.) </label><br><input id="ecfare" class="details" type="text" pattern="^\$\d{1,3}(.\d{3})*(\,\d+)?$" name="ecfare" data-type="currency" 
                    placeholder="Enter Economy Fare" required><br>

                    <center><input id="submit" type="submit" value="Add Flight"></center>
                </form>
        </div>
    </div>
    <footer>
        Copyright &copy; 2021 [COPYRIGHT Shubham Patil] All rights reserved.
    </footer>
</body>

</html>
  
