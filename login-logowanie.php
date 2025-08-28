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
                <div id="znajdz" ondblclick="hide('znajdz')">
                    <form id="main-searchForm" name="search" method="post" onsubmit="wyszukaj()">
                        <input type="text" id="wyszukiwarka" name="wyszukiwarka" placeholder="W czym możemy pomóc?" />
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
            require_once "connect.php";
            $polaczenie = @new mysqli($host, $db_user, $dp_password, $db_name);
            if ($polaczenie->connect_errno != 0) {
                echo "Error:" . $polaczenie->connect_errno;
            } else {
                $user = $_POST['user'];
                $haslo = $_POST['haslo'];

                $sql = "SELECT * FROM uzytkownicy WHERE user='$user' AND haslo='$haslo'";
                if ($rezultat = @$polaczenie->query($sql)) {
                    $klient = $rezultat->num_rows;
                    if ($klient > 0) {
                        $_SESSION['zalogowany'] = true;
                        $wiersz = $rezultat->fetch_assoc();
                        $_SESSION['user'] = $wiersz['user'];
                        $_SESSION['model'] = $wiersz['model'];

                        $rezultat->close();
                        header('Location: welcome.php');
                    } else {
                        echo '<div class="logowanie pt-5">
                        <h1 class="h2" >LOGOWANIE</h1>
        
                        
                        <form name="login-logowanie.php" action="login-logowanie.php" method="POST">
                            <br>
                            <p>Użytkownik: </p>
                            <input type="text" name="user" class="umow2">
                            <br>
                            <p>Hasło: </p>
                            <input type="password" name="haslo" class="umow2">
                            <br>
                            <br>
                            <input type="submit" value="WEJDŹ" class="login-button">
        
                        </form>
        
                    </div>
                    <div class="rejestracja pt-5">
                        <h1>Niepoprawne dane</h1>
        
                        
                       
                    </div>';
                    }
                }
                $polaczenie->close();
            }
            ?>





        </div>
        <div class="stopka">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

        </div>
    </div>
</body>

</html>