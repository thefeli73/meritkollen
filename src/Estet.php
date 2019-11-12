<!doctype html>
<html lang="sv-SE">
<head>
<meta charset="utf-8">
<title>Estet</title>

<meta name="keywords" content="estet,Estetiska,programmet,meritkollen,meritkalkylator,merit kalkylator,merit poäng,meritpoäng,kalkylator,meritvärde,njudungsgymnasiet,högskola,universitet,gymnasiet,högskolförberedande,program">
<link rel="canonical" href="https://meritkollen.se/Estet">
<?php
include "include/html_head.php";
?>
</head>

<body>

<header class="parallaxHeader" id="pageContent">
<h1 class="bannerTitle animate-bottom">Estet</h1>
<h5 class="bannerTitle textCenter animate-bottom" style="background-color:unset;">Meritkalkylatorn för Estetiska programmet</h5>
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
        <div class="mdl-tooltip" for="inr1">Gehörs- och musiklära 1</div>
        <div class="mdl-tooltip" for="inr2">Ensemble med körsång</div>
        <div class="mdl-tooltip" for="inr3">Huvudinstrument - Instrument<br>sång 1</div>
        <div class="mdl-tooltip" for="estkom">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="konst">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="prof1">Biinstrument, instrument<br>Sång 1</div>
        <div class="mdl-tooltip" for="prof2">Ensemble 2</div>
        <div class="mdl-tooltip" for="prof3">Musikproduktion 1<br>Matematik 2b</div>
        <div class="mdl-tooltip" for="prof4">Gehörs- och musiklära 2<br>Engelska 7<br>Naturkunskap 2<br>Entreprenörskap</div>
        <div class="mdl-tooltip" for="prof5">Matematik 3b<br>Webbutveckling 1</div>
        <div class="mdl-tooltip" for="indv1">Exempel:<br>Webbutveckling<br>Massage</div>
        <div class="mdl-tooltip" for="indv2">Exempel:<br>Engelska 7</div>

<?php
include "include/settings.php";
include "include/extraKurs.php";
include "include/createCourse.php";

createCourse("Engelska 5","eng5",100 , "disabled");
createCourse("Engelska 6","eng6",100 , "");
createCourse("Historia 1b","his1b",100 , "disabled");
createCourse("Historia 2b -kultur","his1b",100 , "disabled");
createCourse("Idrott och hälsa 1","idr1",100 , "disabled");
createCourse("Matematik 1b","mat1b",100 , "disabled");
createCourse("Naturkunskap 1b","nat1b",100 , "");
createCourse("Religionskunskap 1","rel1",50 , "disabled");
createCourse("Samhällskunskap 1b","sam1b",100 , "disabled");
createCourse("Svenska 1","sve1",100 , "disabled");
createCourse("Svenska 2","sve2",100 , "");
createCourse("Svenska 3","sve3",100 , "");
createCourse("Estetisk kommunikation","estkom",100 , "");
createCourse("Konstarterna och samhället","konst",50 , "");
createCourse("Inriktning 1","inr1",100 , "");
createCourse("Inriktning 2","inr2",200 , "");
createCourse("Inriktning 3","inr3",100 , "");
createCourse("Programfördjupning 1","prof1",100 , "");
createCourse("Programfördjupning 2","prof2",100 , "");
createCourse("Programfördjupning 3","prof3",100 , "");
createCourse("Programfördjupning 4","prof4",100 , "");
createCourse("Programfördjupning 5","prof5",100 , "");
createCourse("Individuellt val 1","indv1",100 , "");
createCourse("Individuellt val 2","indv2",100 , "");

include "include/createCourse_end.php";
?>

</content>
</div>
</header>
<?php
include "include/html_script_bottom_head.php";
?>
</body>
</html>
