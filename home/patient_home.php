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
	<title>Home</title>
</head>
<body>

<div class="navbar">
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">MENU <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
  		<a href="patient_home.php" class="active">Home</a>
      <a href="patient_profile.php">Profile</a>
      <a href="../logout.php">Logout</a>
  </div>
  </div> 
</div>

	<div class="formlogin">
		<a href="services.php"><img src="../img/logo1.png"><h3>SERVICES</h3><p>Services offered by Arriesgado Dental Clinic.</p></a>
		<a href="req_app.php"><img src="../img/logo1.png"><h3>REQUEST APPOINTMENT</h3><p>Set appointment with your preferred date and time.</p></a>
	</div>

  <footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer>
</body>
</html>

<style>
img {
	height: 75%;
	width: 75%;
}

.formlogin a {
	color: black;
 	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	width: 20%;
  	padding: 10px;
  	transition: 0.4s;
  	border-radius: 5px;
}

.formlogin a:hover {
	background-color: #96DED1;
}

.formlogin {
	margin-top: 13%;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
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