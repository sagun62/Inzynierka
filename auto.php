<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="main.js"></script>
    <script src="lightbox-plus-jquery.min.js"></script>

    <title>Grotti Cars</title>
</head>

<body>
    <div class="home">
        <div class="baner">
            <div class="logo">
                <a href="index.php"><img src="image/logo.png" alt="logo" id="logo"></a>
            </div>
            <div class="szukajka">

                <i class="fas fa-search" onclick="show('znajdz')"></i>
                <div id="znajdz" class="container p-3 " ondblclick="hide('znajdz')">
                    <form id="main-searchForm" name="search" method="post" onkeyup="wyszukaj()">
                        <input type="text" id="wyszukiwarka" name="wyszukiwarka" class="mx-auto pt-auto" placeholder="Wyszukaj" />
                        <table id="myTable">

                            <tr>
                                <td><a href="index.php">Strona Główna</a></td>
                                <hr>
                            </tr>
                            <tr>
                                <td><a href="modele.php">Modele</a></td>
                            </tr>
                            <tr>
                                <td><a href="modele.php">Serwis</a></td>
                            </tr>
                            <tr>
                                <td><a href="oferta.php">Oferta</a></td>
                            </tr>
                            <tr>
                                <td><a href="kontakt.php">Kontakt</a></td>
                            </tr>
                            <tr>
                                <td><a href="dealer.php">Znajdź dealera</a></td>
                            </tr>
                            <tr>
                                <td><a href="kontakt.php">Odwiedź salon</a></td>
                            </tr>
                            <tr>
                                <td><a href="cennik.pdf" target="_blank">Pobierz cennik</a></td>
                            </tr>
                            <tr>
                                <td><a href="skonfiguruj.php" target="_blank">Skonfiguruj</a></td>
                            </tr>
                            <tr>
                                <td><a href="login.php" target="_blank">Konto klienta</a></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="user">

                <a href="login.php">
                    <?php
                    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
                    ?>
                        <p class="zmien ">Witaj <?= $_SESSION['user'] ?>&nbsp;</p> <i class="far fa-user"></i>
                    <?php

                    } else {
                    ?>
                        <p class="zmien">Zaloguj się </p> <i class="far fa-user"></i>
                    <?php
                    }
                    ?>

                </a>

            </div>



        </div>
        <div class="nav">
            <section>
                <table id="menu">
                    <tr>
                        <td class="menu-nav"><a href="modele.php" class="">MODELE</a></td>
                        <td class="menu-nav"><a href="serwis.php" class="">SERWIS</a></td>
                        <td class="menu-nav"><a href="oferta.php" class="">OFERTA</a></td>
                        <td class="menu-nav"><a href="kontakt.php" class="">KONTAKT</a></td>
                        <td class="menu-nav"><a href="dealer.php" class="">ZNAJDŹ DEALERA</a></td>
                    </tr>
                </table>
            </section>
        </div>

        <div class="foto">


            <div class="box">
                <div class="box-img">

                    <section class="image mt-2">
                        <img src="image/model1.png" />
                        <section class="text-container">
                            <a href="skonfiguruj.php" class="konfig">SKONFIGURUJ</a><br>
                            <h2>STWORZONY, AUTO MARZEŃ</h2>
                        </section>
                    </section>


                </div>
            </div>

        </div>
        <div class="text p-auto">
            <p><b>Dlaczego akurat ten model?</b></p>

            <p class="pb-3 mb-0">Post no so what deal evil rent by real in. But her ready least set lived spite solid.
            </p>
            <p class="pb-3 mb-0">She offices for highest and replied one venture pasture. Applauded no discovery in newspaper
                allowance am
                northward.
            </p>
            <p class="pb-3 mb-0">Frequently partiality possession resolution at or appearance unaffected he me.
                Engaged its was evident
                pleased husband.
            </p>

        </div>
        <div class="model">
            <div class="l-hover img-fluid "><img class="test img-fluid mx-auto d-block" src="image/engine.png" /></div>
            <div class="r-hover img-fluid"><img class="test img-fluid mx-auto d-block" src="image/model.png" /></div>
            <div class="l-text p-auto w-50">

                <b>Nowy silnik V8</b>
                <p>There are many variations of passages of Lorem Ipsum available,</p>
                <p> but the majority have suffered
                    alteration in some form, by injected humour,</p>
                <p>or randomised words which don't look even slightly
                    believable.</p>
            </div>
            <div class="r-text p-auto w-50">

                <b>Design</b>
                <p>There are many variations of passages of Lorem Ipsum available,</p>
                <p> but the majority have suffered
                    alteration in some form, by injected humour,</p>
                <p>or randomised words which don't look even slightly
                    believable.</p>
            </div>
            <div class="galeria">

                <div class="photo1"><a href="image/gallery0.png" data-lightbox="mygallery" class="gallery-but">ZOBACZ
                        GALERIĘ</a></div>

                <div><a href="image/gallery.png" data-lightbox="mygallery" class="krycie"><img src="image/gallery-small.png" /></a></div>
                <div class="photo2"><a href="image/gallery2.png" data-lightbox="mygallery" class="krycie"><img src="image/gallery-small2.png" /></a></div>
                <div class="photo2"><a href="image/gallery3.png" data-lightbox="mygallery" class="krycie"><img src="image/gallery-small3.png" /></a></div>
                <div><a href="image/gallery4.png" data-lightbox="mygallery" class="krycie"><img src="image/gallery-small4.png" /></a></div>

            </div>
            <div class="kolor h-auto">
                <h1>Żywe kolory, znajdź pasujący do Ciebie</h1>

                <img id="zz" src="image/red.png" />

                <div class="kolo-box "><p>Wybierz kolor:</p>
                    <div class="proba">
                        <div class="kolo1" onclick="changeColor('image/red.png')"></div>

                    </div>
                    <div class="proba">
                        <div class="kolo2" onclick="changeColor('image/blue.png')"></div>

                    </div>
                    <div class="proba">
                        <div class="kolo3" onclick="changeColor('image/orange.png')"></div>

                    </div>
                    <div class="proba2">
                        <div class="kolo4" onclick="changeColor('image/white.png')"></div>

                    </div>
                    <div class="proba2">
                        <div class="kolo5" onclick="changeColor('image/green.png')"></div>

                    </div>

                </div>
            </div>
            <div class="zbuduj">
                <div class="zbuduj-but2"><a href="skonfiguruj.php" class="zbuduj-but">STWÓRZ WŁASNE AUTO</a></div>
            </div>


        </div>

        <div class="stopka2 justify-content-center">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

        </div>
    </div>

</body>

</html>