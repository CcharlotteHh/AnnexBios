<?php
$rawJSONData = file_get_contents('assets/json/data.json');
$jsonData = json_decode($rawJSONData, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Annex Bios</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div id="container">
    <header>
      <img src="assets/img/logo.png" alt="AnnexBios logo" onclick="window.location.href='index.php'">
      <ul>
        <li><a href="filmagenda.php">FILM AGENDA</a></li>
        <li><a href="#">ALLE VESTIGINGEN</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </header>
    <nav>
      <a href="#" class="ticketlink">Koop Je Tickets</a>
      <form method="post" class="navform" action="#">
        <select name="movieoption" class="movieoption">
          <option selected="selected" value="kies je film">Kies je film</option>
          <?php
          for ($i = 0; $i < 9; $i++) {
            echo "<option value='".$jsonData["filmdata"][$i]["film_title"]."'>".$jsonData["filmdata"][$i]["film_title"]."</option>";
          }
          ?>
        </select>
        <input type="button" value="Bestel Tickets" class="bestelticketsbtn" onclick="window.location.href='bestel.php'">
      </form>
    </nav>