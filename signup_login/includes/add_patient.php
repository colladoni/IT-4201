<?php
 
session_start();

include_once 'dbconnection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password); 
$confirm_password = $_POST['confirm_password'];
$patient_lname = $_POST['patient_lname'];
$patient_mname = $_POST['patient_mname'];
$patient_fname = $_POST['patient_fname'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$contact_num = $_POST['contact_num'];
$email_add = $_POST['email_add'];

$sql = "SELECT username FROM patient_profile WHERE username='".$username."'";
$result = $conn->query($sql);

if($result->num_rows >= 1) {
     $_SESSION['success_message'] = "Username exists, Please try something else!.";
    header("location: ../create_account.php");
    exit();

} if($_POST["password"] !== $_POST["confirm_password"]) {
    $_SESSION['success_message'] = "Password does not match!.";
    header("location: ../create_account.php");
    exit();

} else {

$sql = "INSERT INTO patient_profile (username, password, patient_lname, patient_mname, patient_fname, birth_date, gender, contact_num, email_add) VALUES ('$username', '$password', '$patient_lname', '$patient_mname', '$patient_fname', '$birth_date', '$gender', '$contact_num', '$email_add')";

$result = $conn->query($sql);
if($result)
            {
    
    $_SESSION['success_message'] = "Saved successfully.";
    header("location: ../create_account.php");
    exit();
}
else{
    $_SESSION['success_message'] = "Error Occured.";
    header("location: ../create_account.php");
    exit();
}
}
?>

