<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pl">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="custom.js"></script>
    <script type="text/javascript" src="jquery.convform.js"></script>
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/chatbox.css">
    <link rel="stylesheet" href="css/jquery.convform.css">
    <script src="main.js"></script>



    <title>Grotti Cars</title>


</head>

<body>

    <div class="home">
        <div class="baner">
            <div class="logo">
                <a href="index.php"><img src="image/logo.png" alt="logo" id="logo"></a>
            </div>
            <div class="admin">
                <?php
                if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
                ?>
                    <p class="zmien ">Witaj <?= $_SESSION['user'] ?>&nbsp;</p>
                <?php

                } else {
                ?>
                    <p class="zmien">Zaloguj się </p>
                <?php
                }
                ?>
            </div>

        </div>
        <div class="system container h-100 w-100 mx-auto">
        <br>
                <h1>Tryb modyfikacji</h1>
            <?php
            error_reporting(0);
            // odbieramy dane z formularza
            $id = $_GET['id'];
            $imie = $_GET['imie'];
            $nazwisko = $_GET['nazwisko'];
            $telefon = $_GET['telefon'];
            $numer = $_GET['numer'];
            $termin = $_GET['termin'];
            $opis = $_GET['opis'];
                

            require_once "connect.php";
            $mysqli = new mysqli($host, $db_user, $dp_password, $db_name);

            if ($mysqli->connect_errno) {
                echo '<div class="system container h-100 w-100 mx-auto">
                <h1>Nie działa</h1>
                     </div>
                    ' . $mysqli->connect_error;
                exit();
                $mysqli->close();
            }
            echo "<br>";

            ?>
            <form name="zmien-serwis-baza.php" action="zmien-serwis-baza.php" class="form-zmien" method="POST">
                <p>ID</p><input type="text" name="id" value="<?= $id ?>" />
                <p>Imię</p><input type="text" name="imie" value="<?= $imie ?>" />
                <p>Nazwisko</p><input type="text" name="nazwisko" value="<?= $nazwisko ?>" />
                <p>Telefon</p><input type="text" name="telefon" value="<?= $telefon ?>" />
                <p>Numer rejestracyjny</p><input type="text" name="numer" value="<?= $numer ?>" />
                <p>Termin</p><input type="text" name="termin" value="<?= $termin ?>" />
                <p>Opis</p><input type="text" name="opis" value="<?= $opis ?>" /><br><br>
                <input type="submit" value="Zmień" class="edytuj1">
                <a href="admin.php" class="edytuj">Wróc do Panelu</a>
            </form>
           


        </div>



        <div class="stopka">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

        </div>
    </div>



</body>


</html>