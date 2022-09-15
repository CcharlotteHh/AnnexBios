<?php

require 'db.php';

function afrekenen($request)
{
  global $conn;
  $ticket_normaal = $request['ticket_normaal'];
  $ticket_kind = $request['ticket_kind'];
  $ticket_65 = $request['ticket_65'];
  $voornaam = mysqli_real_escape_string($conn, $request['voornaam']);
  $achternaam = mysqli_real_escape_string($conn, $request['achternaam']);
  $email = $request['email'];
  // $betaalwijze = mysqli_real_escape_string($conn, $request['betaalwijze']);
  $betaalwijze = $request['betaalwijze'];

  $query = "INSERT INTO `Reserveringen`(`ticket_normaal`,`ticket_kind`,`ticket_65`,`betaalwijze`) VALUES('$ticket_normaal','$ticket_kind','$ticket_65','$betaalwijze')";
  $execute_query = mysqli_query($conn, $query);
  if ($execute_query) {
    echo "into reserveringen succesfull";
  }

  $query2 = "INSERT INTO `Klant`(`voornaam`,`achternaam`,`email`) VALUES('$voornaam','$achternaam','$email')";
  $execute_query2 = mysqli_query($conn, $query2);
  if ($execute_query2) {
    echo "into klant succesfull";
  }
}
