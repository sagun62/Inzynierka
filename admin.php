<?php
session_start();
if (!isset($_SESSION['zalogowany'])) {
    header('Location: zaplecze.php');
    exit();
}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                    <p class="zmien2 ">Witaj <?= $_SESSION['user'] ?>,&nbsp;</p>
                    <a href='logout-admin.php' class=''>WYLOGUJ</a>
                <?php

                } else {
                ?>
                    <p class="zmien2">Zaloguj się </p>
                <?php
                }
                ?>

            </div>

        </div>
        <div class="system container h-100 ">


            <h1>System kontroli</h1>
            <input type="submit" class="w-25" value="Serwis" onclick="look1()" />
            <input type="submit" class="w-25" value="Konta" onclick="look2()" />
            <input type="submit" class="w-25" value="Kontakt" onclick="look3()" />

            <div id="sql_kontakt" class="h-75 w-100">

                <?php
                require_once "connect.php";
                $mysqli = new mysqli($host, $db_user, $dp_password, $db_name);

                if ($mysqli->connect_errno) {
                    echo '<div class="system container h-100 w-100 ">
                <p>Nie działa</p>
                     </div>
                    ' . $mysqli->connect_error;
                    exit();
                }


                $wynik = $mysqli->query("SELECT * FROM kontakt");
                $kontakt = 0;
                while ($row = mysqli_fetch_array($wynik)) {

                    echo '<div class="wpis w-100 h-25" >';
                    echo '<div id=' . $kontakt . '>';
                    echo "<tr>";
                    echo "<td>" . $row[0] . "</td>" . "&nbsp;";
                    echo "<td>" . $row[1] . "</td>" . "&nbsp;";
                    echo "<td>" . $row[2] . "</td>" . "&nbsp;";
                    echo "<td><b>" . $row[3] . "</b></td>" . "<br>&nbsp;";
                    echo "<td>" . $row[4] . "</td>" . "&nbsp;";
                    echo '</div>';
                    echo "<td>

                   <a href=\"zmien-kontakt.php?a=edit&amp;id={$row[0]}&amp;imie={$row[1]}&amp;nazwisko={$row[2]}&amp;email={$row[3]}&amp;wiadomosc={$row[4]}\" class='edytuj1'>Edytuj</a>
                   <a href=\"usun-kontakt.php?a=del&amp;id={$row[0]}\"class='edytuj'>Usuń</a>
                   </td>";
                    echo "</tr>";
                    echo '<input type="submit" class="edytuj2" value="Generuj PDF" onclick="generatePDFKontakt(' . $kontakt . ')"/>';
                    echo '<hr></div>';
                    $kontakt++;

                    //echo $row['ID'] . "&nbsp;&nbsp;" . $row['Imie'] . "&nbsp;&nbsp;" . $row['Nazwisko'] . "&nbsp;&nbsp;" . $row['Telefon'] . "&nbsp;&nbsp;" . $row['Termin'] . "&nbsp;&nbsp;" . $row['Opis'] . "<br>";
                    //echo '<input type="submit" onclick="move()" value="Zmień"/> <input type="submit" onclick="move2()" value="Usuń"/>';
                    //echo '</div>';
                }

                $mysqli->close();


                ?>


            </div>

            <div id="sql_serwis" class="h-75 w-100">

                <?php
                require_once "connect.php";
                $mysqli = new mysqli($host, $db_user, $dp_password, $db_name);

                if ($mysqli->connect_errno) {
                    echo '<div class="system container h-100 w-100 ">
                <p>Nie działa</p>
                     </div>
                    ' . $mysqli->connect_error;
                    exit();
                }


                $wynik = $mysqli->query("SELECT * FROM serwis");
                $serwis = 100000;
                while ($row = mysqli_fetch_array($wynik)) {
                    echo '<div class="wpis w-100 h-25" >';
                    echo '<div id=' . $serwis . '>';
                    echo "<tr>";
                    echo "<td>" . $row[0] . "</td>" . "&nbsp;";
                    echo "<td>" . $row[1] . "</td>" . "&nbsp;";
                    echo "<td>" . $row[2] . "</td>" . "&nbsp;";
                    echo "<td><b>Tel.&nbsp;" . $row[3] . "</b></td>" . "&nbsp;";
                    echo "<td>" . $row[4] . "</td>" . "<br>&nbsp;";
                    echo "<td><b>" . $row[5] . "</b></td>" . "&nbsp;";
                    echo "<td>" . $row[6] . "</td>" . "&nbsp;";
                    echo '</div>';
                    echo "<td>
                   <a href=\"zmien-serwis.php?a=edit&amp;id={$row[0]}&amp;imie={$row[1]}&amp;nazwisko={$row[2]}&amp;telefon={$row[3]}&amp;numer={$row[4]}&amp;termin={$row[5]}&amp;opis={$row[6]}\" class='edytuj1'>Edytuj</a>
                   <a href=\"usun-serwis.php?a=del&amp;id={$row[0]}\"class='edytuj'>Usuń</a>
                   </td>";
                    echo "</tr>";
                    echo '<input type="submit" class="edytuj2" value="Generuj PDF" onclick="generatePDF(' . $serwis . ')"/>';
                    echo '<hr></div>';
                    $serwis++;
                    //echo $row['ID'] . "&nbsp;&nbsp;" . $row['Imie'] . "&nbsp;&nbsp;" . $row['Nazwisko'] . "&nbsp;&nbsp;" . $row['Telefon'] . "&nbsp;&nbsp;" . $row['Termin'] . "&nbsp;&nbsp;" . $row['Opis'] . "<br>";
                    //echo '<input type="submit" onclick="move()" value="Zmień"/> <input type="submit" onclick="move2()" value="Usuń"/>';
                    //echo '</div>';
                }

                $mysqli->close();


                ?>


            </div>
            <div id="sql_konta2" class="h-75 w-100">
                <div id="sql_konta" class="h-75 w-100">

                    <?php
                    require_once "connect.php";
                    $mysqli = new mysqli($host, $db_user, $dp_password, $db_name);

                    if ($mysqli->connect_errno) {
                        echo '<div class="system container h-100 w-100 ">
                <p>Nie działa</p>
                     </div>
                    ' . $mysqli->connect_error;
                        exit();
                    }


                    $wynik = $mysqli->query("SELECT * FROM uzytkownicy");
                    while ($row = mysqli_fetch_array($wynik)) {
                        echo '<div class="wpis w-100 h-25" >';

                        echo "<tr>";
                        echo "<td>Indetyfikator: " . $row[0] . "</td>" . "&nbsp;";
                        echo "<td>&nbsp;Login: " . $row[1] . "</td>" . "&nbsp;";
                        "<td><input type='password' name='haslo' value='<?= $row[2] ?>' />";
                        "<td>" . $row[3] . "</td>" . "&nbsp;";

                        echo "<br><td>  
                   <a href=\"zmien-konta.php?a=edit&amp;id={$row[0]}&amp;login={$row[1]}&amp;haslo={$row[2]}&amp;administrator={$row[3]}\" class='edytuj1'>Zmień uprawnienia</a>
                   <a href=\"usun-konta.php?a=del&amp;id={$row[0]}\"class='edytuj'>Usuń</a>
                   </td>";
                        echo "</tr>";

                        echo '<hr></div>';
                        //echo $row['ID'] . "&nbsp;&nbsp;" . $row['Imie'] . "&nbsp;&nbsp;" . $row['Nazwisko'] . "&nbsp;&nbsp;" . $row['Telefon'] . "&nbsp;&nbsp;" . $row['Termin'] . "&nbsp;&nbsp;" . $row['Opis'] . "<br>";
                        //echo '<input type="submit" onclick="move()" value="Zmień"/> <input type="submit" onclick="move2()" value="Usuń"/>';
                        //echo '</div>';
                    }

                    $mysqli->close();


                    ?>


                </div>
                <hr>
                <form name="dodaj-konta.php" action="dodaj-konta.php" method="POST">
                    <br>
                    <input type="text" name="user" placeholder="Login" class="">
                    <input type="password" name="haslo" placeholder="Hasło" class="">
                    <input type="password" name="rola" placeholder="Rola" class=""><br><br>
                    <input type="submit" value="Dodaj użytkownika" class="edytuj2">
                </form>
            </div>
        </div>
        <div class="turnDevice">
            
            <script>
                jQuery(window).bind('orientationchange', function(e) {
                    switch (window.orientation) {
                        case 0:
                            $('.turnDevice').css('display', 'none');
                            // The device is in portrait mode now
                            break;

                        case 180:
                            $('.turnDevice').css('display', 'none');
                            // The device is in portrait mode now
                            break;

                        case 90:
                            // The device is in landscape now
                            $('.turnDevice').css('display', 'block');
                            break;

                        case -90:
                            // The device is in landscape now
                            $('.turnDevice').css('display', 'block');
                            break;
                    }
                });
            </script>
        </div>


        <div class="stopka">
            <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

        </div>
    </div>



</body>


</html>