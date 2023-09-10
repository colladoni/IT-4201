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

<div class="navbar">
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">MENU <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
   		<a href="patient_home.php">Home</a>
      <a href="patient_profile.php" class="active">Profile</a>
      <a href="../logout.php">Logout</a>
  </div>
  </div> 
</div>

	<div class="profile">
		<div class="left_prof">
			<img src="../img/user.jpg" class="image_user">
		<h2>
			<?php echo $user_data['patient_lname'] .", ". $user_data['patient_fname'] ." ". $user_data['patient_mname']."<br>";?>
		</h2>
		<a href="update_patient.php"><img src="../img/edit.png" class="edit"></a>
		</div>

	<form method="POST">
		<div class="right_prof">

			<h3 style="margin-bottom: 4%;">Personal Information</h3>

			<label>Date of Birth:</label>
			<?php echo $user_data['birth_date']?>
			<br><br><br>
			<label style="margin-left: 4%;">Gender:</label>
			<?php echo $user_data['gender']?>
			<br><br><br>
			<label>Contact Number:</label>
			<?php echo $user_data['contact_num']?>
			<br><br><br>
			<label style="margin-left: 1%;">Email Address:</label>
			<?php echo $user_data['email_add']?>
			<br><br><br>
			</div>
		</div>
	</form>	

  <footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer>

</body>
</html>
<style>
	h2 {
		 text-align: center;
		}

	.profile {
		width: 62%;
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 5%;
		text-align: center;
	}
	.left_prof {
		float: left;
		border: 1px solid black;
		width: 40%;
		padding: 5% 0 5% 0;
		background-color: #96DED1;
	}
	.right_prof {
		float: right;
		border: 1px solid black;
		width: 59.56%;
		padding: 1% 0 3.48% 0;
	}
	.image_user {
		height: 18%;
		width: 30%;
	}
	.edit {
		height: 4%;
		width: 7%;
	}
	
</style>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
