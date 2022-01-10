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
  <link rel="stylesheet" href="./static/css/szolgaltatasok.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="icon" href="./static/images/title_logo.png" type="image/icon type" />
</head>

<body>
  <div id="main-container">
    <?php require_once './components/header.php' ?>
    <!-- content div start -->
    <div class="hero__main" id="hero__main">
      <div class="hero__content">
        <h1 class="hero__title">Szolgáltatásaink</h1>
        <a href="./rolunk.php" class="hero__button">Vegye fel velünk a kapcsolatot!</a>
      </div>
    </div>
    <div class="main__wrapper" id="main__wrapper">
      <div class="pp-types__main">
        <h2>Takarítási szolgáltatásaink magánszemélyek részére</h2>
        <div class="type">
          <h3>Általános takarítás</h3>
          <p id="type__p-1">A legkisebb szolgáltatási csomagunk az általános takarítás. A szemét kidobásával kezdve a
            konyhai felületek alapos zsírtalanításával folytatva a fürdőszobai vízkőtlenítésen át az összes felület
            csillogóvá, tisztává varázslásával záródik. Természetesen a szobákat is alaposan portalanítjuk,
            porszívózzuk, felmossuk. Semmilyen rejtett zug nem marad takarítatlanul!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('1')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-1" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Nagytakarítás</h3>
          <p id="type__p-2">A nagytakarítás magába foglalja az általános takarítás lépéseit, ezen kívül minden
            elképzelhető és elképzelhetetlen zugot is tisztává varázsolunk! Elhúzzuk a bútorokat, a mozdítható
            nagygépeket, pl. a mosógépet, minden sarokban és félreeső helyet kitakarítunk.
            Vízkő, zsíros ragacs, masszív felületté összeálló por - semmi nem akadály számunkra!
            A nagytakarítás magába foglalja az ajtók és ablakok pucolását is!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('2')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-2" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Építkezés utáni takarítás</h3>
          <p id="type__p-3">Felépült az új ház! Ez nagy öröm, de még rengeteg munka van hátra, amíg minden és mindenki
            elfoglalhatja a helyét.
            Mindenféle törmelékek, ragasztómaradványok, védőfóliák, fuga maradványok, cementfátyol, és rengeteg por
            maradt az építkezés után. Az összes lehetséges szennyeződés eltávolítására fel vagyunk készülve! ha
            bennünket bíz meg, hamarosan ragyogó tiszta házba költözhet!
            Hasznos lehet, ha már az építkezés végső fázisaiban folyamatosan takarítunk, így elkerülhető, hogy pl. a por
            összekarcolja az új bútort, vagy beletapossák a padlószőnyegbe.</br>Hívjon, jövünk!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('3')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-3" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Felújítás utáni takarítás</h3>
          <p id="type__p-4">A felújítás után hasonló, bár kisebb takarítási feladatok vannak, mint egy építkezés
            után. A sok por, esetleg megmaradt törmelék eltávolítása, a cementfátyol és ragasztószer maradványok eltávolítása,
            festékspriccek levakarása mind megtörténik, ha minket bíz meg a felújítás utáni takarítással, Önnek már csak
            élveznie kell tiszta és illatos lakását!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('4')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-4" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Fertőtlenítő takarítás</h3>
          <p id="type__p-5">Mikor van szükség fertőtlenítésre? Használt lakás vásárlása esetén, betegségek után,
            kisgyermek érkezése előtt, haláleset után, elhanyagolt vagy sokáig lakatlan ingatan
            öröklése/eladása/vásárlása esetén pl.
            A fertőtlenítő takarítás egy alapos takarítással kezdődik, hiszen először a szennyeződésektől kell
            megtisztítani a felületeket. Utána következik a fertőtlenítőszeres lemosás.
            A vegyszeres fertőtlenítés esetén természetesen betartjuk az egészségügyi ajánlásokat, a szükséges behatási
            időt. Ózongenerátoros és egyéb fertőtlenítő eljárásokat is alkalmazunk a megrendelővel való egyeztetés
            alapján.<br />
            Önnek már csak élveznie kell ragyogóan tiszta és egészséges lakását, házát!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('5')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-5" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Rendezvény takarítás</h3>
          <p id="type__p-6">Családi vagy intézményi rendezvények sikere nagyban függ a takarítás minőségétől, akár
            magánlakás, akár intézmény a helyszín!
            Lehet egy aranylakodalom megünneplése, vagy céges meeting, netán ballagási ebéd, hívjon minket! Rendezvény
            előtt, alatt és utána is ragyogóan tisztává varázsolunk mindent!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('6')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-6" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Szőnyegtisztítás</h3>
          <p id="type__p-7">Akár mozdítható szőnyeg, akár padlószőnyeg van a lakásodban, munkahelyeden, irodádban, ránk
            számíthatsz! A helyszínen vagy a telephelyünkre szállítva tisztává, atkamentessé és szagmentessé tesszük
            szőnyegeidet. A padlószőnyegeket legmodernebb gépeinkkel makulátlanul tisztává tesszük.

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('7')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-7" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Apartman takarítás</h3>
          <p id="type__p-8">Nagy gyakorlatunk van apartmanok takarítása terén is. Ha rövid távú lakáskiadással
            foglalkozol, akkor ajánljuk szolgáltatásainkat. Vendégek cseréke estén nem csak a lakás takarítjuk ki
            alaposan, hanem az ágyneműt is kimossuk, kivasaljuk, és tisztán húzzuk fel a következő vendégeket várva.

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('8')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-8" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Extrém takarítás</h3>
          <p id="type__p-24">Különlegesen elhanyagolt ingatlanok rendbetételét is vállaljuk, ha nagyon szennyezett
            ingatlan vásárolt, örökölt, ne rémüljön meg, jövünk és megoldjuk! Keressen bátran!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('24')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-24" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>

      </div>
      <div class="cp-types__main">
        <h2>Takarítás cégek számára:</h2>
        <div class="type">
          <h3>Irodatakarítás</h3>
          <p id="type__p-9">Az iroda mindig a cég előretolt helyőrsége. a dolgozók és az ügyfelek is napi szinten
            használják, ezért a tisztaság elsőrendűen fontos. A tiszta környezet a cég megbízhatóságát sugallja, a
            dolgozók számára meg kellemes, higiénikus munkakörnyezetet jelent, ahol öröm dolgozni.</br>Bízzon meg
            minket, és akkor minden nap ragyogó tisztaság fogadja az érkezőket!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('9')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-9" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Nagytakarítás</h3>
          <p id="type__p-10">A nagytakarítás során minden picike zugot kitakarítunk, elhúzzuk a bútorokat,
            szekrénytetők, polcok, fiókok mind tiszták lesznek. A vizes helyiségeket az utolsó négyzetcentiméterig
            letisztítjuk, vízkőtlenítjük, higiénikussá varázsoljuk. A nagytakarítás magába foglalja az ajtók, ablakok,
            keretek lemosását is. Időszakonként mindig irodának jár egy nagytakarítás! Hívjon, jövünk!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('10')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-10" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Építkezés utáni takarítás</h3>
          <p id="type__p-11">Felépült az új iroda, új műhely stb! Ez nagy öröm, de még rengeteg munka van hátra, amíg
            minden és mindenki elfoglalhatja a helyét.
            Mindenféle törmelékek, ragasztómaradványok, védőfóliák, fuga maradványok, cementfátyol, és rengeteg por
            maradt az építkezés után. Az összes lehetséges szennyeződés eltávolítására fel vagyunk készülve! ha
            bennünket bíz meg, hamarosan ragyogó tiszta házba költözhet!
            Hasznos lehet, ha már az építkezés végső fázisaiban folyamatosan takarítunk, így elkerülhető, hogy pl. a por
            összekarcolja az új bútort, vagy beletapossák a padlószőnyegbe. Hívjon, jövünk!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('11')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-11" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Felújítás utáni takarítás</h3>
          <p id="type__p-12">Minden iroda, étterem, műhely életében elkövetkezik egyszer a felújítás. A felújítás után
            hasonló, bár kisebb takarítási feladatok vannak, mint egy építkezés után.
            A sok por, esetleg megmaradt törmelék eltávolítása, a cementfátyol és ragasztószer maradványok eltávolítása,
            festékspriccek levakarása mind megtörténik, ha minket bíz meg a felújítás utáni takarítással. Önnek már csak
            élveznie kell tiszta és illatos helyiségeit!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('12')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-12" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Fertőtlenítő takarítás</h3>
          <p id="type__p-13">Mikor van szükség fertőtlenítésre? Használt ingatlan vásárlása esetén, betegségek után,
            elhanyagolt vagy sokáig lakatlan ingatan vásárlása esetén. A járványhelyzet is indokolttá teszi a gyakori
            fertőtlenítést. Vendéglátó üzemek és éttermek esetében különösen fontos a fertőzésmentes higiénia
            biztosítása.
            A fertőtlenítő takarítás egy alapos takarítással kezdődik, hiszen először a szennyeződésektől kell
            megtisztítani a felületeket. Utána következik a fertőtlenítőszeres lemosás.
            A vegyszeres fertőtlenítés esetén természetesen betartjuk az egészségügyi ajánlásokat, a szükséges behatási
            időt. Ózongenerátoros és egyéb fertőtlenítő eljárásokat is alkalmazunk a megrendelővel való egyeztetés
            alapján.
            Ha minket hív, akkor minden felület kórokozómentes lesz!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('13')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-13" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Rendezvény takarítás</h3>
          <p id="type__p-14">A rendezvények fontos események minden cég életében, legyen szó dolgozói partyról vagy
            külső helyszínes eseményről. A rendezvények sikere nagyban függ a takarítás minőségétől, bárhol is legyen
            megrendezve!
            Lehet egy díjátadó, vagy céges meeting, karácsonyi party vagy évértékelő, hívjon minket! Rendezvény előtt,
            alatt és utána is ragyogóan tisztává varázsolunk mindent!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('14')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-14" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Szőnyegtisztítás</h3>
          <p id="type__p-15">Akár mozdítható szőnyeg, akár padlószőnyeg van az irodában vagy bármely helyszínen, ránk
            számíthat! A helyszínen vagy a telephelyünkre szállítva tisztává, atkamentessé és szagmentessé tesszük
            szőnyegeit. A padlószőnyegeket legmodernebb gépeinkkel makulátlanul tisztává tesszük. Hívjon minket, meg
            lesz elégedve!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('15')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-15" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Konyha / étterem takarítás</h3>
          <p id="type__p-17">Az ételkészítés helye és az ételek elfogyasztásának helye fokozottan tiszta kell legyen,
            erre a vendégei is bizonyára kényesek. Professzionális eszközökkel és szerekkel vállaljuk a konyhák alapos
            takarítását, komoly gyakorlatunk van zsíros, ragacsos szennyeződések eltávolításában. Fokozottan figyelünk
            az élelmiszerbiztonsági szempontokra is a takarítás során. Eseti nagytakarítás vagy rendszeres konyha és
            vendégtér takarítás, számunka egyik sem akadály, hívjon minket!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('17')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-17" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Apartman takarítás</h3>
          <p id="type__p-18">Nagy gyakorlatunk van apartmanok takarítása terén is. Ha rövid távú lakáskiadással
            foglalkozik, akkor ajánljuk szolgáltatásainkat. Vendégek cseréje esetén nem csak a lakást takarítjuk ki
            alaposan, hanem az ágyneműt is kimossuk, kivasaljuk, és tisztán húzzuk fel a következő vendégeket várva.
            Bármely szálláshely rendszeres vagy alkalmi takarítását vállaljuk! Szóljon nekünk, és mi megoldjuk!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('18')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-18" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Kirakat - / Ablaktisztítás</h3>
          <p id="type__p-19">Minden üzlet hívogató része a kirakat, ezt látják meg a vendégek, vevők elsőként.
            Kiemelkedően fontos, hogy a kirakatüveg mindig csillogó, és foltmentes legyen. ugyanilyen fontosak a belső
            terek ablakai, tükrei is. Az üvegen azonnal látszik a maszat, és elhanyagolt benyomást kelt, bármilyen
            tiszta is a többi felület.
            Ha minket bíz meg, akkor semmi maszat, csak a csillogóan tiszta üveg a végeredmény! Keressen bátran!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('19')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-19" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Extrém takarítás</h3>
          <p id="type__p-23">Különlegesen elhanyagolt ingatlanok rendbetételét is vállaljuk, ha nagyon szennyezett
            ingatlant vásárolt, örökölt, ne rémüljön meg, jövünk és megoldjuk! Keressen bátran! Előttünk nincs
            lehetetlen!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('23')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-23" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>

      </div>
      <div class="service-types__main">
        <h2>Választható tisztítószer csomagok</h2>
        <div class="type">
          <h3>Vegyszer csomag</h3>
          <p id="type__p-20">Ebbe a csomagba kemikáliákat tartalmazó, vegyi hatóanyag tartalmú tisztítószerek tartoznak.
            Lúgok, savak vagy lúgokat, savakat tartalmazó készítmények, mint például a penészirtó, hideg zsíroldó vagy a
            háztartási vízkőoldó. Ezek a tisztítószerek a környezetünkre káros anyagokat tartalmaznak és használatuk
            közben az emberi egészségre is ártalmasak, viszont esetenként hatékonyabbak, mint a bio társaik.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('20')"><svg xmlns="http://www.w3.org/2000/svg"
              height="24px" id="type__button-20" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Vegyszermentes takarítás</h3>
          <p id="type__p-21">Természetesen a környezetünk védelmét szívügyünknek tekintjük, ezért állítottunk össze egy
            bio tisztítószerekből álló csomagot, hogy a zöld gondolkodású megrendelőinknek is megoldást kínáljunk. A
            német Frosch márka nagyon hatékony bio tisztítószerei közül állítottuk össze a bio csomagunkat, ami a Szódás
            konyhai tisztítószertől kezdve, az ecetes vagy málnaecetes vízkőoldón át, az általános tisztítót is
            tartalmazza. Továbbá a levendula erejével tisztító higiéniás fertőtlenítő és illatos felmosó folyadék is
            található ebben a környezetbarát csokorban.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('21')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-21" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Professional csomag</h3>
          <p id="type__p-22">A német Kiehl ipari tisztítószer gyártó márka termékei opcionálisan rendelhetőek.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('22')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-22" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
      </div>
    </div>
    <!-- content div end -->
    <?php require_once './components/footer.php' ?>
  </div>
  <script src="static/js/main.js"></script>
  <script src="static/js/szolgaltatasok.js"></script>
</body>

</html>