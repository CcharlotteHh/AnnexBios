<?php
require 'header.php';
require __DIR__ . '/vendor/autoload.php';

$rawJSONData = file_get_contents('assets/json/data.json');
$jsonData = json_decode($rawJSONData, true);

//instance mustache
$mustache = new Mustache_Engine(array('entity_flags' => ENT_QUOTES, 'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')));
//load mustache template
$movieBlockTemplate = $mustache->loadTemplate('movieInformation');
?>
<main>
  <?php
  $id = $_GET['movie'] - 1;
  echo $movieBlockTemplate->render($jsonData["filmdata"][$id]);
  ?>
<div class="buttonandtrailer">
<button class="kooptickets">
      KOOP JE TICKETS
    </button>
<div class="trailer">
  trailer placeholder
</div>
</div>
</main>
<?php
require 'footer.php';
?>