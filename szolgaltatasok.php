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
            nagygépeket, pl. a mosógépet, minden sarokban és félreeső helyet kitakarítunk.<br />
            Vízkő, zsíros ragacs, masszív felületté összeálló por - semmi nem akadály számunkra!<br />
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
            elfoglalhatja a helyét.<br />
            Mindenféle törmelékek, ragasztómaradványok, védőfóliák, fuga maradványok, cementfátyol, és rengeteg por
            maradt az építkezés után. Az összes lehetséges szennyeződés eltávolítására fel vagyunk készülve! ha
            bennünket bíz meg, hamarosan ragyogó tiszta házba költözhet!<br />
            Hasznos lehet, ha már az építkezés végső fázisaiban folyamatosan takarítunk, így elkerülhető, hogy pl. a por
            összekarcolja az új bútort, vagy beletapossák a padlószőnyegbe. Hívjon, jövünk!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('3')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-3" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Felújítás utáni takarítás</h3>
          <p id="type__p-4">A felújítás után hasonló, bár kisebb takarítási feladatok vannak, mint egy építkezés után.<br />
            A sok por, esetleg megmaradt törmelék eltávolítása, a cementfátyol és ragasztószer maradványok eltávolítása,
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
            öröklése/eladása/vásárlása esetén pl.<br />
            A fertőtlenítő takarítás egy alapos takarítással kezdődik, hiszen először a szennyeződésektől kell
            megtisztítani a felületeket. Utána következik a fertőtlenítőszeres lemosás.<br />
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
          <p id="type__p-6">Családi vagy intézményi rendezvények sikere nagyban függ a takarítás minőségétől, akár magánlakás, akár intézmény a helyszín!
Lehet egy aranylakodalom megünneplése, vagy céges meeting, netán ballagási ebéd, hívjon minket! Rendezvény előtt, alatt és utána is ragyogóan tisztává varázsolunk mindent!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('6')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-6" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Szőnyegtisztítás</h3>
          <p id="type__p-7">Akár mozdítható szőnyeg, akár padlószőnyeg van a lakásodban, munkahelyeden, irodádban, ránk számíthatsz! A helyszínen vagy a telephelyünkre szállítva tisztává, atkamentessé és szagmentessé tesszük szőnyegeidet. A padlószőnyegeket legmodernebb gépeinkkel makulátlanul tisztává tesszük.

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('7')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-7" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Apartman takarítás</h3>
          <p id="type__p-8">Nagy gyakorlatunk van apartmanok takarítása terén is. Ha rövid távú lakáskiadással foglalkozol, akkor ajánljuk szolgáltatásainkat. Vendégek cseréke estén nem csak a lakás takarítjuk ki alaposan, hanem az ágyneműt is kimossuk, kivasaljuk, és tisztán húzzuk fel a következő vendégeket várva. 

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('8')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-8" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Extrém takarítás</h3>
          <p id="type__p-24">Különlegesen elhanyagolt ingatlanok rendbetételét is vállaljuk, ha nagyon szennyezett ingatlan vásárolt, örökölt, ne rémüljön meg, jövünk és megoldjuk! Keressen bátran!

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
          <p id="type__p-9">Cégek számára is vállalunk takarítást, legyen szó irodák napi pipere takarításáról, éttermek konyhájáról vagy vendégteréről, vagy akár ipari csarnokokról. Nem ijedünk meg a kirakatoktól, nehezen hozzáférhető ablakoktól sem. Minden esetben egyéni helyszíni felmérés alapján, a megrendelő igényeinek megfelelően szerződünk! 
Jelszavunk: Kosz koszon nem marad! Mindent takarítunk!

            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('9')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-9" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Nagytakarítás</h3>
          <p id="type__p-10">A nagytakarítás lényege, hogy olyan helyeken is alaposan kitakarítsuk a irodát vagy egyéb
            céges ingatlant, amelyeket az általános takarítások alkalmával nem érintünk. Ennek a takarításnak csak a
            képzelet szab határt, no meg persze az idő. Az iroda minden szegletét leportalanítjuk és megtisztítjuk a
            szennyeződésektől. A mozdítható bútorokat elhúzzuk a helyükről és mögöttük is kitakarítunk. Leportalanítjuk
            a szekrények tetejét és a polcait, fiókjait is. A mosdók, vizesblokkok is alaposabb takarításon esnek át.
            Leszámolunk a vízkő, húgykő lerakódásokkal. A konyhában, étkezőben is minden felületet felszabadítunk a
            zsírba rakódott por fogsága alól. Ez a takarítás csomagunk többek közt már magába foglalja az ablakok és
            ajtók tisztítását is.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('10')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-10" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Építkezés utáni takarítás</h3>
          <p id="type__p-11">Építő vállalatok, építési vállalkozók, generál kivitelező cégek részére is kínáljuk az
            építkezés takarítás szolgáltatásunkat. A kivitelezés bármelyik szakaszában jár, a Takarító Kommandó mindig
            szakszerű partnere lesz cégének. Az építkezés közbeni folyamatos poreltávolítás és a megmaradt anyagok
            konténerbe hordása ugyanolyan fontos része a kivitelezésnek, mint a precíz építő munka, ugyanis a tisztaság
            biztosítja a helyére rakott burkolatok épségét és a precíz illeszkedését. Végül, de nem utolsó sorban,
            véleményünk szerint egy kivitelező cég csak akkor nyújt magas színvonalú szolgáltatást, ha egy kulcsrakész
            ingatlan átadásakor nem a vevőnek kell önköltségből kitakarítani a megvásárolt ingatlant, hanem a makulátlan
            tisztasággal együtt kapja meg a kulcsokat. A legkorszerűbb technikák és tisztítószerek alkalmazásával,
            képzett munkatársakkal és folyamatos ellenőrzéssel biztosítjuk a legkiválóbb eredményt.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('11')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-11" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Felújítás utáni takarítás</h3>
          <p id="type__p-12">A felújítás, magát a kivitelezést nézve, kisebb munka mint az építkezés, de az utána
            következő takarítás szemszögéből nézve ugyan akkora feladat. Egy lakás vagy egy ház felújítása után a
            feladatok hasonlóak mint egy építkezés befejeztével. Ajánlatos a felújítás alatt is folyamatosan takarítani
            a készülő ingatlant, így biztosítva a már elkészült részek épségét, vagy az új burkolatok, alkotóelemek
            felrakása, helyére illesztése közben a precíz illeszkedést. A legtöbb esetben egy felújítás után a
            legnagyobb feladatot a rengeteg por, festék és ragasztószalag eltüntetése jelenti. A renoválás befejezése és
            az újra birtokba vétel között ott van egy igen embert próbáló feladat, mégpedig a takarítás. Bízd profikra,
            nekünk ez a szakmánk! Több millió négyzetméternyi ingatlan takarításának tapasztalatával rendelkezünk! Hidd
            el jobban takarítunk, mint a festők vagy a kőművesek!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('12')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-12" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Fertőtlenítő takarítás</h3>
          <p id="type__p-13">A fertőtlenítés nem helyettesíti a takarítást! A tökéletes fertőtlenítés alapvető
            követelménye, hogy első lépésben legyenek megtisztítva a szennyeződésektől a felületek. Majd utána jöhet a
            fertőtlenítőszeres takarítás, a megfelelő behatási idő betartásával, és legutolsó lépésben az
            ózongenerátoros vagy hidegködképző gépes kezelés. A legjobb eredmény elérése érdekében a különböző
            fertőtlenítő eljárások kombinált alkalmazását javasoljuk. Irodák, cégközpontok, nagy vendég forgalmú
            intézmények, vendéglátó helyiségek, szórakozóhelyek, iskolák fertőtlenítését felelősségteljesen ellátjuk.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('13')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-13" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Rendezvény takarítás</h3>
          <p id="type__p-14">Cégeknek megannyi indoka lehet rendezvény szervezésére. Tehetik ezt a dolgozók örömére,
            csapatépítés miatt vagy valami neves alkalom megünneplésére. De előrukkolhatnak egy kapós kis fogadással új
            ügyfelek szerzésének céljából vagy a régi kliensek megtartása miatt. És persze ott vannak a
            rendezvényszervezésre specializálódott cégek. Ezek a cégek profik, és 100%-ig profi munkát végeznek. Egy
            rendezvényszervező cégnek a megrendelő egyszerűen csak felvázolja, hogy mit szeretne, ők pedig megvalósítják
            a gondolatokat. Pont úgy, mint mi a takarításban! Egyszerűen csak vedd fel velünk a kapcsolatot és rendeld
            meg a “Rendezvény takarítás” szolgáltatásunkat és mi igény szerint a rendezvény előtt, alatt vagy után
            tökéletes tisztaságot varázsolunk!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('14')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-14" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Kárpittisztítás</h3>
          <p id="type__p-15">Irodai székek huzatát, ülőgarnitúrák kárpitjait tökéletesen kitisztítjuk. Nagy
            tapasztalattal rendelkezünk makacs szennyeződések terén is. Gondolj bele, hogy mennyire lehet tiszta egy
            olyan szék, amiben egész nap ül valaki, minden nap, és biztos, hogy izzad is a hátsója annak aki benne
            dolgozik. Ajánljuk évente egyszer kitisztítani a kárpitokat is.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('15')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-15" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Szőnyegtisztítás</h3>
          <p id="type__p-16">Professzionális szőnyegtisztítást végzünk irodákban, cégközpontokban vagy bármilyen céges
            ingatlanban a helyszínen is, de ha még alaposabb tisztításnak szeretnéd alávetni a szőnyegeket, akkor
            természetesen telephelyünkön tökéletesen kitisztítjuk őket. Még ózonos kezelést is végzünk rajtuk ha
            szeretnéd, hogy száműzzük belőle a poratkákat és a kellemetlen szagokat! Padlószőnyeg van? Súrológépeinkkel
            a legalsó rétegekig kitisztítjuk a padlószőnyegeket is! Újjá varázsoljuk az olyan koszos szőnyegeket is
            amiről már lemondtál!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('16')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-16" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Konyha / étterem takarítás</h3>
          <p id="type__p-17">Professzionális konyha és étterem takarítás a legmagasabb színvonalon. Eltávolítjuk az
            összes zsírlerakodást, odakozmált ételmaradékot, penészt és kormot olyan alaposan, hogy még Gordon
            Ramsay-nek is leesne az álla! Ebben a videóban el is mondja, hogy a konyhában, ahol az ételek készülnek a
            vendégeknek, mindig tökéletes tisztaságnak kell lennie! Sőt, a végén bemutatja a saját New York-i éttermének
            a konyháját, amit naponta kétszer takarítanak a takarítók teljesen tisztára. Rendelhetsz eseti
            nagytakarítást vagy napi takarítást, így biztosítva a konyhád folyamatos tisztántartását! Ramsay kollégája
            elmondja, hogy legyen akármilyen, akármekkora éttermed, a konyhának mindig teljesen tisztának kell lennie!
            De nem csak a konyhai részleg takarításában számíthatsz a Takarító Kommandóra! Megállapodás esetén az egész
            étterem, teljes területét a legmagasabb színvonalon takarítjuk ki, hogy ne csak az ételek elkészítése, hanem
            az elfogyasztása is Ramsay féle elvárásoknak megfelelően tiszta körülmények között történjen.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('17')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-17" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Apartman takarítás</h3>
          <p id="type__p-18">Rövidtávú lakáskiadással foglalkozó, apartman üzemeltető cégek részére is elérhető az
            apartman takarítás szolgáltatásunk? Megbízásunk esetén levesszük céged a válláról a takarítás terhét.
            Belvárosi takarító cég lévén igen nagy tapasztalattal rendelkezünk az apartmanok takarítását illetően. Az
            ágyneműk mosását is ránk bízhatod nyugodtan, elszállítjuk a szennyes textileket a központunkba, majd
            kimosva, kivasalva húzzuk fel az új vendég érkezése előtt.
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('18')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-18" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Kirakat - / Ablaktisztítás</h3>
          <p id="type__p-19">A tökéletesen tiszta üvegnek van egy megfoghatatlan varázsa, ahogy teljesen átlátszóak az
            ablakok, mégis kristályosan csillognak. A házat kívülről nézve, összehasonlítva a szomszédéval, azonnal
            szembetűnik melyik háznak is tiszta az ablaka! De ha egy üzlethelyiség vagy étterem kirakatáról van szó
            akkor talán még inkább fontos, hogy az üvegek ragyogóan tiszták legyenek! A menő kirakat vevőmágnes! Viszont
            menő kirakatod koszosan nem lehet!
            <a href="./kapcsolat.php" class="order-button">Vegye fel velünk a kapcsolatot!</a>
          </p>
          <button class="dropdown-button" onclick="changeHeight('19')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-19" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Extrém takarítás</h3>
          <p id="type__p-23">A fertőtlenítés nem helyettesíti a takarítást! A tökéletes fertőtlenítés
            alapvető követelménye, hogy első lépésben legyenek megtisztítva a szennyeződésektől a felületek. Majd utána
            jöhet a fertőtlenítőszeres takarítás, a megfelelő behatási idő betartásával, és legutolsó lépésben az
            ózongenerátoros vagy hidegködképző gépes kezelés vagy egyéb fertőtlenítő eljárás. A legjobb eredmény elérése
            érdekében a különböző fertőtlenítő eljárások kombinált alkalmazását javasoljuk. Lakások, házak, nyaralók
            esetében a következő esetekben javasoljuk a fertőtlenítő takarítást. Lakásvásárlás után beköltözés előtt,
            albérletbe beköltözés előtt vagy ha tulajdonos vagy és a kiadott ingatlanodból kiköltözik a bérlő.
            Kisgyermek érkezése előtt. És itt vannak az extrém esetek, amikor egy lakásban elszabadult a pokol. Halál
            eset után.
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
          <p id="type__p-22">A német Kiehl ipari tisztítószer gyártó márka termékei opcionálisan rendelhetőek
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