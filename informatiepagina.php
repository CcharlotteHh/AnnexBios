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
<div id="container">
  <main>
    <div class="headerblock">
      <h1>kbk</h1>
    </div>
    <?php
    echo $movieBlockTemplate->render($jsonData["filmdata"][0]);
    ?>
</div>
</div>
</main>
</div>
<?php
require 'footer.php';
?>