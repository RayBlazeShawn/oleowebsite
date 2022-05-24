<?php
$insert = false;
if(isset($_POST['ReliefValve'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    // Collect post variables
    $ReliefValve = $_POST['ReliefValve'];
    $PilotOperatedCheckValve = $_POST['PilotOperatedCheck Valve'];
    $ReducingValve = $_POST['ReducingValve'];
    $ThrottleValve = $_POST['ThrottleValve'];
    $DirectionValve = $_POST['DirectionValve'];
    $sql = "INSERT INTO `products` (`ReliefValve`,`PilotOperatedCheck Valve`,`ReducingValve`,`ThrottleValve`,`DirectionValve`) VALUES ('$ReliefValve', '$PilotOperatedCheckValve', '$ReducingValve', '$ThrottleValve', '$DirectionValve')";
     echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
