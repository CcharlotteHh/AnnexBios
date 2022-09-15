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
<?php
for ($i = 0; $i < ($jsonData["filmdata"]); $i++) {
  //render mustache template and insert data from jsonData
  echo $movieBlockTemplate->render($jsonData["filmdata"][$i]);
}
?>
<?php
require 'footer.php';
?>