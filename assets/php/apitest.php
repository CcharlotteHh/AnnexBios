<?php
  $filmID = (int)$_REQUEST['film_id'];
  $json = file_get_contents('https://annexbios.nickvz.nl/api/?film_id='.$filmID);
  $data = json_decode($json, true);
  
  echo "<img src='".$data['filmdata'][0]['film_foto']."' alt='".$data['filmdata'][0]['film_titel'].">";