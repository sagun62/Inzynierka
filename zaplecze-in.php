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
                    <p class="zmien2 ">Witaj <?= $_SESSION['user'] ?>&nbsp;</p>
                <?php

                } else {
                ?>
                    <p class="zmien2">Zaloguj się </p>
                <?php
                }
                ?>
            </div>

        </div>
        <div class="system container h-100 w-100 d-flex justify-content-center">
            <?php
            require_once "connect.php";
            $polaczenie = @new mysqli($host, $db_user, $dp_password, $db_name);
            if ($polaczenie->connect_errno != 0) {
                echo "Error:" . $polaczenie->connect_errno;
            } else {
                $user = $_POST['user'];
                $haslo = $_POST['haslo'];

                $sql = "SELECT * FROM uzytkownicy WHERE user='$user' AND haslo='$haslo' AND administrator='Tak'";
                if ($rezultat = @$polaczenie->query($sql)) {
                    $klient = $rezultat->num_rows;
                    if ($klient > 0) {
                        $_SESSION['zalogowany'] = true;
                        $wiersz = $rezultat->fetch_assoc();
                        $_SESSION['user'] = $wiersz['user'];
                        $_SESSION['model'] = $wiersz['model'];

                        $rezultat->close();
                        header('Location: admin.php');
                        
                    } else {
                        header('Location: zaplecze.php');
                        
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