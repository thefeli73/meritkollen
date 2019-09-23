<!doctype html>
<html lang="sv-SE">
<head>
<meta charset="utf-8">
<title>Natur</title>

<meta name="keywords" content="natur,Naturvetenskapliga,programmet,meritkollen,meritkalkylator,merit kalkylator,merit poäng,meritpoäng,kalkylator,meritvärde,njudungsgymnasiet,högskola,universitet,gymnasiet,högskolförberedande,program">
<?php
include "include/html_head.php";
?>
</head>

<body>

<header class="parallaxHeader" id="pageContent">
<h1 id="bannerTitle" class="textCenter animate-bottom">Natur</h1>
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
        <div class="mdl-tooltip" for="inr1">Biologi 2<br>Geografi 1</div>
        <div class="mdl-tooltip" for="inr2">Fysik 2<br>Samhällskunskap 2</div>
        <div class="mdl-tooltip" for="inr3">Kemi 2<br>Naturvetenskapligt ämne</div>
        <div class="mdl-tooltip" for="inr4">Matematik 4<br>Programfördjupning</div>
        <div class="mdl-tooltip" for="bio1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="mods">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="fys1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="kem1">Programgemensam-<br>Kurs</div>
        <div class="mdl-tooltip" for="prof1">Exempel:<br>Samhällskunskap 2<br>Matematik 4</div>
        <div class="mdl-tooltip" for="prof2">Exempel:<br>Matematik 5<br>Entreprenörskap</div>
        <div class="mdl-tooltip" for="indv1">Exempel:<br>Webbutveckling<br>Massage</div>
        <div class="mdl-tooltip" for="indv2">Exempel:<br>Engelska 7</div>

<?php
include "include/settings.php";
include "include/extraKurs.php";
?>


	<form class="courses kurser">

    <!--Engelska 5-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Engelska 5</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Engelska5">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a disabled class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Engelska 6-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Engelska 6</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Engelska6">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Historia 1a1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Historia 1b</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Historia1a1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a disabled class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Idrott och hälsa 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Idrott och hälsa 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Idrott1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a disabled class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>





    <!--Matematik 1c-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Matematik 1c</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Matematik1c">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a disabled class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Matematik 2c-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Matematik 2c</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Matematik2c">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Matematik 3c-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Matematik 3c</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Matematik3c">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Religionskunskap 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Religionskunskap 1</span>
    <span class="points mdl-list__item-sub-title" value="50">50 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="50">
    <input class="subjectName" style="display:none;" type="text" value="Religionskunskap1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a disabled class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>





    <!--Samhällskunskap 1b-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Samhällskunskap 1b</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Samhällskunskap1b">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a disabled class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Svenska 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Svenska 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Svenska1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a disabled class="mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Svenska 2-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Svenska 2</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Svenska2">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Svenska 3-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Svenska 3</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Svenska3">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Biologi 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="bio1">Biologi 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Biologi1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>





    <!--Moderna Språk 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="mods">Moderna språk</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="ModernaSpråk1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Fysik 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="fys1">Fysik 1</span>
    <span class="points mdl-list__item-sub-title" value="150">150 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="150">
    <input class="subjectName" style="display:none;" type="text" value="Fysik1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Kemi 1	-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="kem1">Kemi 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Kemi1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Inriktning 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr1">Inriktning 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Inriktning1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Inriktning 2-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr2">Inriktning 2</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Inriktning2">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Inriktning 3-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr3">Inriktning 3</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Inriktning3">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Inriktning 4-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr4">Inriktning 4</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Inriktning4">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Programfördjupning 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="prof1">Programfördjupning 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Programfördjupning1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Programfördjupning 2-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="prof2">Programfördjupning 2</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Programfördjupning2">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



    <!--Individuellt val 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="indv1">Individuellt val 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="IndividuelltVal1">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>




    <!--Individuellt val 2-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="indv2">Individuellt val 2</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="IndividuelltVal2">
    		<select class="grade">
				<option value="0">F</option>
				<option selected value="10">E</option>
				<option value="12.5">D</option>
				<option value="15">C</option>
				<option value="17.5">B</option>
				<option value="20">A</option>
			</select>
            <a class="delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect" style="margin:16px 5px">Ta Bort</a>
		</div>



	</form>
    <a type="button" class="btn btn-primary btn-mini add_row" style="color:#fff;display:block; width:85%; margin:10px auto 0;" onClick="setTimeout(updateGrade(), 5000);">Lägg till Kurs</a>
	<form onSubmit="return false;" style="display:table; margin:auto;">
    <h5>Meritpoäng:</h5>
		<input class="meritpoint" style="width:29px; position:static;" value="0" type="number" step="0.5" min="0" max="2.5">
	</form><br>
		<span class="score_span" style="margin-left:0px;"></span>


</content>
</div>
</header>
<?php
include "include/html_script_bottom_head.php";

include "include/info.php";
?>
</body>
</html>
