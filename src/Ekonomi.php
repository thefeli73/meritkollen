<!doctype html>
<html lang="sv-SE">
<head>
<meta charset="utf-8">
<title>Ekonomi</title>

<meta name="keywords" content="Ekonomi,Ekonomiprogrammet,meritkollen,meritkalkylator,merit kalkylator,merit poäng,meritpoäng,kalkylator,meritvärde,njudungsgymnasiet,högskola,universitet,gymnasiet,högskolförberedande,program">
<link rel="canonical" href="https://meritkollen.se/Ekonomi">
<?php
include "include/html_head.php";
?>
</head>

<body>

<header class="parallaxHeader" id="pageContent">
<h1 class="bannerTitle animate-bottom">Ekonomi</h1>
<h5 class="bannerTitle textCenter animate-bottom" style="background-color:unset;">Meritkalkylatorn för Ekonomiprogrammet</h5>
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
        <div class="mdl-tooltip" for="fort1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="priv">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="mods">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="psy1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="inr1">Företagsekonomi 2<br>Affärsjuridik</div>
        <div class="mdl-tooltip" for="inr2">Matematik 3b<br>Rätten och samhället</div>
        <div class="mdl-tooltip" for="inr3a">Entreprenörskap och företagande (50%)<br>Filosofi 1</div>
        <div class="mdl-tooltip" for="inr3b">Entreprenörskap och företagande (50%)<br>Psykologi 2a</div>
        <div class="mdl-tooltip" for="prof1">Exempel:<br>Engelska 7<br>Redovisning 2</div>
        <div class="mdl-tooltip" for="prof2">Exempel:<br>Matematik 3<br>Marknadsföring</div>
        <div class="mdl-tooltip" for="prof3">Exempel:<br>Naturkunskap 2<br>Moderna språk (år 2)</div>

<?php
include "include/settings.php";
include "include/extraKurs.php";
include "include/createCourse.php";

createCourse("Engelska 5","eng5",100 , "disabled");
createCourse("Engelska 6","eng6",100 , "");
createCourse("Matematik 1b","mat1b",100 , "disabled");
createCourse("Matematik 2b","mat2b",100 , "");
createCourse("Svenska 1","sve1",100 , "disabled");
createCourse("Svenska 2","sve2",100 , "");
createCourse("Svenska 3","sve3",100 , "");
createCourse("Historia 1b","his1b",100 , "disabled");
createCourse("Idrott och hälsa 1","ioh1",100 , "disabled");
createCourse("Naturkunskap 1b","nat1b",100 , "");
createCourse("Samhällskunskap 1b","sam1b",100 , "disabled");
createCourse("Samhällskunskap 2","sam2",100 , "");
createCourse("Religionskunskap 1","rel1",50 , "disabled");
createCourse("Företagsekonomi 1","fort1",100 , "");
createCourse("Privatjuridik","priv",100 , "");
createCourse("Moderna språk","mods",100 , "");
createCourse("Psykologi 1","psy1",50 , "");
createCourse("Inrikting 1","inr1",100 , "");
createCourse("Inrikting 2","inr2",100 , "");
echo "<p style='text-align:center; font-weight:300;'>Om du går Inrikting Ekonomi<br>ska du välja samma betyg för<br>'Inriktning 3a' och '3b'.</p>";
createCourse("Inrikting 3a","inr3a",50 , "");
createCourse("Inrikting 3b","inr3b",50 , "");
createCourse("Programfördjupning 1","prof1",100 , "");
createCourse("Programfördjupning 2","prof2",100 , "");
createCourse("Programfördjupning 3","prof3",100 , "");
createCourse("Individuellt val 1","ind1",100 , "");
createCourse("Individuellt val 2","ind1",100 , "");

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
