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
      <!-- <div class="main__title">Áraink minden esetben egyéniek, egyeztetéshez kérjük vegye fel velünk a kapcsolatot!</div> -->
      <div class="pp-types__main">
        <h2>Takarítási szolgáltatásaink magánszemélyek részére</h2>
        <div class="type">
          <h3>Általános takarítás</h3>
          <p id="type__p-1">Ez a legkisebb csomagunk. Az ingatlan méretétől függően ez a takarítás csak
            pár órát vesz igénybe.
            Természetesen a mellékhelyiségek tekintetében ilyenkor sem ismerünk könyörületet, nem csak az ülőkét
            töröljük át, hanem a WC teljes felületét (mögötte is!) a csempével és a toalett ajtajával együtt. A
            fürdőszobában is vízkőtelenítjük a kád vagy a zuhanytálca és a mosdó környékét. A konyhában is rendet
            rakunk, letakarítjuk a munkalapot, a szekrényajtókról letöröljük a maszatokat, zsírmaradványokat,
            ujjlenyomatokat, szemetet kidobjuk. A teljes lakásra kiterjedő portörlés után az otthonod átesik egy nagyon
            alapos porszívózáson, majd felmosáson.
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('1')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-1" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Nagytakarítás</h3>
          <p id="type__p-2">A nagytakarítás lényege, hogy olyan helyeken is alaposan kitakarítsuk a
            lakást vagy egyéb ingatlant, amelyeket az általános takarítások alkalmával nem érintünk. Ennek a
            takarításnak csak a képzelet szab határt, no meg persze az idő. A lakás minden szegletét leportalanítjuk és
            megtisztítjuk a szennyeződésektől. A mozdítható bútorokat elhúzzuk a helyükről és mögöttük is kitakarítunk.
            Leportalanítjuk a szekrények tetejét és a polcait, fiókjait is. A fürdőszoba is egy sokkal alaposabb
            takarításon esik át. Például a mosógép mögött, alatt is összeszedjük a bepotyogott tárgyakat,
            kiporszívózunk, felmosunk. Leszámolunk a vízkő lerakódásokkal. A konyhában is minden felületet
            felszabadítunk a zsírba rakódott por fogsága alól. Ez a takarítás csomagunk többek közt már magába foglalja
            az ablakok és ajtók tisztítását is.
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('2')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-2" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Építkezés utáni takarítás</h3>
          <p id="type__p-3">Elkészült a vadonatúj otthonod? De még az örömöt beárnyékolja egy "kis" por,
            törmelék és építkezési hulladék? Vagy az a rengeteg festék-, és gipsz maradvány gátolja meg, hogy máris
            bevedd a várad? És még nem is ejtettünk szót a ragasztószalagokról az ablakkereteken vagy a védőfóliákról a
            bútorokon. Ezeknek a nehezen eltávolítható szennyeződéseknek vagy oda nem illő tárgyaknak a sorát még
            hosszasan lehetne sorolni, amelyek egy építkezés során keletkeznek. Ezeket nagy odafigyeléssel és fárasztó
            munka árán lehet csak eltüntetni. A nagy odafigyelés azért kiemelten fontos, mert vigyázni kell, hogy a
            takarítás közben nehogy megsérüljenek a tisztítandó felületek a szennyeződések eltávolítása közben. Több
            szempontból is előnyös, ha az építési munkálatok alatt is folyamatosan folyik egy alapszintű takarítás.
            Egyrészt így sokkal könnyebb dolgunk lesz a végső takarításnál, másrészt pedig megóvjuk vele a végső
            helyükre tett burkolatokat, bútorokat, attól, hogy maradandó károsodást szenvedjenek a további munkálatok
            során. Mint például az új padlószőnyegbe beletapossák a port és egyéb piszkokat a munkások, hogy csak egy
            igen bosszantó és sűrűn előforduló problémát említsünk.
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('3')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-3" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Felújítás utáni takarítás</h3>
          <p id="type__p-4">Ez az opció az Építkezés utáni takarítás kistestvére. Egy lakás vagy egy ház
            felújítása után a feladatok hasonlóak mint egy építkezés befejeztével. A legtöbb esetben egy felújítás után
            a legnagyobb feladatot a rengeteg por, festék és ragasztószalag eltüntetése jelenti. A felújítás befejezése
            és az újra birtokba vétel között ott van egy igen embert próbáló feladat, mégpedig a takarítás. Bízd
            profikra, és neked csak élvezned kell a frissen felújított otthonod auráját!
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('4')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-4" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Fertőtlenítő takarítás</h3>
          <p id="type__p-5">A fertőtlenítés nem helyettesíti a takarítást! A tökéletes fertőtlenítés
            alapvető követelménye, hogy első lépésben legyenek megtisztítva a szennyeződésektől a felületek. Majd utána
            jöhet a fertőtlenítőszeres takarítás, a megfelelő behatási idő betartásával, és legutolsó lépésben az
            ózongenerátoros vagy hidegködképző gépes kezelés vagy egyéb fertőtlenítő eljárás. A legjobb eredmény elérése
            érdekében a különböző fertőtlenítő eljárások kombinált alkalmazását javasoljuk. Lakások, házak, nyaralók
            esetében a következő esetekben javasoljuk a fertőtlenítő takarítást. Lakásvásárlás után beköltözés előtt,
            albérletbe beköltözés előtt vagy ha tulajdonos vagy és a kiadott ingatlanodból kiköltözik a bérlő.
            Kisgyermek érkezése előtt. És itt vannak az extrém esetek, amikor egy lakásban elszabadult a pokol. Halál
            eset után.
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('5')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-5" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Rendezvény takarítás</h3>
          <p id="type__p-6">Rendezvényt szervezel? Profi takarítóval egyszerűbb! Legyen privát party,
            esküvő, szülinapi összejövetel vagy nagyobb volumenű családi esemény, ránk minden esetben számíthatsz!
            Rendezvények előtti, alatti és utáni takarítás rendelése itt!
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('6')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-6" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Szőnyegtisztítás</h3>
          <p id="type__p-7">Professzionális szőnyegtisztítást végzünk akár az otthonodban is, de ha még
            alaposabb tisztításnak szeretnéd alávetni a szőnyegeket, akkor természetesen telephelyünkön tökéletesen
            kitisztítjuk őket. Még ózonos kezelést is végzünk rajtuk ha szeretnéd, hogy száműzzük belőle a poratkákat és
            a kellemetlen szagokat! Padlószőnyeg van nálad? Súrológépeinkkel a legalsó rétegekig kitisztítjuk a
            padlószőnyegeket is!
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('7')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-7" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Apartman takarítás</h3>
          <p id="type__p-8"> Rövidtávú lakáskiadással foglalkozol, apartmanként adod bérbe belvárosi
            lakásodat? Megbízásunk esetén levesszük a válladról a takarítás terhét. Belvárosi takarító cég lévén igen
            nagy tapasztalattal rendelkezünk az apartmanok takarítását illetően. Az ágyneműk mosását is ránk bízhatod
            nyugodtan, elszállítjuk a szennyes textileket a központunkba, majd kimosva, kivasalva húzzuk fel az új
            vendég érkezése előtt.
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('8')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-8" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>

      </div>
      <div class="cp-types__main">
        <h2>Takarítási szolgáltatásaink cégek részére</h2>
        <div class="type">
          <h3>Irodatakarítás</h3>
          <p id="type__p-9">Egy cég irodája sok esetben sokkal többre hivatott, minthogy egyszerűen csak legyen hol
            dolgozni vagy az iratokat tárolni. Egy iroda képviseli a céget, küllemével hozzájárul a cég arculatához és
            bizony befolyásolni tudja az ügyfelekkel, beszállítókkal esetleg befektetőkkel történő tárgyalások
            kimenetelét. Az ott dolgozók szemszögéből nézve pedig, a tisztaságnak más fontos hatása is van. Úgy
            gondoljuk, hogy az emberek nagy többsége tiszta környezetben dolgozik szívesebben, így a tisztaságnak
            pozitív hatása van a munkára. Egészségügyi szempontból is fontos tisztán tartani a munkahelyet, mert az
            emberek “kézről - kézre” adják a baktériumokat, fertőzéseket a kilincseken, a számítógépek billentyűzetén és
            sok egyéb helyen.
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('19')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-19" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
          </p>
          <button class="dropdown-button" onclick="changeHeight('21')"><svg xmlns="http://www.w3.org/2000/svg"
              id="type__button-21" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
              <path d="M24 24H0V0h24v24z" fill="none" opacity=".87" />
              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z" /></svg></button>
        </div>
        <div class="type">
          <h3>Professional csomag</h3>
          <p id="type__p-22">A német Kiehl ipari tisztítószer gyártó márka termékei opcionálisan rendelhetőek
            <button class="order-button">Rendelje meg ezt a szolgáltatásunkat!</button>
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