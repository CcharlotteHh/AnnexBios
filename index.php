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
      <main>
        <div class="indexinfo">
          <div class="annex2info">
            <h1>WELKOM BIJ ANNEXBIOS 2</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
              commodo ligula eget dolor. Aenean massa. Cum sociis natoque
              penatibus et magnis dis parturient
            </p>
            <button>BEKIJK DE DRAAIENDE FILMS</button>
          </div>
          <div class="maps">
            <div class="mapandinfo">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2465.392695329367!2d4.130585215667547!3d51.83552359447989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c451c6f4434d53%3A0x20bb4b6bcdd57904!2sRijksstraatweg%2042%2C%203223%20KA%20Hellevoetsluis!5e0!3m2!1snl!2snl!4v1663589163143!5m2!1snl!2snl"
                width="600"
                height="220"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
              <div class="info">
            <div class="infopin">
                <i class="fa-sharp fa-solid fa-location-dot pin"></i>
                <p>Rijksstraatweg 42
                3223 KA Hellevoetsluis</p>
            </div>
            <div class="infopin">
                <i class="fa-solid fa-phone pin"></i>
                <p>Rijksstraatweg 42
                3223 KA Hellevoetsluis</p>
            </div>
            <div class="bereik">
                <p>BEREIKBAARHEID</p>
                <p>Rijksstraatweg 42
                3223 KA Hellevoetsluis</p>
            </div>
              </div>
            </div>
            <figure class="imageindex">
              <img src="assets/img/Hellevoetssluis.png" alt="hellevoetsluis" />
            </figure>
          </div>
        </div>
        <div class="filmagenda">
        <div class="headerblock">
        <h2>FILM AGENDA</h2>
    </div>
    <div class="filterblock">
    <i class="fa-solid fa-bars filtericon"></i>
    <div class="films">
    <i class="fa-solid fa-circle-arrow-down"></i><p>Films</p>
    </div>
    <div class="dezeweek">
    <input type="radio" name="dezeweek">Deze week</input>
    </div>
    <input type="radio" name="vandaag" id="vandaag">Vandaag</input>
    <select name="categoryfilmagenda" class="categoryoption">
    <option selected="selected" value="kies je categorie">CATEGORIE</option>
    </select>
    </div>
    <div class="movieContainer">
    <?php
    // for ($i = 0; $i < ($jsonData["filmdata"]); $i++) {
    for ($i = 0; $i < 9; $i++) {
      echo $movieBlockTemplate->render($jsonData["filmdata"][$i]);
    }
    ?>
  </div>
    </div>
      </main>
      <?php
require 'footer.php';
?>