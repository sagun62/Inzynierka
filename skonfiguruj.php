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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="main.js"></script>

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
        <div class="kreator">
            <div class="kreator-photo  w-75 mx-auto ">
                <img src="image/wersja1.png" alt="a1" id="a1" class=" w-100" ></a>
                <img src="image/wersja2.png" alt="a2" id="a2" class=" w-100"></a>
                <img src="image/wersja3.png" alt="a3" id="a3" class=" w-100"></a>
                <img src="image/wersja1-blue.png" alt="a4" id="a4" class=" w-100"></a>
                <img src="image/wersja1-grey.png" alt="a4" id="a5" class=" w-100"></a>
                <img src="image/wersja1-yellow.png" alt="a4" id="a6" class=" w-100"></a>
                <img src="image/wersja2-green.png" alt="a4" id="a7" class=" w-100"></a>
                <img src="image/wersja2-brown.png" alt="a4" id="a8" class=" w-100"></a>
                <img src="image/wersja3-yellow.png" alt="a4" id="a9" class=" w-100"></a>
                <img src="image/wersja3-red.png" alt="a4" id="a10" class=" w-100"></a>
                <img src="image/wersja3-orange.png" alt="a4" id="a11" class=" w-100"></a>
                <img src="image/wersja3-blue.png" alt="a4" id="a12" class=" w-100"></a>
            </div><br>
            <form name="Konfigurator">
                <div class="wybor">

                    <select name="Wersja" onchange="wybierzSilnik(this.value);" class="kon">
                        <option value=" " selected="selected">Wybierz wersje wyposażenia</option>
                        <option value="1">Podstawowe Line</option>
                        <option value="2">Bogato Line</option>
                        <option value="3">Full Opcja Line</option>
                    </select>

                    <li id="a"></li>
                    <li id="b"></li>
                    <li id="c"></li>


                </div>
                <div class="wybor">

                    <select name="Silnik" onchange="wybierzSkrzynie(this.value);" class="kon">
                        <option value=" " selected="selected">Wybierz silnik</option>
                    </select>
                    <li id="d"></li>
                    <li id="e"></li>
                    <li id="f"></li>


                </div>
                <div class="wybor">

                    <select name="Skrzynia" onchange="wybierzKolor(this.value);" class="kon">
                        <option value=" " selected="selected">Wybierz skrzynie</option>
                    </select>
                    <li id="g"></li>
                    <li id="g"></li>
                    <li id="g"></li>
                </div>
                <div class="wybor">

                    <select name="Kolor" onchange="wybierzFelgi(this.value);" class="kon">
                        <option value=" " selected="selected">Wybierz kolor</option>
                    </select>
                    <li id="h"></li>
                    <li id="h"></li>
                    <li id="h"></li>
                </div>
                <div class="wybor">

                    <select name="Felgi" onchange="ustawFelgi(this.value);" class="kon">
                        <option value=" " selected="selected">Wybierz felgi</option>
                    </select>
                    <li id="i"></li>
                    <li id="i"></li>
                    <li id="i"></li>
                </div>
            </form>

        </div>
        <div class="stopka-konfig">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

        </div>
    </div>
</body>

</html>