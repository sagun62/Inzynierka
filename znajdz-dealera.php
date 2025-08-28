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
    <div class="znajdz">
      <?php
      $miasto = trim($_POST['miasto']);
      if (empty($miasto)) {
        echo '<div class="znajdz">    
        <div class="search4">
        <form class="dealer-find" action="znajdz-dealera.php" method="POST">
          <br>
          <p class="">Wybierz dealera: </p>
          <select name="miasto"  class="but_pytaj">
            <option value="">Wybierz</option>
            <option value="rzeszow.php">Rzeszów</option>
            <option value="warszawa.php">Warszawa</option>
            <option value="gdansk.php">Gdańsk</option>
          </select>
          <br><br>
          <input type="submit" value="ZNAJDŹ" class="but_pytaj">
          <p class="error">Nie wybrano dealera</p>
        </form>
      </div>
      <div class="place">
      <h2>TO JUZ OSTATNI KROK DO NOWEGO AUTA<BR>WYBIERZ DEALERA</h2>
       
       
      </div>';
      } else {
        include $miasto;
      }
      ?>
    </div>
    <div class="stopka">
      <p>&copy; Copyright 2021 Grotti Cars Kamil Sagan</p>

    </div>
  </div>
</body>

</html>