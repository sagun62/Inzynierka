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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
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
        <div class="serwis">
            <?php
            error_reporting(0);
            // odbieramy dane z formularza
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $telefon = $_POST['telefon'];
            $numer = $_POST['numer'];
            $termin = $_POST['termin'];
            $opis = $_POST['opis'];
            $zgoda = $_POST['zgoda'];

            require_once "connect.php";
            $mysqli = new mysqli($host, $db_user, $dp_password, $db_name);

            //laczymy z baza
            if ($mysqli->connect_errno) {
                echo '
            <div class="form-serwis pb-3">
                <h1>SPRÓBUJ PONOWNIE</h1>
                <form name="umow-serwis.php" action="umow-serwis.php" method="POST">

                    <p>Podaj Imię: </p>
                    <input type="text" name="imie" class="umow">

                    <p>Podaj Nazwisko: </p>
                    <input type="text" name="nazwisko" class="umow">

                    <p>Podaj numer kontaktowy: </p>
                    <input type="text" name="telefon" maxlength="9" class="umow">

                    <p>Podaj numer rejestracyjny auta: </p>
                    <input type="text" name="numer" class="umow">

                    <p>Data zlecenia: </p>
                    <input type="text" id="datepicker" name="termin" class="umow"></p>
                    <p><i>*Godzina zlecenia zostanie ustalona tydzień przed planowaną wizytą</i></p>

                    <p>Krótki opis usterki lub powód wizyty w serwisie: </p>
                    <input type="text" name="opis" class="umow" maxlength="30">

                    <p>Zgadzam się na przetwarzanie moich danych osobowych <input type="checkbox" name="zgoda"> </p>

                    <input type="submit" value="Wyślij" class="dealer-button w-25">

                </form>
            </div>
            <div class="stopka">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

            </div>' . $mysqli->connect_error;
                exit();
            }

            if ((empty($imie)) || (empty($nazwisko)) || (empty($telefon)) || (empty($numer)) || (empty($termin)) || (empty($opis)) || (empty($zgoda))) {
                echo '
            <div class="form-serwis pb-3">
               
                <h1>UZUPEŁNIJ WSZYSTKIE POLA FORMULARZA</h1>
                <form name="umow-serwis.php" action="umow-serwis.php" method="POST">

                    <p>Podaj Imię: </p>
                    <input type="text" name="imie" class="umow">

                    <p>Podaj Nazwisko: </p>
                    <input type="text" name="nazwisko" class="umow">

                    <p>Podaj numer kontaktowy: </p>
                    <input type="text" name="telefon" maxlength="9" class="umow">

                    <p>Podaj numer rejestracyjny auta: </p>
                    <input type="text" name="numer" class="umow">

                    <p>Data zlecenia: </p>
                    <input type="text" id="datepicker" name="termin" class="umow"></p>
                    <p><i>*Godzina zlecenia zostanie ustalona tydzień przed planowaną wizytą</i></p>

                    <p>Krótki opis usterki lub powód wizyty w serwisie: </p>
                    <input type="text" name="opis" class="umow" maxlength="30">

                    <p>Zgadzam się na przetwarzanie moich danych osobowych <input type="checkbox" name="zgoda"> </p>

                    <input type="submit" value="Wyślij" class="dealer-button w-25">

                </form>
            </div>
            <div class="stopka">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

            </div>
            ';
                $mysqli->close();
            }
            //zapytanie/polecenie do bazy

            if ($result = $mysqli->query("INSERT INTO serwis SET imie='$imie', nazwisko='$nazwisko', telefon='$telefon', numer='$numer', termin='$termin', opis='$opis', zgoda='$zgoda'")) {
                echo '
            <div class="form-serwis pb-3">
                
                <h1>ZLECENIE WYSŁANE</h1><br>
                <a href="index.html" class="dealer-button">Wróć do strony głównej</a><br><br>
                <h1>POSIADASZ WIĘCEJ AUT, UMÓW JE JUŻ TERAZ</h1>
                <form name="umow-serwis.php" action="umow-serwis.php" method="POST">

                    <p>Podaj Imię: </p>
                    <input type="text" name="imie" class="umow">

                    <p>Podaj Nazwisko: </p>
                    <input type="text" name="nazwisko" class="umow">

                    <p>Podaj numer kontaktowy: </p>
                    <input type="text" name="telefon" maxlength="9" class="umow">

                    <p>Podaj numer rejestracyjny auta: </p>
                    <input type="text" name="numer" class="umow">

                    <p>Data zlecenia: </p>
                    <input type="text" id="datepicker" name="termin" class="umow"></p>
                    <p><i>*Godzina zlecenia zostanie ustalona tydzień przed planowaną wizytą</i></p>

                    <p>Krótki opis usterki lub powód wizyty w serwisie: </p>
                    <input type="text" name="opis" class="umow" maxlength="30">

                    <p>Zgadzam się na przetwarzanie moich danych osobowych <input type="checkbox" name="zgoda"> </p>

                    <input type="submit" value="Wyślij" class="dealer-button w-25">

                </form>
               
            </div> <div class="stopka">
                <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

            </div>
           ';
            }

            $mysqli->close();

            ?>

        </div>

    </div>
</body>

</html>