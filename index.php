<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/logo.png" type="image/icon type">
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>
<body>
	<img src="img/logo1.png" class="logo">
	<div class="formlogin">
				<a href="signup_login/login_admin.php"><img src="img/icon_doctor1.png"><h3>Login as ADMIN</h3></a>
				<a href="signup_login/login_patient.php"><img src="img/icon_patient1.png"><h3>Login as PATIENT</h3></a><br><br>
				<a href="signup_login/create_account.php" class="create_account">Create an Account / Signup</a>
			</div>
	<footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer>
</body>
</html>
<style>

	img {
		height:200px;
	}
.logo {
    display: block;
    margin: 4% auto;  
    width: 20%;
    height: 20%;
}
a {
	color: black;
 	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	width: 30%;
  	padding: 5px;
  	transition: 0.4s;
  	border-radius: 5px;
}

a:hover {
	background-color: #96DED1;
}

.formlogin {
	margin-left: auto;
	margin-right: auto;
	text-align: center;
}
</style>