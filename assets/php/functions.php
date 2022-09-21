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
  $betaalwijze = isset($request['betaalwijze']) ? $request['betaalwijze'] : NULL;

  $query = "INSERT INTO Klant (voornaam,achternaam,email) VALUES ('$voornaam','$achternaam','$email')";


    mysqli_query($conn, $query); 
    $uid = mysqli_insert_id($conn);


    $query = "INSERT INTO `Reserveringen` (`ticket_normaal`,`ticket_kind`,`ticket_65`,`betaalwijze`,klant_id) VALUES ($ticket_normaal,$ticket_kind,$ticket_65,'$betaalwijze',$uid) ";
    
    print $query;
    
    mysqli_query($conn, $query);
}