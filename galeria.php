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
    <link rel="stylesheet" href="./static/css/galeria.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="icon" href="./static/images/title_logo.png" type="image/icon type" />
</head>

<body>
    <div class="overlay">
        <div class="overlay__bg"></div>
        <div class="overlay__conteiner">
            <button class="overlay__close">
                <div class="left-line"></div>
                <div class="right-line"></div>
            </button>
            <img class="overlay__img" src="" />
        </div>
    </div>
    <div id="main-container">
        <?php require_once './components/header.php' ?>
        <!-- content div start -->
        <div class="hero__main" id="hero__main">
            <div class="hero__content">
                <h1 class="hero__title">Győződjön meg minőségi munkánkról, a saját szemével!</h1>
                <a href="./rolunk.php" class="hero__button">Vegye fel velünk a kapcsolatot!</a>
            </div>
        </div>
        <div class="main__wrapper" id="main__wrapper">
            <h2 class="main__title">Ha mi takarítunk, annak nyoma marad!</h2>
            <p class="text">Mi megadjuk az okot, hogy ügyfeleink bizalmat fektessenek belénk. Minőségi takarításunkról
                saját szemével is meggyőződhet, ahogy végiglapozza "előtte" és "utána" képekből álló galériánkat.
                Takarítóink munka előtt és után képeket készítettek, így minőségi takarításunkról már az előtt
                megbizonyosodhat, mielőtt kapcsolatba lépett volna velünk!</p>
            <div class="main__pics">
                <?php 
                $dirName = './static/images/galery_images/';
                $images = glob($dirName."*.jpg");
                $ordNum = 1;
                foreach($images as $image){
                    echo '<button onClick="openOverlay('.$ordNum.')" class="pic__button"><img class="pic pic-'.$ordNum.'" src="'.$image.'"/></button>';
                    $ordNum++;
                }
                ?>
            </div>
        </div>
        <!-- content div end -->
        <?php require_once './components/footer.php' ?>
    </div>
    <script src="static/js/main.js"></script>
    <script src="static/js/galeria.js"></script>
</body>

</html>