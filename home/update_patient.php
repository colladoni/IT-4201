<?php

include_once '../signup_login/includes/dbconnection.php';
include_once '../signup_login/includes/functions.php';

$user_data = check_patient($conn); 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../img/logo.png" type="image/icon type">
	<link rel="stylesheet" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Profile</title>
</head>
<body>

<h2 style="text-align: center;">Update Profile</h2>

<?php 
	if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
    	<div class="success-message" style="margin-top: 20px;font-size: 20px;color: black;text-align: center;">
    		<?php echo $_SESSION['success_message']; ?></div>
     <?php
        unset($_SESSION['success_message']);
     }
?>

	<form autocomplete="off" method="POST" action="includes/update_patient.php" enctype="multipart/form-data">
		<div class="left">

				<label>Patient ID:</label>
				<?php echo $user_data['Patient_ID'] ?>
				<br><br><br>

				<label>Last Name:</label>
				<input type="text" name="patient_lname" value="<?php echo $user_data['patient_lname'] ?>" required>
				<br><br><br>

				<label>First Name:</label>
				<input type="text" name="patient_fname" value="<?php echo $user_data['patient_fname'] ?>" required>
				<br><br><br>

				<label>Middle Name:</label>
				<input type="text" name="patient_mname" value="<?php echo $user_data['patient_mname'] ?>" required>
				<br><br><br>

				<label for="birth_date">Date of Birth:</label>
  			<input type="date" name="birth_date" value="<?php echo $user_data['birth_date'] ?>" required>
  			<br><br><br>

  			<label>Gender:</label>
				<input type="radio" name="gender" value="Male" required> 
				<label for="Male">Male</label>
				<input type="radio" name="gender" value="Female" required>
				<label for="Female">Female</label>
				<br><br><br>

				<label>Contact Number:</label>
				<input type="text" name="contact_num" value="<?php echo $user_data['contact_num'] ?>" required>
				<br><br><br>

				<label>Email Address:</label>
				<input type="email" name="email_add" value="<?php echo $user_data['email_add'] ?>" required>
				<br><br><br>
				

				<button type="submit" name="update" class="register" style="width:30%">UPDATE</button><br><br><br>
				<a href="patient_profile.php">Cancel</a>
		</div>
	</form>
  <footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer>

</body>
</html>
<style>
	.left {
		float: left;
		border: 3px solid;
		width: 20%;
		text-align: center;
		padding: 2%;
		margin-top: 3%;
		margin-left: 36%;
		margin-bottom: 5%;
	}
	.right {
		float: right;
		border: 3px solid;
		width: 20%;
		text-align: center;
		padding: 2%;
		margin-top: 3%;
		margin-right: 20%;
	}

	form a {
		font-family: 'Source Sans Pro', sans-serif;	
		background-color: white;
		color: black;
		width: 20%;
		padding: 10px;
		font-weight: bold;
		cursor: pointer;
		border: 1px solid;
		transition-duration: 0.4s;
		text-decoration: none;
}

	form a:hover {
 		background-color: red;
 		color: white;
 		cursor: pointer;
}
</style>
