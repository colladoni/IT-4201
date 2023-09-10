
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../style.css">

  	<title>Home</title>
</head>
<body>
<a href="../logout.php" style="color: black;
  text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 10%;
    padding: 5px;
    transition: 0.4s;
    border-radius: 5px;
    float: right;
    font-size: 30px;
    font-weight: bold;">
Logout</a>

</script> 
</div>

  <div class="container" style="margin-top: 2%;">
    <h2 align="center">SCHEDULE</h2>
      <div id="calendar"></div>

<script>
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'includes/load.php'

   });
  });
   
</script>
  </div>
<footer>
    Project Purposes | University of San Carlos | IT 4201 | 2022-2023
  </footer> 
</body>
</html>
<style>
  a:hover {
  background-color: #96DED1;
}
</style>

