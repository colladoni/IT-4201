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
  	<title>Services</title>
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

<section class = "contact-section">
      <div class = "contact-bg">
        <h2>SERVICES OFFERED</h2>
        <div class = "line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class = "text">At Arriesgado Dental Clinic, we provide a comprehensive range of services to cater to all your oral health needs. Our experienced and skilled team of dentists offers a wide array of treatments to help you achieve a healthy and beautiful smile.</p>

      </div>
</body>
<body>
      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span>Restoration</span>
          </div>
          <div>
            <span>Oral Prophylaxix</span>
          </div>
          <div>
            <span>Tooth Extraction</span>
          </div>
          <div>
            <span>Impaction</span>
          </div>
          <div>
            <span>Brace</span>
          </div>
          <div>
            <span>Dentures</span>
          </div>
          <div>
            <span>Fixed Bridge</span>
          </div>
          <div>
            <span>Metal Framework</span>
          </div>
          <div>
            <span>Jacket Crown</span>
          </div>
           <div>
            <span>Retainer</span>
          </div> 
          <div>
            <span>Porcelain</span>
          </div> 
          <div>
            <span>Cleaning</span>
          </div> 

            </section>



  <footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer>
</body>
</html>

<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;  
  width: 15%;
  height: 15%;
}
h2 {
  text-align: center;
  font-size: 20px;
  color: white;
  margin-top: 0px;
}
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Source Sans Pro', sans-serif; 
    line-height: 1.5;
}
.contact-bg{
    height: 40vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(../img/service.jpg);
    background-position: 50% 100%;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.contact-bg h3{
    font-size: 1.3rem;
    font-weight: 400;
}
.contact-bg h2{
    font-size: 3rem;
    text-transform: uppercase;
    padding: 0.4rem 0;
    letter-spacing: 4px;
}
.line div{
    margin: 0 0.2rem;
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 3px;
    width: 70px;
    background: #6cdacf;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
}
.line div:nth-child(2){
    width: 10px;
    height: 10px;
    background: #6cdacf;
    border-radius: 50%;
}
.text{
    font-weight: 300;
    opacity: 0.9;
}
.contact-bg .text{
    margin: 1.6rem 0;
}
.contact-body{
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 1rem;
}
.contact-info{
    margin: 2rem 0;
    text-align: center;
    padding: 2rem 0;
    font-weight: bold;
}
.contact-info span{
    display: block;
    color: black;

}
.contact-info div{
    margin: 0.8rem 0;
    padding: 1rem;
}
.contact-info span .fas{
    font-size: 2rem;
    padding-bottom: 0.9rem;
    color: #f7327a;
}
.contact-info div span:nth-child(2){
    font-weight: 500;
    font-size: 1.1rem;
}
.contact-info .text{
    padding-top: 0.4rem;
    font-size: 1.1rem;
}
.contact-form{
    padding: 2rem 0;
    border-top: 1px solid #c7c7c7;
}
.contact-form form{
    padding-bottom: 1rem;
}
.form-control{
    width: 100%;
    border: 1.5px solid #c7c7c7;
    border-radius: 5px;
    padding: 0.7rem;
    margin: 0.6rem 0;
    font-family: 'Source Sans Pro', sans-serif; 
    font-size: 1rem;
    outline: 0;
}
.form-control:focus{
    box-shadow: 0 0 6px -3px rgba(48, 48, 48, 1);
}

@media screen and (min-width: 768px){
    .contact-bg .text{
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-info{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (min-width: 992px){
    .contact-bg .text{
        width: 50%;
    }
    .contact-form{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }
}
@media screen and (min-width: 1200px){
    .contact-info{
        grid-template-columns: repeat(4, 1fr);
    }
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
