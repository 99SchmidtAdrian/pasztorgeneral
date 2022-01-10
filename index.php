<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="PÁSZTOR GENERAL TAKI - A takarító cég">
  <meta name="description"
    content="Ha takarító céget keres Budapesten, jó helyen jár! Budapest egyik legújabb és egyben egyik legjobb takarító cége csak arra vár, hogy ön felkeresse!">
  <meta name="keywords"
    content="budapest,takarító,takarítás,pásztor general,takarító cég,olcsó,egyszeri takarítás,általános takarítás,profi takarítás,legjobb takarító cég">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Hungarian">
  <meta name="revisit-after" content="1 days">
  <meta name="author" content="Schmidt Adrián - 99schmidt.adrian@gmail.com">
  <title>PÁSZTOR GENERAL TAKI - A takarító cég</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./static/css/index.css" />
  <link rel="icon" href="./static/images/title_logo.png" type="image/icon type" />
</head>

<body>
  <div id="main-container">
    <?php require_once './components/header.php' ?>
    <!-- content div start -->
    <div class="hero__main" id="hero__main">
      <h1 class="hero__title">A legjobb helyen jár, ha minőségi takarítást szeretne!</h1>
      <a href="./rolunk.php" class="hero__button">Ismerkedjen meg velünk!</a>
      <a href="https://www.freepik.com/vectors/background" class="attribute-link">Background vector created by macrovector - www.freepik.com</a>
    </div>
    <div class="main__wrapper" id="main__wrapper">
      <div class="proposer__main" id="first_proposer__main">
        <img src="./static/images/clean_dining_room.jpg" class="proposer__image" alt="Tiszta étkező">
        <div class="proposer__fade-left"></div>
        <div class="proposer__content">
          <h2 class="proposer__title">Szeretné tudni, mire fizet be?<br />Nézze meg korábbi munkáinkat!</h2>
          <p class="proposer_paragraph">Ne higgyen nekünk! Higgyen a saját szemének! Nézze meg korábbi munkáinkat és
            győződjön meg minőségi takarításunkról a saját szemével!</p>
          <div class="proposer__buttons-main">
            <a href="./galeria.php" class="proposer__button">Galéria megtekintése</a><a href="./kapcsolat.php"
              class="proposer__button">Lépjen velünk kapcsolatba!</a>
          </div>
        </div>
      </div>
      <!-- <div class="proposer__main">
        <img src="./static/images/logo.png" class="proposer__image" alt="Takarító csapat" style="background-color: hsla(240, 42%, 30%, 1);">
        <div class="proposer__fade-right"></div>
        <div class="proposer__content">
          <h2 class="proposer__title">Kik vagyunk mi?</h2>
          <p class="proposer_paragraph">Egy megbízható takarító céget szeretne, akikre lehet számítani? A legjobb helyen
            jár! Ismerkedjen meg a Pásztor General Taki csapatával!</p>
          <div class="proposer__buttons-main">
            <a href="./galeria.php" class="proposer__button">Ismerkedjen meg csapatunkkal!</a>
          </div>
        </div>
      </div> -->
      <div class="proposer__main">
        <img src="./static/images/vacuum-cleaner.jpg" class="proposer__image" alt="Takarítógép">
        <div class="proposer__fade-right"></div>
        <div class="proposer__content">
          <h2 class="proposer__title">Pontosan mivel is foglalkozunk?</h2>
          <p class="proposer_paragraph">Válasszon hatalmas takarítási kínálatunkból, a cégére szabottan!</p>
          <div class="proposer__buttons-main">
            <a href="./galeria.php" class="proposer__button">Nézze meg szolgáltatásainkat!</a>
          </div>
        </div>
      </div>
      <div class="proposer__main">
        <img src="./static/images/contact.jpg" class="proposer__image" alt="Laptop - Kapcsolatfelvétel">
        <div class="proposer__fade-left"></div>
        <div class="proposer__content">
          <h2 class="proposer__title">Kérdése lenne?</h2>
          <p class="proposer_paragraph">Nem találta meg, amit keresett? Kérdése maradt volna? Meg szeretné igényelni
            valamelyik szolgáltatásunkat?</p>
          <div class="proposer__buttons-main">
            <a href="./galeria.php" class="proposer__button">Vegye fel velünk a kapcsolatot!</a>
          </div>
        </div>
      </div>
      <div class="proposer__main">
        <img src="./static/images/carrier.jpg" class="proposer__image" alt="Kézfogás - Jelentkezés munkára">
        <div class="proposer__fade-right"></div>
        <div class="proposer__content">
          <h2 class="proposer__title">Állást keres?</h2>
          <p class="proposer_paragraph">El szeretné kezdeni karrierjét építeni?<br />Hosszútávú állást keres?</p>
          <div class="proposer__buttons-main">
            <a href="./karrier.php" class="proposer__button">Jelentkezzen most!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- content div end -->
    <?php require_once './components/footer.php' ?>
  </div>
  <script src="static/js/main.js"></script>
  <script src="static/js/index.js"></script>
</body>

</html>