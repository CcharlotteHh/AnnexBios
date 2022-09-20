<!DOCTYPE html>
<html lang="en">
<?php
require 'header.php';
?>  

<body>
  <div id="container">
    <main class="ordermain">
      <h1>TICKETS BESTELLEN</h1>
      <div class="datetime">
        <p class="moviename">Jurrasic World</p>
        <select name="dateoption" class="dateoption">
          <option selected="selected" value="datum">Datum</option>
          <option value="" name=""></option>
        </select>
        <select name="dateoption" class="dateoption">
          <option selected="selected" value="datum">Datum</option>
          <option value="" name=""></option>
        </select>
      </div>
      <form method="post" class="orderform" action="#">
        <!--MAIN FORM WHERE ALL ORDER STEPS WILL TAKE PLACE-->
        <div class="stap1">
          <h2>STAP 1: KIES JE TICKET</h2>
          <div class="ticketoptions">
            <div class="optionheaders">
              <p>TYPE</p>
              <P>PRIJS</P>
              <p>AANTAL</p>
            </div>
            <hr>
            <div class="optiondropdowns">
              <label for="ticket_normaal">Normaal</label>
              <select name="ticket_normaal" id="ticket_normaal" name="ticket_normaal">
                <option value="0" name=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
              <label for="ticket_kind">Kind t/m 11 jaar</label>
              <select name="ticket_kind" id="ticket_kind" name="ticket_kind">
                <option value="0" name=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
              <label for="ticket_65">65+</label>
              <select name="ticket_65" id="ticket_65" name="ticket_65">
                <option value="0" name=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
              </select>
            </div>
            <hr>
          </div>
          <div class="voucerpart">
            <!--optie om voucher code toe te voegen. hoe gaan we dit uitwerken want er kan geen form in een form genest worden-->
            <label for="voucher">VOUCHERCODE</label>
            <input type="text" placeholder="code" name="vouchercode">
            <button type="button">Toevoegen</button>
          </div>
        </div>
        <div class="stap2">
          <h2>STAP 2:KIES JE STOEL</h2>
        </div>
        <div class="stap3">
          <h2>STAP 3: CONTROLEER JE BESTELLING</h2>
          <div class="controlcontainer">
            <img src="" alt="" class="controlimg">
            <div class="controlimg">
              <p>Jurrasic World</p>
              <div class="filmcerts"></div>
            </div>
            <div class="overviewtext">
              <p>Bioscoop:</p>
              <p>Wanneer:</p>
              <p>Stoelen:</p>
              <p>Tickets:</p>
              <p class="totaal">Totaal</p>
            </div>
          </div>
          <div class="stap4">
            <h2>STAP 4: VUL JE GEGEVENS IN</h2>
            <div class="information">
              <input type="text" placeholder="Voormaan*" required="required">
              <input type="text" placeholder="Achternam*" required="required">
              <input type="email" placeholder="E-mailadres*" required="required">
              <input type="email" placeholder="E-mailadres*" required="required">
            </div>
          </div>
          <div class="stap5">
            <h2>STAP 5: KIES JE BETAALWIJZE</h2>
            <div class="paymentoptios">
              <input type="checkbox" name="nbb"><img src="" alt="nbb">
              <input type="checkbox" name="maestro"><img src="" alt="maestro">
              <input type="checkbox" name="ideal"><img src="" alt="ideal">
              <input type="checkbox" name="nbb">Ja, ik ga akkoord met de <a href="#" class="ticketlink">algemene voorwaarden</a></input>
            </div>

          </div>
          <input type="submit" value="AFREKENEN" required="required" />
      </form>

    </main>
    <?php
    require 'footer.php';
    ?>
  </div>
</body>

</html>