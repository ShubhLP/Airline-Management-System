<?php
$insert = false;
if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);
  
  if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
  }
   // echo "Success connecting to the db";

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phoneno = $_POST['pno'];
$passportno = $_POST['passportno'];
$source = $_POST['src'];
$destination = $_POST['dest'];
$class = $_POST['class'];
$sql = "INSERT INTO `airline dbms`.`book your tickets` (`name`, `email`, `gender`, `age`, `phoneno`, `passportNo`, `source`, `destination`, `class`) VALUES ('$name', '$email', '$gender', '$age', '$phoneno', '$passportno', '$source', '$destination', '$class');";
// echo $sql;

if($con->query($sql) == true){
    echo "Successfully Inserted";
  $insert=true;
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
                    <li><a href="flight details.php">Flight</a></li>
                    <li><a href="pilot-plane.php">Pilot - Plane</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div id="main-content"> 
        <div id="align">
            <form action="ticket booking.php" method="post">
            <?php
            if($insert == true)
            {
                echo"<p style='text-align: center; font-size: 20px'>Your ticket is booked!</p>";
            }
            ?>
                <h2>Personal Details</h2>
                <label id="name-label">Name: </label><br><input id="name" class="details" type="text" name="name"
                    placeholder="Enter Your Name" required><br>
                <label id="email-label">Email: </label><br><input id="email" class="details" type="email" name="email"
                    placeholder="Enter Your Email" required><br>
                    <label>Gender:</label>
        <div id="radio-button">
            <input type="radio" class="radiobutton" name="gender" value="male" required>Male<br>
            <input type="radio" class="radiobutton" name="gender" value="female" required>Female<br>
            <input type="radio" class="radiobutton" name="gender" value="other" required>Other<br><br>
        </div>
                <label id="number-label">Age: </label><br><input id="number" class="details" type="number" min="7" number="number" name = "age"
                    max="100" placeholder="Enter Your Age" required><br>
                <label id="phone-no-label">Phone: </label><br><input id="phone" class="details" type="tel" pattern="[0-9]{10}" number="phone" name = "pno"
                    placeholder="Enter Your Phone Number" required><br>
                <label id="passport-label">Passport Number: </label><br><input id="passport" class="details" number="passport" name="passportno"
                type="text" pattern="\d{5}" placeholder="Enter Your Passport Number" required><br>

                <!--<h2>Book Your Ticket</h2>-->
                <!--form id="form">-->
                    <label id="source-label">Source:</label><br><input id="name" class="details" type="text" name="src"
                        placeholder="Enter Source" required><br>
                    <label id="destination-label">Destination:</label><br><input id="name" class="details" type="text" name= "dest"
                        placeholder="Enter Source" required><br>
                    <label>Class:</label>
                    <select name="class" id="dropdown" class="details" required>
                        <option disabled selected value="">Select an option</option>
                        <option value="first">First Class</option>
                        <option value="business">Business</option>
                        <option value="economy">Economy</option>
                    </select><br><br>
                    <center><input id="submit" type="submit" value="Book Ticket"></center>
                </form>
        </div>
    </div>
    <footer>
        Copyright &copy; 2021 [COPYRIGHT Shubham Patil] All rights reserved.
    </footer>
</body>

</html>