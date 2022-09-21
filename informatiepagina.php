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
    echo $movieBlockTemplate->render($jsonData["filmdata"][0]);
    ?>
</div>
</div>
<button class="kooptickets">
  KOOP JE TICKETS
</button>
</main>

<?php
require 'footer.php';
?>