<!doctype html>
<html lang="sv-SE">
<head>
<meta charset="utf-8">
<title>Ekonomi</title>

<meta name="keywords" content="Ekonomi,EkonomiProgrammet,meritkollen,meritkalkylator,merit kalkylator,merit poäng,meritpoäng,kalkylator,meritvärde,njudungsgymnasiet,högskola,universitet,gymnasiet,högskolförberedande,program">
<?php
include "include/html_head.php";
?>
</head>

<body>



<header class="parallaxHeader" id="pageContent">
<h1 id="bannerTitle" class="textCenter animate-bottom">Ekonomi</h1>
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
?>
<!--
XXXXXXXXXXXXXXX
ÄMNES VAL LISTA
XXXXXXXXXXXXXXX
-->
     
    
<?php
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
        
        
        
        
        
	
    
    <!--Matematik 1b-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Matematik 1b</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Matematik1b">
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
        
        
        
        
	
    
    <!--Matematik 2b-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Matematik 2b</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Matematik2b">
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
        
        
        
        
	
    
    <!--Historia 1b-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Historia 1b</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Historia1b">
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
        
        
        
        
	
    
    <!--Naturkunskap 1b-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Naturkunskap 1b</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Naturkunskap1b">
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
        
        
        
        
	
    
    <!--Samhällskunskap 2-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span>Samhällskunskap 2</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Samhällskunskap2">
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
        
        
        
        
        
	
    
    <!--Företagsekonomi 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="fort1">Företagsekonomi 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Företagsekonomi1">
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
        
        
        
        
	
    
    <!--Privatjuridik-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="priv">Privatjuridik</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Privatjuridik">
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
        
        
        
        
        
	
    
    <!--Moderna språk-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="mods">Moderna språk</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Modernaspråk">
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
        
        
        
        
	
    
    <!--Psykologi 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="psy1">Psykologi 1</span>
    <span class="points mdl-list__item-sub-title" value="50">50 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="50">
    <input class="subjectName" style="display:none;" type="text" value="Psykologi1">
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
        
        
        
        
        
	
    
    <!--Inrikting 1-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr1">Inrikting 1</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Inrikting1">
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
        
        
        
        
	
    
    <!--Inrikting 2-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr2">Inrikting 2</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Inrikting2">
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
        
        
        
        <p style="text-align:center; font-weight:300;">Om du går Inrikting Ekonomi<br>ska du välja samma betyg för<br>"Inriktning 3a" och "3b".</p>
        
	
    
    <!--Inrikting 3a-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr3a">Inrikting 3a</span>
    <span class="points mdl-list__item-sub-title" value="50">50 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="50">
    <input class="subjectName" style="display:none;" type="text" value="Inrikting3a">
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
        
        
        
        
	
    
    <!--Inrikting 3b-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="inr3b">Inrikting 3b</span>
    <span class="points mdl-list__item-sub-title" value="50">50 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="50">
    <input class="subjectName" style="display:none;" type="text" value="Inrikting3b">
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
        
        
        
        
        
	
    
    <!--Programfördjupning 3-->
		<div style="display:flex;">
        <li class="mdl-list__item mdl-list__item--two-line" style="overflow:visible;padding: 16px 24px 16px 16px;width:175px">
    <span class="mdl-list__item-primary-content">
    <span id="prof3">Programfördjupning 3</span>
    <span class="points mdl-list__item-sub-title" value="100">100 Poäng</span>
    </span></li>
    <input class="points" style="display:none;" type="text" value="100">
    <input class="subjectName" style="display:none;" type="text" value="Programfördjupning3">
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
