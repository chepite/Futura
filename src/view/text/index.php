<section class="header">
<!--img srcset nog maken-->
  <img class="header__image" src="./assets/mobile.svg">
  <div class="header__text">
    <h1 class="header__title">Futura</h1>
    <h2 class="header__subtitle"><?php echo $subtitle ?></h2>
    <h3 class="header__by">by Slanted</h3>
  </div>
</section>
<div class="desktop__paul">
    <img class="jaar__illu" src="./assets/1927.svg">

  <!-- <div class="renner"> -->
    <section class="PaulRenner" id="#renner">
    <div class="PaulRenner__illuDiv">
    <img class="PaulRenner__illuDiv--image" src="./assets/Renner-mobile.png">
    <h2 class="PaulRenner__illuDiv--name">Paul Renner</h2>
    <p class="PaulRenner__illuDiv--date">1878 - 1956</p>
    </div>
    <div class="PaulRenner__text">
    <p class="PaulRenner__text--lead"><?php echo $renner_lead ?></p>
    <p class="PaulRenner__text--body">  <?php echo $renner_body ?>
    </p>
    </div>
    </div>
  </section>
  <!-- </div> -->
</div>
<section class="ArmySection" id="nazi">
  <div class="ArmySection__div--anim">
  <p><?php echo $army ?></p>
  <div>
    <div class="ArmySection__div--anim2">
  <p><?php echo $army ?></p>
  <div>
  <div class="ArmySection__div--anim">
  <p><?php echo $army ?></p>
  <div>
  <div class="ArmySection__div--anim2">
  <p><?php echo $army ?></p>
  <div>
    <div class="ArmySection__div--anim">
  <p><?php echo $army ?></p>
  <div>
     <div class="ArmySection__div--anim2">
  <p><?php echo $army ?></p>
  <div>
    <div class="ArmySection__div--anim">
  <p><?php echo $army ?></p>
  <div>
      <div class="ArmySection__div--anim2">
  <p><?php echo $army ?></p>
  <div>
</section>
<section class="NaziGermany">

  <div class="NaziGermany__horizontal">
    <div class="NaziGermany__horizontal--div  NaziGermany__horizontal--1">
      <div></div>
      <div class="eye">
        <img class="eye__gif" src="./assets/_main.gif">
      </div>
      <div class="NaziGermany__horizontal--titleDiv">
        <p class="NaziGermany__horizontal--titleBig">NAZI</p>
        <p class="NaziGermany__horizontal--titleSmall">GERMANY</p>
      </div>
      <div class="NaziGermany__horizontal--swipe">
        <img src="">
        <p>Swipe</p>
      </div>
      <img class="NaziGermany__horizontal--1--portrait" src="./assets/hitler_portrait.svg">
    </div>
    <div class="NaziGermany__horizontal--div NaziGermany__horizontal--2">
      <div class="NaziGermany__horizontal--2--title">
        <p class="NaziGermany__horizontal--2--titleRenner">Paul Renner's</p>
        <p class="NaziGermany__horizontal--2--titleKultur">Kulturbol-</br>
        schewismus?</p>
        <!-- <p class="NaziGermany__horizontal--2--titleKulturDesktop">Kulturbolschewismus?</p> -->
      </div>
      <div class="NaziGermany__horizontal--2--circle">
        <p><?php echo $circle ?></p>
      </div>
    </div>
  </div>
  <div class="bgContainer">
  <div class="bgContainer__div NaziGermany__text--red">
    <p><?php echo ($germany_red_1) ?></p>
    <p><?php echo ($germany_red_2) ?></p>
  </div>
  <div class="bgContainer__div NaziGermany__text--beige">
    <p><?php echo ($germany_beige_1) ?></p>
    <p><?php echo ($germany_beige_2) ?></p>
  </div>
</div>
</section>
<section class="culture" id="culture">
<div class="culture__protest">
  <img class="culture__protest--image" src="./assets/protest.svg"></img>
</div>
<div class="culture__text">
  <p class="culture__text--text">
   <?php echo ($culture_1) ?>

  </p>
  <div class="culture__text--img">
    <img  class="culture__Square" src="./assets/culture_square.svg">
  </div>
</div>

<div class="presidential">
  <div class="presidential__graphic">
    <img src="./assets/presidential.svg">
  </div>
  <div class="presidential__text">
  <p><?php echo ($presidential_1) ?></p>
  <p><?php echo ($presidential_2) ?></p>
  <p><?php echo ($presidential_3) ?></p>
</div>
</div>
</section>

<!--test for poster maker-->
<section class="poster">
  <h2 class="poster__title">Make your own protest poster here</h2>
  <p class="poster__description">As you have read in this longread fonts are commonly used in political situations and have a amazing history behind them.
    But this time you are not protesting for anything political, you are protesting for fonts.
    You will give the fonts a voice with this poster, for example by sharing your poster on instagram, to show that a font is not just a font, to get them the acknowledgement they deserve.
  </p>
  <div class="poster__color">
    <p>Choose your background color</p>
  <input class="color__input" type="color"></input>
  </div>
        <p class="instructions">Drag the images around, everything in the black box will be visible in your poster.</p>

  <section class="poster__div" id="poster">
        <!-- <img class="poster_img" src="./assets/Renner-mobile.png"> -->
        <div class="poster_images">
        <img class="poster_img" id="hand__image" src="./assets/poster/hand.png">
        <img class="poster_img" id="influence" src="./assets/poster/influence.png">
        <img class="poster_img" id="shout" src="./assets/poster/shout.png">
        <img class="poster_img" id="ceci" src="./assets/poster/ceci.png">

        </div>
        <!--put images here-->
  </section>
  <div class="testdownload"></div>
  <a class="downloadLink" href="" download="AwesomePoster"><img class="downloadLink--image" src="" />Download your poster!</a>
</section>
<!--end test for poster maker-->

<section class="slanted">
  <div class="slanted__intro">
  <h2 class="slanted__title">Can’t get enough of these longreads?</h2>
  <p class="slanted__text">Visit the slanted website for more design news or click on an iconic font from the list below to get to know more about it’s history and story.
</p>
  </div>
  <div class="slanted__links">

    <ul class="slanted__links--list">
    <li class="slanted__links--item">Bembo</li>
    <li class="slanted__links--item">Caslon</li>
    <li class="slanted__links--item">Futura</li>
    <li class="slanted__links--item">clarendon</li>
    <li class="slanted__links--item">Bodoni</li>
    </ul>

  <p class="or">OR</p>
  <p class="slanted__links--item"><a href="https://www.slanted.de/e" target="_blank">www.slanted.de</a></p>
</div>
<img class="slanted__logo" src="./assets/slanted.png">
</section>

