<!doctype html>
<html lang="sv-SE">
<head>
<meta charset="utf-8">
<title>Samhäll</title>

<meta name="keywords" content="samhäll,Samhällsprogrammet,samhällsvetenskapsprogrammet,meritkollen,meritkalkylator,merit kalkylator,merit poäng,meritpoäng,kalkylator,meritvärde,njudungsgymnasiet,högskola,universitet,gymnasiet,högskolförberedande,program">
<?php
include "include/html_head.php";
?>
</head>

<body>

<header class="parallaxHeader" id="pageContent">
<h1 id="bannerTitle" class="textCenter animate-bottom">Samhäll</h1>
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
        <div class="mdl-tooltip" for="fil1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="mods">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="psy1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="inr1">Samhällskunskap 2</div>
        <div class="mdl-tooltip" for="inr2">Samhällskunskap 3<br>Sociologi 1</div>
        <div class="mdl-tooltip" for="inr3">Ledarskap och organisation<br>Geografi 1</div>
        <div class="mdl-tooltip" for="inr4">Kommunikation<br>Historia 2a</div>
        <div class="mdl-tooltip" for="inr5">Psykologi 2a<br>Religionkunskap 2</div>
        <div class="mdl-tooltip" for="inr6">Internationella relationer<br>Historia 3</div>
        <div class="mdl-tooltip" for="prof1">Exempel:<br>Engelska 7<br>Naturkunskap<br>Internationella relationer</div>
        <div class="mdl-tooltip" for="prof2">Exempel:<br>Matematik 3<br>Entreprenörskap<br>Webbutveckling 1</div>

<?php
include "include/settings.php";
include "include/extraKurs.php";
include "include/createCourse.php";

createCourse("Engelska 5","eng5",100 , "disabled");
createCourse("Engelska 6","eng6",100 , "");
createCourse("Historia 1b","his1b",100 , "disabled");
createCourse("Idrott och hälsa 1","idr1",100 , "disabled");
createCourse("Matematik 1b","mat1b",100 , "disabled");
createCourse("Matematik 2b","mat2b",100 , "");
createCourse("Naturkunskap 1b","nat1b",100 , "");
createCourse("Religionskunskap 1","rel1",50 , "disabled");
createCourse("Samhällskunskap 1b","sam1b",100 , "disabled");
createCourse("Svenska 1","sve1",100 , "disabled");
createCourse("Svenska 2","sve2",100 , "");
createCourse("Svenska 3","sve3",100 , "");
createCourse("Filosofi","fil1",50 , "");
createCourse("Moderna språk","mods",200 , "");
createCourse("Psykologi 1","psy1",50 , "");
createCourse("Inriktning 1","inr1",100 , "");
createCourse("Inriktning 2","inr2",100 , "");
createCourse("Inriktning 3","inr3",100 , "");
createCourse("Inriktning 4","inr4",100 , "");
createCourse("Inriktning 5","inr5",50 , "");
createCourse("Inriktning 6","inr6",100 , "");
createCourse("Programfördjupning 1","prof1",100 , "");
createCourse("Programfördjupning 2","prof2",100 , "");
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
