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
<h1>FILM AGENDA</h1>
  <div class="movieContainer">
    <?php
    // for ($i = 0; $i < ($jsonData["filmdata"]); $i++) {
    for ($i = 0; $i < 9; $i++) {
      echo $movieBlockTemplate->render($jsonData["filmdata"][$i]);
    }
    ?>
  </div>
</div>
<?php
require 'footer.php';
?>