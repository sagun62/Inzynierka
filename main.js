function show(id) {
  document.getElementById(id).style.visibility = "visible";
}

function hide(id) {
  document.getElementById(id).style.visibility = "hidden";
}
//////
function hide2(id) {
  document.getElementById(id).style.display = "none";
}
//

function move(){
  document.getElementById("zmien").scrollIntoView();
}
function move2(){
  document.getElementById("usun").scrollIntoView();
}
//////
function show2(id) {
  document.getElementById(id).style.display = "inline-block";
}
///
function generatePDFKontakt(id) {
  
  const element = document.getElementById(id);
  html2pdf().from(element).save();
}

function generatePDF(id) {
  
  const element = document.getElementById(id);
  html2pdf().from(element).save();
}
///
function look1() {
  document.getElementById("sql_serwis").style.display = "block";
  document.getElementById("sql_kontakt").style.display = "none";
  document.getElementById("sql_konta2").style.display = "none";
}

///

function look2() {
  document.getElementById("sql_serwis").style.display = "none";
  document.getElementById("sql_kontakt").style.display = "none";
  document.getElementById("sql_konta2").style.display = "block";
}
///
///

function look3() {
  document.getElementById("sql_serwis").style.display = "none";
  document.getElementById("sql_kontakt").style.display = "block";
  document.getElementById("sql_konta2").style.display = "none";
}
///
function changeColor(kolor) {
  var color = ['image/red.png', 'image/blue.png', 'image/orange.png', 'image/white.png', 'image/black.png', 'image/green.png'];
  var a = kolor;
  for (i = 0; i < color.length; i++) {

    if (a == color[i]) {
      document.getElementById('zz').src = color[i];
    }
  }

}
/////
function nextFilm(film) {
  var color = ['image/lampy.mp4', 'image/moc.mp4', 'image/srodek.mp4'];

  var a = film;




  if (a == 'image/lampy.mp4') {
    document.getElementById('video').src = 'image/lampy.mp4';

    play();
    setTimeout(function () {
      document.getElementById('technologia-opis').style.display = "block"
    }, 8000);
    var p = document.getElementById('technologia-opis');
    p.textContent = 'Lampy Post no so what deal evil rent by real in. She offices for highest and replied one venture pasture.';

    setTimeout(function () {
      document.getElementById('next2').style.animation = "miganie 1.5s  infinite"
    }, 8000);



  } else {
    document.getElementById('technologia-opis').style.display = "none";
    document.getElementById('next2').style.animation = "";
  }

  if (a == 'image/moc.mp4') {
    document.getElementById('video').src = 'image/moc.mp4';

    play();
    setTimeout(function () {
      document.getElementById('technologia-opis').style.display = "block"
    }, 8000);
    var p = document.getElementById('technologia-opis');
    p.textContent = 'Moc Post no so what deal evil rent by real in. She offices for highest and replied one venture pasture.';

    setTimeout(function () {
      document.getElementById('next3').style.animation = "miganie 1.5s  infinite"
    }, 8000);

  } else {
    document.getElementById('technologia-opis').style.display = "none";
    document.getElementById('next3').style.animation = "";
  }

  if (a == 'image/srodek.mp4') {
    document.getElementById('video').src = 'image/srodek.mp4';

    play();
    setTimeout(function () {
      document.getElementById('technologia-opis').style.display = "block"
    }, 8000);
    var p = document.getElementById('technologia-opis');
    p.textContent = 'Wnetrze Post no so what deal evil rent by real in. She offices for highest and replied one venture pasture.';

  } else {
    document.getElementById('technologia-opis').style.display = "none";
  }




}

///
function my() {
  var x = document.getElementsByClassName("modele");
  $("x").css("left", "20vw");
  // $("div").css("left", "20vw");


}
////
function wyszukaj()


{

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("wyszukiwarka");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
/////



var slideIndex = 0;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
  myTimer();
}

/////


function myTimer() {
  setInterval(myTimer, 5000);
  const d = new Date();
  plusDivs(+1);
  console.log("dupa");
}




////

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slajd");
  var y = document.getElementsByClassName("napis");
  var z = document.getElementsByClassName("link");

  if (n > x.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = x.length
  }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    y[i].style.display = "none";
    z[i].style.display = "none";
  }

  x[slideIndex - 1].style.display = "block";
  y[slideIndex - 1].style.display = "block";
  z[slideIndex - 1].style.display = "block";
}



function play() {


  var video = document.getElementById('video');

  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }



}

////

function Wyczysc() {
  document.getElementById("kontakt-form").reset();
}


///



///

function pokaz(getElementsByClassName) {
  var x = document.getElementsByClassName("gama-p4");

  x.style.display = "none";
  document.getElementsByClassName(id).style.visibility = "hidden";

}

///////////////////////////////KONFIGURATOR
function wybierzSilnik(wersja) {

  var a = document.Konfigurator.Silnik;

  a.options.length = 1;
  document.getElementById('a').style.visibility = "hidden";
  document.getElementById('b').style.visibility = "hidden";
  document.getElementById('c').style.visibility = "hidden";
  document.getElementById('d').style.visibility = "hidden";
  document.getElementById('e').style.visibility = "hidden";
  document.getElementById('f').style.visibility = "hidden";
  document.getElementById('g').style.visibility = "hidden";
  document.getElementById('h').style.visibility = "hidden";
  document.getElementById('a1').style.visibility = "hidden";
  document.getElementById('a2').style.visibility = "hidden";
  document.getElementById('a3').style.visibility = "hidden";
  document.getElementById('a4').style.visibility = "hidden";
  document.getElementById('a5').style.visibility = "hidden";
  document.getElementById('a6').style.visibility = "hidden";
  document.getElementById('a7').style.visibility = "hidden";
  document.getElementById('a8').style.visibility = "hidden";
  document.getElementById('a9').style.visibility = "hidden";
  document.getElementById('a10').style.visibility = "hidden";
  document.getElementById('a11').style.visibility = "hidden";
  document.getElementById('a12').style.visibility = "hidden";




  if (wersja == "1") {

    a.options[a.options.length] = new Option('1.5', '1');

    document.getElementById('a').style.visibility = "visible";
    document.getElementById('b').style.visibility = "visible";
    document.getElementById('c').style.visibility = "visible";
    document.getElementById('a1').style.visibility = "visible";


    var p = document.getElementById('a');
    p.textContent = 'Szyby ręcznie regulowane';
    var p2 = document.getElementById('b');
    p2.textContent = 'Klimatyzacja manualna';
    var p3 = document.getElementById('c');
    p3.textContent = 'Gumowa kierownica';

    var p4 = document.getElementById('a1');
    p4.this.src = 'wersja1.png'






  }

  if (wersja == "2") {

    a.options[a.options.length] = new Option('2.0', '2');
    document.getElementById('a').style.visibility = "visible";
    document.getElementById('b').style.visibility = "visible";
    document.getElementById('c').style.visibility = "visible";
    document.getElementById('a2').style.visibility = "visible";



    var p = document.getElementById('a');
    p.textContent = 'Szyby elektryczne';
    var p2 = document.getElementById('b');
    p2.textContent = 'Klimatyzacja automatyczna';
    var p3 = document.getElementById('c');
    p3.textContent = 'Eco-skóra na kierownicy';
    var p4 = document.getElementById('a2');
    p4.this.src = 'wersja2.png'

  }
  if (wersja == "3") {

    a.options[a.options.length] = new Option('2.0T', '3');

    a.options[a.options.length] = new Option('3.5 V6', '4');

    document.getElementById('a').style.visibility = "visible";
    document.getElementById('b').style.visibility = "visible";
    document.getElementById('c').style.visibility = "visible";
    document.getElementById('a3').style.visibility = "visible";

    var p = document.getElementById('a');
    p.textContent = 'Przyciemniane szyby';
    var p2 = document.getElementById('b');
    p2.textContent = 'Kamera cofania';
    var p3 = document.getElementById('c');
    p3.textContent = 'Skórzana kierownica';
    var p4 = document.getElementById('a3');
    p4.this.src = 'wersja3.png'


  }

}

////

function wybierzSkrzynie() {

  var a = document.Konfigurator.Skrzynia;
  a.options.length = 1;
  document.getElementById('d').style.visibility = "hidden";
  document.getElementById('e').style.visibility = "hidden";
  document.getElementById('f').style.visibility = "hidden";
  document.getElementById('g').style.visibility = "hidden";
  document.getElementById('h').style.visibility = "hidden";


  if (document.Konfigurator.Silnik.value == "3") {
    a.options[a.options.length] = new Option('8MT', '1');
    document.getElementById('d').style.visibility = "visible";
    document.getElementById('e').style.visibility = "visible";
    document.getElementById('f').style.visibility = "visible";

    var p4 = document.getElementById('d');
    p4.textContent = 'Generuje 250Km';
    var p5 = document.getElementById('e');
    p5.textContent = 'Osiąga 320Nm';
    var p6 = document.getElementById('f');
    p6.textContent = 'Spalanie średnie 6l/100km';





  }
  if (document.Konfigurator.Silnik.value == "4") {
    a.options[a.options.length] = new Option('12AT', '2');
    document.getElementById('d').style.visibility = "visible";
    document.getElementById('e').style.visibility = "visible";
    document.getElementById('f').style.visibility = "visible";
    var p7 = document.getElementById('d');
    p7.textContent = 'Generuje 380Km';
    var p8 = document.getElementById('e');
    p8.textContent = 'Osiąga 560Nm';
    var p9 = document.getElementById('f');
    p9.textContent = 'Spalanie średnie 8l/100km';
  }
  if (document.Konfigurator.Silnik.value == "1") {
    a.options[a.options.length] = new Option('5MT', '3');
    document.getElementById('d').style.visibility = "visible";
    document.getElementById('e').style.visibility = "visible";
    document.getElementById('f').style.visibility = "visible";
    document.getElementById('cena-silnik').style.visibility = "visible";
    var p77 = document.getElementById('d');
    p77.textContent = 'Generuje 150Km';
    var p88 = document.getElementById('e');
    p88.textContent = 'Osiąga 210Nm';
    var p99 = document.getElementById('f');
    p99.textContent = 'Spalanie średnie 5l/100km';




  }

  if (document.Konfigurator.Silnik.value == "2") {
    a.options[a.options.length] = new Option('4AT', '4');
    document.getElementById('d').style.visibility = "visible";
    document.getElementById('e').style.visibility = "visible";
    document.getElementById('f').style.visibility = "visible";

    var p10 = document.getElementById('d');
    p10.textContent = 'Generuje 190Km';
    var p11 = document.getElementById('e');
    p11.textContent = 'Osiąga 260Nm';
    var p12 = document.getElementById('f');
    p12.textContent = 'Spalanie średnie 5.5l/100km';
  }
  wybierzKolor();
}
////
function wybierzKolor() {
  var a = document.Konfigurator.Kolor;

  document.getElementById('g').style.visibility = "hidden";
  document.getElementById('h').style.visibility = "hidden";

  a.options.length = 1;

  if (document.Konfigurator.Skrzynia.value == "1") {
    a.options[a.options.length] = new Option('pomarańczowy', '1');
    a.options[a.options.length] = new Option('zółty', '2');
    a.options[a.options.length] = new Option('niebieski', '3');
    document.getElementById('g').style.visibility = "visible";
    var p13 = document.getElementById('g');
    p13.textContent = 'Precyzyjna manulna skrzynia biegów o 8 przełożeniach';

  }
  if (document.Konfigurator.Skrzynia.value == "2") {
    a.options[a.options.length] = new Option('czerwony', '4');
    document.getElementById('g').style.visibility = "visible";
    var p14 = document.getElementById('g');
    p14.textContent = 'Nowoczesna automatyczna skrzynia biegów o 12 przełożeniach';
  }

  if (document.Konfigurator.Skrzynia.value == "3") {
    a.options[a.options.length] = new Option('zółty', '5');
    a.options[a.options.length] = new Option('niebieski', '6');
    a.options[a.options.length] = new Option('szary', '7');
    document.getElementById('g').style.visibility = "visible";
    var p15 = document.getElementById('g');
    p15.textContent = 'Manualna skrzynia biegów o 5 przełożeniach';


  }
  if (document.Konfigurator.Skrzynia.value == "4") {
    a.options[a.options.length] = new Option('brązowy', '8');
    a.options[a.options.length] = new Option('zielony', '9');
    document.getElementById('g').style.visibility = "visible";
    var p15 = document.getElementById('g');
    p15.textContent = 'Automatyczna skrzynia biegów o 4 przełożeniach';

  }
  wybierzFelgi();
}
////
function wybierzFelgi() {

  var a = document.Konfigurator.Felgi;

  document.getElementById('h').style.visibility = "hidden";
  document.getElementById('a4').style.visibility = "hidden";
  document.getElementById('a5').style.visibility = "hidden";
  document.getElementById('a6').style.visibility = "hidden";
  document.getElementById('a7').style.visibility = "hidden";
  document.getElementById('a8').style.visibility = "hidden";
  document.getElementById('a9').style.visibility = "hidden";
  document.getElementById('a10').style.visibility = "hidden";
  document.getElementById('a11').style.visibility = "hidden";
  document.getElementById('a12').style.visibility = "hidden";

  a.options.length = 1;


  if (document.Konfigurator.Kolor.value == "1" || document.Konfigurator.Kolor.value == "2" || document.Konfigurator.Kolor.value == "3") {
    a.options[a.options.length] = new Option('20 cali', '1');
    document.getElementById('h').style.visibility = "visible";
    var p15 = document.getElementById('h');
    p15.textContent = 'Piękny metaliczny kolor';


    if (document.Konfigurator.Kolor.value == "1") {
      document.getElementById('a11').style.visibility = "visible";
      var pa = document.getElementById('a11');
      pa.this.src = 'wersja3-orange.png'
    } else if (document.Konfigurator.Kolor.value == "2") {
      document.getElementById('a9').style.visibility = "visible";
      var pa = document.getElementById('a9');
      pa.this.src = 'wersja3-yellow.png'
    } else {
      document.getElementById('a12').style.visibility = "visible";
      var pa = document.getElementById('a12');
      pa.this.src = 'wersja3-blue.png'
    }

  }

  if (document.Konfigurator.Kolor.value == "5" || document.Konfigurator.Kolor.value == "6" || document.Konfigurator.Kolor.value == "7") {
    a.options[a.options.length] = new Option('16 cali', '2');
    document.getElementById('h').style.visibility = "visible";
    var p15 = document.getElementById('h');
    p15.textContent = 'Akrylowy kolor';

    if (document.Konfigurator.Kolor.value == "5") {
      document.getElementById('a6').style.visibility = "visible";
      var pa = document.getElementById('a6');
      pa.this.src = 'wersja1-yellow.png'
    } else if (document.Konfigurator.Kolor.value == "6") {
      document.getElementById('a4').style.visibility = "visible";
      var pa = document.getElementById('a4');
      pa.this.src = 'wersja1-blue.png'
    } else {
      document.getElementById('a5').style.visibility = "visible";
      var pa = document.getElementById('a5');
      pa.this.src = 'wersja1-grey.png'
    }

  }
  if (document.Konfigurator.Kolor.value == "8" || document.Konfigurator.Kolor.value == "9") {
    a.options[a.options.length] = new Option('18 cali', '3');
    document.getElementById('h').style.visibility = "visible";
    var p15 = document.getElementById('h');
    p15.textContent = 'Metaliczny kolor';
    if (document.Konfigurator.Kolor.value == "8") {
      document.getElementById('a8').style.visibility = "visible";
      var pa = document.getElementById('a8');
      pa.this.src = 'wersja2-brown.png'
    } else {
      document.getElementById('a7').style.visibility = "visible";
      var pa = document.getElementById('a7');
      pa.this.src = 'wersja2-green.png'
    }
  }
  if (document.Konfigurator.Kolor.value == "4") {
    a.options[a.options.length] = new Option('21 cali', '4');
    document.getElementById('h').style.visibility = "visible";
    var p15 = document.getElementById('h');
    p15.textContent = 'Limitowany kolor edycji specjalnej';
    document.getElementById('a10').style.visibility = "visible";
    var pa = document.getElementById('a10');
    pa.this.src = 'wersja3-red.png'
  }
  ustawFelgi();
}
///
function ustawFelgi() {

  document.getElementById('i').style.visibility = "hidden";
  if (document.Konfigurator.Felgi.value == "1") {
    document.getElementById('i').style.visibility = "visible";
    var p15 = document.getElementById('i');
    p15.textContent = 'Felgi aluminiowe w rozmiarze 20 cali';

  }
  if (document.Konfigurator.Felgi.value == "2") {
    document.getElementById('i').style.visibility = "visible";
    var p15 = document.getElementById('i');
    p15.textContent = 'Felgi stalowe z kołpakami w rozmiarze 16 cali';
  }

  if (document.Konfigurator.Felgi.value == "3") {
    document.getElementById('i').style.visibility = "visible";
    var p15 = document.getElementById('i');
    p15.textContent = 'Felgi aluminiowe w rozmiarze 18 cali';


  }
  if (document.Konfigurator.Felgi.value == "4") {
    document.getElementById('i').style.visibility = "visible";
    var p15 = document.getElementById('i');
    p15.textContent = 'Felgi aluminiowe w rozmiarze 21 cali';

  }
}
