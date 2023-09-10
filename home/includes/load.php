<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=appointment_book', 'root', '');

$data = array();

$query = "SELECT * FROM appointment";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'title' => $row["lname"],
  'start' => $row["date"] . ' ' . $row["time"],
  'end' => $row["date"] . ' ' . date('H:i:s', strtotime($row["time"] . '+1 hour'))
 );
}

echo json_encode($data);

?>
