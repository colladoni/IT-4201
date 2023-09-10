<?php

session_start();

include_once 'includes/dbconnection.php';


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password); 

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from patient_profile where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['Patient_ID'] = $user_data['Patient_ID'];
						header("Location: ../home/patient_home.php");
						die;
					}
				}
			}
			
			echo "<h3 style='text-align: center;'>Incorrect Username and Password Combination!</h3>";
		}else
		{
			echo "<h3 style='text-align: center;'>Please Fill out the Form!</h3>";
		}
	}

?>
 
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../img/logo.png" type="image/icon type">
	<link rel="stylesheet" href="../style.css">
	<title>Login as Patient</title>
</head>
<body>
	<form method="POST">
		<label>Username:</label>
		<input type="text" name="username" placeholder="Enter Username" autocomplete="off">
		<br><br>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Enter Password">
		<br><br><br>
		<button type="submit" class = "login" value="Login">LOGIN</button><br><br><br>
		<a href="../index.php">Cancel</a>
	</form>	
<footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer>	
</body>
</html>
<style>
	form {
		text-align: center;
		width: 30%;
		margin-top: 10%;
		margin-left: auto;
		margin-right: auto;
		border: 3px solid;
		padding: 5% 2% 5% 2%;
	}

	a {
		font-family: 'Source Sans Pro', sans-serif;	
		background-color: white;
		color: black;
		width: 20%;
		padding: 9px;
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