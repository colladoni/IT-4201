<?php
 
session_start();

include_once 'dbconnection.php';

if (isset($_POST['update'])) {

$Patient_ID = $_SESSION['Patient_ID'];

$patient_lname = $_POST['patient_lname'];
$patient_mname = $_POST['patient_mname'];
$patient_fname = $_POST['patient_fname'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$contact_num = $_POST['contact_num'];
$email_add = $_POST['email_add'];

$sql = "UPDATE patient_profile SET patient_lname = '$patient_lname', patient_mname = '$patient_mname', patient_fname = '$patient_fname', birth_date = '$birth_date', gender = '$gender',  contact_num = '$contact_num', email_add = '$email_add' WHERE Patient_ID = '$Patient_ID'";

$result = mysqli_query($conn, $sql);
if($result)
            {

    if($result) {
        $_SESSION['success_message'] = "Data Updated!";
        header("location: ../update_patient.php");
        exit();
    }else {
        $_SESSION['success_message'] = "Error!";
        header("location: ../update_patient.php");
        exit();
    }


}
}

?>

