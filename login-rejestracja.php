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
    <div class="home h-log" >
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
        <div class="login">
            <?php
            /*********************************************
             * plik formularz.php
             *********************************************/
            error_reporting(0);
            $user1 = $_POST['user1'];
            $haslo1 = $_POST['haslo1'];
            require_once "connect.php";        
            $mysqli = new mysqli($host, $db_user, $dp_password, $db_name);

            //laczymy z baza
            if ($mysqli->connect_errno) {
                echo '<div class="logowanie pt-5">
                <h1>nie dziala z baza</h1>

            </div>
            <div class="rejestracja pt-5">
                <h1>REJESTRACJA</h1>

                
                <form name="login-rejestracja.php" action="login-rejestracja.php" method="POST">
                    <br>
                    <p>Użytkownik: </p>
                    <input type="text" name="user1" class="umow2">
                    <br>
                    <p>Hasło: </p>
                    <input type="password" name="haslo1" class="umow2">
                    <br>
                    <br>
                    <input type="submit" value="DOŁĄCZ" class="login-button">

                </form>
            </div>
                    ' . $mysqli->connect_error;
                exit();
            }

            if ((empty($user1)) || (empty($haslo1))) {
                echo '<div class="login">
                <div class="logowanie pt-5">
                <h1>Uzupełnij pola formularza</h1>

            </div>
            <div class="rejestracja pt-5">
                <h1 class="h2" >REJESTRACJA</h1>


                <form name="login-rejestracja.php" action="login-rejestracja.php" method="POST">
                    <br>
                    <p>Użytkownik: </p>
                    <input type="text" name="user1" class="umow2">
                    <br>
                    <p>Hasło: </p>
                    <input type="password" name="haslo1" class="umow2">
                    <br>
                    <br>
                    <input type="submit" value="DOŁĄCZ" class="login-button">

                </form>
            </div>

                <div class="stopka" style="color: #dcdcdc; font-size: 2.15vh">
                    <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>
                </div>

            </div>
            ';
                $mysqli->close();
            }
            //zapytanie/polecenie do bazy
            if ($result = $mysqli->query("INSERT INTO uzytkownicy SET user='$user1', haslo='$haslo1'")) {
                echo '<div class="login" style=" background-color: #f5f5f5">
                    
                    <p> Utworzono konto, przejdź do logowania</p>
                    <a href="login.php" class="login-button">ZALOGUJ</a>
    
            </div>
            <div class="stopka" style="color: #dcdcdc; font-size: 2.15vh">
                    <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>
                </div>';
            }

            $mysqli->close();

            ?>

        </div>

    </div>
</body>

</html>