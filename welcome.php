<?php
session_start();
if (!isset($_SESSION['zalogowany'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
        <div class="box col-md-12 row mx-auto h-auto">
            <div class="profil-r   col-md-6 p-5 ">
                <?php
                echo "<h1>Witaj " . $_SESSION['user'] . "</h1>";
                ?>

                <img src="image/user.png" class="img-fluid" alt="user"><br>

                <a href='logout.php' class='guzik'>WYLOGUJ</a>
            </div>
            <div class="profil-l   col-md-6 p-5">
                <h2>Twój pojazd Grotti Spider</h2><br>


                <img src="image/lista-modeli.png" class="foto2 img-fluid mb-5"><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porta lorem mollis aliquam ut porttitor leo. Hendrerit gravida rutrum quisque non. Arcu non odio euismod lacinia at quis risus sed. Volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Hac habitasse platea dictumst quisque sagittis purus. </p>
                <a href='serwis.php' class='guzik'>Umów wizytę w serwisie</a>


            </div>





        </div>
        <div class="stopka">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

        </div>
    </div>
</body>

</html>