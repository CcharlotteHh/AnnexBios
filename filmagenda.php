<?php
require 'header.php';
require __DIR__ . '/vendor/autoload.php';

$rawJSONData = file_get_contents('assets/json/data.json');
$jsonData = json_decode($rawJSONData, true);

//instance mustache
$mustache = new Mustache_Engine(array('entity_flags' => ENT_QUOTES, 'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')));
//load mustache template
$movieBlockTemplate = $mustache->loadTemplate('movieBlock');
?>
<div id="container">
<div class="headerblock">
        <h2>FILM AGENDA</h2>
    </div>
    <div class="filterblock">
    <i class="fa-solid fa-bars filtericon"></i>
    <div class="films filmsblock">
    <input type="radio" name="dezeweek">Films</input>
    </div>
    <div class="films dezeweek">
    <input type="radio" name="dezeweek">Deze week</input>
    </div>
    <div class="films vandaag">
    <input type="radio" name="dezeweek">Vandaag</input>
    </div>
    <select name=" films categoryfilmagenda" class="films">
    <option selected="selected" value="kies je categorie">CATEGORIE</option>
    </select>
    </div>
  <div class="movieContainer">
    <?php
    for ($i = 0; $i < 9; $i++) {
      echo $movieBlockTemplate->render($jsonData["filmdata"][$i]);
    }
    for ($i = 0; $i < 9; $i++) {
      echo $movieBlockTemplate->render($jsonData["filmdata"][$i]);
    }
    ?>
  </div>
</div>
<?php
require 'footer.php';
?>