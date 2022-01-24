<section class="header">
<!--img srcset nog maken-->
  <img class="header__image" src="./assets/hero-mobile.png">
  <div class="header__text">
    <h1 class="header__title">Futura</h1>
    <h2 class="header__subtitle">Fonts as an expression of culture and identity</h2>
    <h3 class="header__by">by Slanted</h3>
  </div>
</section>
<section class="PaulRenner">
  <div class="PaulRenner__illuDiv">
    <img class="PaulRenner__illuDiv--image" src="./assets/Renner-mobile.png">
    <h2 class="PaulRenner__illuDiv--name">Paul Renner</h2>
    <p class="PaulRenner__illuDiv--date">1878 - 1956</p>
  </div>
  <div class="PaulRenner__text">
  <p class="PaulRenner__text--lead"><?php echo ($texts[6]->value)?></p>
  <p class="PaulRenner__text--body">   <?php echo ($texts[0]->value)?>
</p>
</div>
</section>
<section class="ArmySection">
  <p>Army Army Army Army</p>
</section>
<section class="NaziGermany">
  <div class="NaziGermany__horizontal">
    <div class="NaziGermany__horizontal--div  NaziGermany__horizontal--1">
      <div class="NaziGermany__horizontal--titleDiv">
        <p class="NaziGermany__horizontal--titleBig">NAZI</p>
        <p class="NaziGermany__horizontal--titleSmall">GERMANY</p>
      </div>
      <div class="NaziGermany__horizontal--swipe">
        <img src="">
        <p>Swipe</p>
      </div>
    </div>
    <div class="NaziGermany__horizontal--div NaziGermany__horizontal--2">
      <div class="NaziGermany__horizontal--2--title">
        <p class="NaziGermany__horizontal--2--titleRenner">Paul Renner's</p>
        <p class="NaziGermany__horizontal--2--titleKultur">Kulturbol </br>
        schewismus?</p>
      </div>
      <div class="NaziGermany__horizontal--2--circle">
        <p>Even before 1932, Renner made his opposition to the Nazis very clear, notably in his book “Kulturbolschewismus?” (Cultural Bolshevism?). He was unable to find a German publisher, so it was published by his Swiss friend Eugen Rentsch.</p>
      </div>
    </div>
  </div>
  <div class="bgContainer">
  <div class="bgContainer__div NaziGermany__text--red">
    <p><?php echo ($texts[1]->value)?></p>
    <p><?php echo ($texts[2]->value)?></p>
  </div>
  <div class="bgContainer__div NaziGermany__text--beige">
    <p><?php echo ($texts[3]->value)?></p>
    <p><?php echo ($texts[4]->value)?></p>
  </div>
</div>
</section>

