<?php
 
session_start();

include_once 'dbconnection.php';

if (isset($_POST['book'])) {

$Patient_ID = $_POST['Patient_ID'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$date = $_POST['date'];
$time = $_POST['time'];
$purpose = $_POST['purpose'];

$sql = "INSERT INTO appointment (Patient_ID, lname, fname, mname, date, time, purpose) VALUES ('$Patient_ID', '$lname', '$fname', '$mname', '$date', '$time', '$purpose')";
mysqli_query($conn, $sql);
    
    $_SESSION['success_message'] = "Booked successfully";
    header("location: ../req_app.php");
    exit();
}
S
?>

