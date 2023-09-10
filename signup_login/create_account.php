<?php

session_start();

include_once 'includes/dbconnection.php';
 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../img/logo.png" type="image/icon type">
	<link rel="stylesheet" href="../style.css">
	<title>Signup as Patient</title>
</head>
<body>
<?php 
	if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
    	<div class="success-message" style="margin-top: 20px;font-size: 20px;color: black;text-align: center;">
    		<?php echo $_SESSION['success_message']; ?></div>
     <?php
        unset($_SESSION['success_message']);
     }
?>
	<form autocomplete="off" method="POST" action="includes/add_patient.php" enctype="multipart/form-data">
		<div class="left">
				<label>Username:</label>
				<input type="text" name="username" placeholder="Enter Username" required>
				<br><br><br>

				<label>Password:</label>
				<input type="password" name="password" placeholder="Enter Password" required>
				<br><br><br>

				<label>Confirm Password:</label>
				<input type="password" name="confirm_password" placeholder="Confirm Password" required>
				<br><br><br>

				<label>Last Name:</label>
				<input type="text" name="patient_lname" placeholder="Enter Last Name" required>
				<br><br><br>

				<label>First Name:</label>
				<input type="text" name="patient_fname" placeholder="Enter First Name" required>
				<br><br><br>

				<label>Middle Name:</label>
				<input type="text" name="patient_mname" placeholder="Enter Middle Name" required>
				<br><br><br>

				 <label for="birth_date">Date of Birth:</label>
  				<input type="date" name="birth_date" required> 
  				<br><br><br>

  				<label>Gender:</label>
				<input type="radio" name="gender" value="Male" required>
					<label for="Male">Male</label>
				<input type="radio" name="gender" value="Female" required>
					<label for="Female">Female</label>
				<br><br><br>

				<label>Contact Number:</label>
				<input type="text" name="contact_num" placeholder="Enter Contact Number" required>
				<br><br><br>

				<label>Email Address:</label>
				<input type="email" name="email_add" placeholder="Enter Email Address" required>
				<br><br><br>

				<button type="submit" name="register" class="register" style="width:30%">REGISTER</button><br><br><br>
				<a href="../index.php">Cancel</a>
		</div>
	</form>
<footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer>
</body>
</html>
<style>
	.left {		
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

	a {
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

	a:hover {
 		background-color: red;
 		color: white;
 		cursor: pointer;
}
</style>