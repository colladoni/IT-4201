<?php

session_start();

include_once 'includes/dbconnection.php';

function test_input($data) {
	$data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM admin");
    $stmt->execute();
    $result = $stmt->get_result();
		while ($row = $result->fetch_assoc()) {
     
         
        if(($row['username'] == $username) &&
            ($row['password'] == $password)) {
                header("location: ../home/admin_home.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../img/logo.png" type="image/icon type">
	<link rel="stylesheet" href="../style.css">
	<title>Login as Admin</title>
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