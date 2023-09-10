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
  	<title>Request Appointment</title>
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

<?php 
  if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-top: 20px;font-size: 20px;color: red;text-align: center;">
        <?php echo $_SESSION['success_message']; ?></div>
     <?php
        unset($_SESSION['success_message']);
     }
?>

<form autocomplete="off" method="POST" action="includes/req_app.php" enctype="multipart/form-data" style="float: left; margin-left: 40px;">
    
    <input type="hidden" name="Patient_ID" value="<?php echo $user_data['Patient_ID'] ?>" readonly>
    <input type="hidden" name="lname" value="<?php echo $user_data['patient_lname'] ?>" readonly>
    <input type="hidden" name="fname" value="<?php echo $user_data['patient_fname'] ?>" readonly>
    <input type="hidden" name="mname" value="<?php echo $user_data['patient_mname'] ?>" readonly>

    <label>Date:</label>
    <input type="date" id="date" name="date" required>
    <script>
        var dateInput = document.getElementById("date");

        // Set the minimum date to today's date
        var today = new Date();
        var yyyy = today.getFullYear();
        var mm = today.getMonth() + 1;
        var dd = today.getDate();
        if (mm < 10) { mm = "0" + mm; }
        if (dd < 10) { dd = "0" + dd; }
        var minDate = yyyy + "-" + mm + "-" + dd;
        dateInput.setAttribute("min", minDate);

        // Listen for changes to the date input field
        dateInput.addEventListener("change", function(event) {
          // Get the selected date
          var selectedDate = new Date(event.target.value);

          // Check if the selected date is in the past
          if (selectedDate < today) {
            // If the selected date is in the past, reset the date input field to the minimum date
            event.target.value = minDate;
            alert("Please select a date in the future.");
          }
        });
      </script>
    <br><br><br>

    <label>Time:</label>
    <input type="time" name="time" min="08:00:00" max="17:00:00" required>
    <br><br><br>

    <label>Purpose/Concern:</label>
    <br><br>
    <textarea rows="5" cols="30" name="purpose" style="vertical-align: middle; font-family: inherit; padding: 5px;" required></textarea>
    <br><br><br>

    <button type="submit" class = "login" name="book" style="padding: 20px; width: 100px;">BOOK</button><br><br><br>
    <a href="patient_home.php" >Cancel</a>
  </form>

  <div class="container">  
           <?php

            $sql = "SELECT Appointment_ID, date, time, purpose FROM appointment WHERE Patient_ID='".$user_data['Patient_ID']."'";
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  echo "<table>
                            <tr>  
                                <th>Appointment Id</th>
                                <th>Date</th>
                                <th>Time</th>  
                                <th>Purpose</th>
                            </tr> ";

                  while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["Appointment_ID"]. "</td>
                    <td>" . $row["date"]. "</td>
                    <td>" . $row["time"]. "</td>
                    <td>" . $row["purpose"]. "</td>
                    ";
                
                }
                }

?> 
      </table>  
 </div> 

	<footer>
		Project Purposes | University of San Carlos | Information Management II | 2021-2022
	</footer>
</body>
</html>

<style>

  form {
    text-align: center;
    width: 20%; 
    margin-top: 1.5%;
    margin-bottom: 5%;
    margin-left: auto;
    margin-right: auto;
    border: 3px solid;
    padding: 4% 2% 4% 2%;
  }

  form a{
    font-family: 'Source Sans Pro', sans-serif; 
    background-color: white;
    color: black;
    width: 20%;
    padding: 9px;
    font-weight: bold;
    cursor: pointer;
    border: 1px solid;
    text-decoration: none;
}

  form a:hover{
    background-color: red;
    color: white;
    cursor: pointer;
}
  .container a{
    font-family: 'Source Sans Pro', sans-serif;
    color: black;
    width: 20%;
    padding: 9px;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
}
  .container a:hover {
    background-color: #96DED1;
    transition-duration: 0.4s;
    color: black;
    cursor: pointer;
}
.container{  
    max-width: 1000px;  
    margin: 25px 50px 100px;  
    width: 100%; 
    float: right; 
}  
table{  
    border-collapse: collapse;  
    width: 100%;  
}  
table th{  
    background-color: #03ffd1; 
    color: black;  
    padding: 10px;
    border: 1px solid black;  
}  
table td{  
    padding: 12px;  
    color: black;   
    font-size: 1em;  
    text-align: center;
    border: 1px solid black;  
}  

</style>


