<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PASZTOR GENERAL KFT</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./static/css/styles.css" />
  <link rel="stylesheet" href="./static/css/index.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="icon" href="./static/images/title_logo.png" type="image/icon type" />
</head>

<body>
  <div class="">
    <?php require_once './components/header.php' ?>
    <!-- content div start -->
    <div class="hero__main" id="hero__main" style="opacity: 1">
      <h1 class="hero__title sawarabi">A legjobb helyen jár,<br />ha <span class="hero__ sawarabi">tiszta helyiséget</span> szeretne!</h1>
      <a href="./rolunk.php" class="hero__button sawarabi">Ismerkedjen meg velünk!</a>
    </div>
    <div class="proposer__main" id="first_proposer__main" style="margin:32vh 0 0">
      <img src="./static/images/clean_dining_room.png" class="proposer__image" alt="Tiszta étkező">
      <h2 class="proposer__title sawarabi">Szeretné tudni, mire fizet be?<br />Nézze meg korábbi munkáinkat!</h2>
      <div class="proposer__buttons-main">
        <a href="./galeria.php" class="proposer__button sawarabi">Galéria megtekintése</a><a href="./kapcsolat.php"
          class="proposer__button sawarabi">Lépjen velünk kapcsolatba!</a>
      </div>
    </div>
    <div class="proposer__main">
      <img src="./static/images/cleaner_team.png" class="proposer__image" alt="Takarító csapat">
      <h2 class="proposer__title sawarabi">Kik vagyunk mi?</h2>
      <div class="proposer__buttons-main">
        <a href="./galeria.php" class="proposer__button sawarabi">Ismerkedjen meg csapatunkkal!</a>
      </div>
    </div>
    <div class="proposer__main">
      <img src="./static/images/cleaning_machine.png" class="proposer__image" alt="Takarítógép">
      <h2 class="proposer__title sawarabi">Pontosan mivel is foglalkozunk?</h2>
      <div class="proposer__buttons-main">
        <a href="./galeria.php" class="proposer__button sawarabi">Nézze meg szolgáltatásainkat!</a>
      </div>
      <div class="proposer__main">
        <img src="./static/images/contact.png" class="proposer__image" alt="Laptop - Kapcsolatfelvétel">
        <h2 class="proposer__title sawarabi">Kérdése lenne?</h2>
        <div class="proposer__buttons-main">
          <a href="./galeria.php" class="proposer__button sawarabi">Vegye fel velünk a kapcsolatot!</a>
        </div>
      </div>
    </div>
    <!-- content div end -->
    <?php require_once './components/footer.php' ?>
    <!-- footer start -->
    <!-- footer end -->
  </div>
  <script src="static/js/mobile-nav.js"></script>
  <script src="static/js/main.js"></script>
</body>

</html>