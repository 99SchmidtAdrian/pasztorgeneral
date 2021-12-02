<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PÁSZTOR GENERAL TAKI - A takarító cég</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./static/css/kapcsolat.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="icon" href="./static/images/title_logo.png" type="image/icon type" />
</head>

<body>
  <div class="overlay">
    <div class="overlay__bg"></div>
    <div class="overlay__conteiner">
      <div class="overlay__msg"></div>
      <button class="overlay__button">Értettem</button>
    </div>
  </div>
  <div class="email-response">
    <div class="email-response__content"></div>
  </div>
  <div id="main-container">
    <?php require_once './components/header.php' ?>
    <!-- content div start -->
    <div class="hero__main" id="hero__main">
      <div class="hero__content">
        <h1 class="hero__title">Írjon, és mi válaszolunk!</h1>
        <a href="./szolgaltatasok.php" class="hero__button">Nézze meg szolgáltatásainkat!</a>
      </div>
    </div>
    <div class="main__wrapper" id="main__wrapper">
      <div class="main__header">
        <h2 class="title">Kérdése van? Meg szeretné rendelni egyik csomagunkat?<br />Vegye fel velünk a kapcsolatot,
          és mi válaszolunk!</h2>
        <p class="paragraph">Áraink képzése minden esetben egyedi, ajánlatkéréssel kapcsolatban töltse ki az alábbi
          űrlapot!</p>
      </div>
      <div class="main__info">
        <h3 class="main-title">Fontos!</h3>
        <p class="main-paragraph">Ahhoz, hogy minél eredményesebb legyen a konzultáció és a lehető legpontosabban meg
          tudjuk becsülni a takarítás árát, több fontos kérdésre kell választ adnod! Ezeket az információkat jó, ha
          előre összegyűjtöd!</p>
        <h4 class="info__title">A takarításra váró ingatlan tulajdonságai, jellemzői:</h4>
        <ul class="info__list">
          <li class="info__list-item">Mérete? Ha például nem az egész lakást szeretnéd kitakaríttatni velünk, hanem csak
            például a konyhát, erre is van lehetőséged! Ez esetben kérjük add meg a takarítani kívánt terület nagyságát.
          </li>
          <li class="info__list-item">Állapota? Átlagosan -, közepesen - vagy erősen -, esetleg extrém szennyezett?</li>
          <li class="info__list-item">Felületburkoló anyagok fajtái? Tárgyak, bútorok mennyisége, minősége?</li>
          <li class="info__list-item">Ablakok, üvegek típusa, mennyisége és mérete, hozzáférhetőségük?</li>
        </ul>
        <h4 class="info__title">Takarítás típusa?</h4>
        <ul class="info__list">
          <li class="info__list-item">Általános takarítás, nagytakarítás, építkezés - vagy felújítás utáni takarítás,
            rendezvénytakarítás, stb.</li>
        </ul>
        <h4 class="info__title">Feladatok, igények:</h4>
        <ul class="info__list">
          <li class="info__list-item">Nem kötelező adott csomagot rendelni, lehet csak külön feladatokat kérni, mint
            például az ablakpucolás, kárpit- vagy a szőnyegtisztítás!</li>
        </ul>
      </div>
      <div class="form__div">
        <form action="./components/contactform.php" class="form" method="post">
          <div class="inputs">
            <input type="text" class="input" name="name" id="name" placeholder="Név *">
            <input type="text" class="input" name="email" id="email" placeholder="Email *">
            <input type="text" class="input" name="address" placeholder="Cím">
            <input type="text" class="input" name="phone" placeholder="Telefonszám">
          </div>
          <label for="msg" class="msg-label">Üzenet</label>
          <textarea type="text" class="msg" name="msg"></textarea>
          <button type="submit" class="submit" name='submit'>Küldés</button>
        </form>
      </div>
    </div>
    <!-- content div end -->
    <?php require_once './components/footer.php' ?>
  </div>
  <script src="static/js/main.js"></script>
  <script src="static/js/kapcsolat.js"></script>
</body>

</html>