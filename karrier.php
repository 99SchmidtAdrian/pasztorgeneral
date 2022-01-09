<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PÁSZTOR GENERAL TAKI- A takarító cég</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./static/css/karrier.css" />
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
        <h1 class="hero__title">Kezdje el építeni karrierjét nálunk!</h1>
        <a href="./rolunk.php" class="hero__button">Ismerkedjen meg velünk!!</a>
      </div>
    </div>
    <div class="main__wrapper" id="main__wrapper">
      <div class="main__header">
        <h2 class="title">Kezdje el építeni karrierjét még ma,<br />a Pásztor General Takival!</h2>
      </div>
      <div class="main__info">
        <h3 class="main-title">Takakrító</h3>
        <p class="main-paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel vitae, ducimus maxime
          numquam rerum, sint nobis necessitatibus,<br /> provident dolores assumenda optio ut voluptas eaque voluptatem.
          Consectetur, ea. Ratione, nam facilis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum illum
          aut magnam doloribus, vitae esse minus,<br /> voluptates fugit <br /><br />quis provident nesciunt quaerat temporibus
          necessitatibus doloremque eveniet dignissimos? Omnis, exercitationem vero. Lorem ipsum dolor sit amet
          consectetur adipisicing elit. <br /><br />Doloribus commodi tempora delectus culpa dolores! Harum aliquid velit veritatis
          reiciendis consequatur deserunt reprehenderit <br />unde, nemo nesciunt temporibus ad ut provident a.</p>
        <h4 class="info__title">Jelentkezzen hozzánk az alábbi űrlap kitöltésével:</h4>
      </div>
      <div class="form__div">
        <form action="./components/carrierform.php" class="form" method="post" enctype="multipart/form-data">
          <div class="inputs">
            <input type="text" class="input" name="name" id="name" placeholder="Név *">
            <input type="text" class="input" name="email" id="email" placeholder="Email *">
            <input type="number" class="input" name="phone" placeholder="Telefonszám">
          </div>
          <label for="cv" class="file-label">Önéletrajz (opcionális)</label>
          <input type="file" name="cv" class="file">
          <label for="cover-letter" class="file-label">Motivációs levél (opcionális)</label>
          <input type="file" name="cover-letter" class="file"><br />
          <label for="msg" class="msg-label">Megjegyzés (opcionális)</label>
          <textarea type="text" class="msg" name="msg"></textarea>
          <button type="submit" class="submit" name='submit'>Küldés</button>
        </form>
      </div>
    </div>
    <!-- content div end -->
    <?php require_once './components/footer.php' ?>
  </div>
  <script src="static/js/main.js"></script>
  <script src="static/js/karrier.js"></script>
</body>

</html>