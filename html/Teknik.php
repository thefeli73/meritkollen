<!doctype html>
<html lang="sv-SE">
<head>
<meta charset="utf-8">
<title>Teknik</title>

<meta name="keywords" content="teknik,teknikprogrammet,meritkollen,meritkalkylator,merit kalkylator,merit poäng,meritpoäng,kalkylator,meritvärde,njudungsgymnasiet,högskola,universitet,gymnasiet,högskolförberedande,program">
<?php
include "include/html_head.php";
?>
</head>

<body>

<header class="parallaxHeader" id="pageContent">
<h1 class="bannerTitle animate-bottom">Teknik</h1>
<h5 class="bannerTitle textCenter animate-bottom" style="background-color:unset;">Meritkalkylatorn för Teknikprogrammet</h5>
<!-- tillbaka knapp -->
<a class="backKnapp mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="/">
  <i class="material-icons">home</i>
</a>
<!--
XXXX
BODY
XXXX
-->
<div class="demo-card-square mdl-card mdl-shadow--4dp marginAuto animate-bottom" style="overflow:visible;">


<content style="align-self:center; margin:0 0 50px 0;">
<!-- Tooltips / ämnes beskrivning -->
        <div class="mdl-tooltip" for="inr1">Datorteknik 1a<br>Design<br>Mekatronik 1</div>
        <div class="mdl-tooltip" for="inr2">Programmering 1<br>Konstruktion<br>Produktionskunskap 1</div>
        <div class="mdl-tooltip" for="inr3">Webbutveckling 1<br>CAD 1 + Bild och Form 1a1<br>Produktionsutrustning 1</div>
        <div class="mdl-tooltip" for="tek1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="fys1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="kem1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="prof1">Webbserverprogrammering 1<br>CAD 2 + CAD 3<br>Industritekniska processer 1</div>
        <div class="mdl-tooltip" for="prof2">Matematik 4<br>Entreprenörskap</div>
        <div class="mdl-tooltip" for="prof3">Matematik 5<br>Produktutveckling</div>
        <div class="mdl-tooltip" for="prof4">Fysik 2<br>Teknikspecialisering<br>Engelska 7</div>
        <div class="mdl-tooltip" for="indv1">Exempel:<br>Nätverksteknik<br>Massage</div>
        <div class="mdl-tooltip" for="indv2">Exempel:<br>Engelska 7</div>

<?php
include "include/settings.php";
include "include/extraKurs.php";
include "include/createCourse.php";

createCourse("Engelska 5","eng5",100 , "disabled");
createCourse("Engelska 6","eng6",100 , "");
createCourse("Historia 1a1","his1b",50 , "disabled");
createCourse("Idrott och hälsa 1","idr1",100 , "disabled");
createCourse("Matematik 1c","mat1c",100 , "disabled");
createCourse("Matematik 2c","mat2c",100 , "");
createCourse("Matematik 3c","mat3c",100 , "");
createCourse("Religionskunskap 1","rel1",50 , "disabled");
createCourse("Samhällskunskap 1b","sam1b",100 , "disabled");
createCourse("Svenska 1","sve1",100 , "disabled");
createCourse("Svenska 2","sve2",100 , "");
createCourse("Svenska 3","sve3",100 , "");
createCourse("Teknik 1","tek1",150 , "");
createCourse("Fysik 1","fys1",150 , "");
createCourse("Kemi 1","kem1",100 , "");
createCourse("Inriktning 1","inr1",100 , "");
createCourse("Inriktning 2","inr2",100 , "");
createCourse("Inriktning 3","inr3",100 , "");
createCourse("Programfördjupning 1","prof1",100 , "");
createCourse("Programfördjupning 2","prof2",100 , "");
createCourse("Programfördjupning 3","prof3",100 , "");
createCourse("Programfördjupning 4","prof4",100 , "");
createCourse("Individuellt val 1","indv1",100 , "");
createCourse("Individuellt val 2","indv2",100 , "");

include "include/createCourse_end.php";
?>

</content>
</div>
</header>
<?php
include "include/html_script_bottom_head.php";

include "include/info.php";
?>
</body>
</html>
