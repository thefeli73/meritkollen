<?php
echo "<form class='courses kurser'>";
function createCourse($dname, $nameId, $points, $disabled) {
  $disClass = "delete_row";
  if($disabled==='disabled') {
    $disClass = "";
  }
  echo "
<div style='display:flex;'>
	<li class='mdl-list__item mdl-list__item--two-line' style='overflow:visible;padding: 16px 24px 16px 16px;width:175px'>
		<span class='mdl-list__item-primary-content'>
			<span id='$nameId'>$dname</span>
			<span class='points mdl-list__item-sub-title' value=''+points+''>$points Poäng</span>
		</span>
	</li>
	<input class='points' style='display:none;' type='text' value='$points'>
	<input class='subjectName' style='display:none;' type='text' value='$nameId'>
	<select class='grade'>
		<option value='0'>F</option>
		<option selected value='10'>E</option>
		<option value='12.5'>D</option>
		<option value='15'>C</option>
		<option value='17.5'>B</option>
		<option value='20'>A</option>
	</select>
	<a $disabled class='$disClass mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect' style='margin:16px 5px'>Ta Bort</a>
</div>";
}

echo "
</form>
<a type='button' class='btn btn-primary btn-mini add_row' style='color:#fff;display:block; width:85%; margin:10px auto 0;' onClick='setTimeout(updateGrade(), 5000);'>Lägg till Kurs</a>
<form onSubmit='return false;' style='display:table; margin:auto;'>
	<h5>Meritpoäng:</h5>
	<input class='meritpoint' style='width:29px; position:static;' value='0' type='number' step='0.5' min='0' max='2.5'>
</form><br>
<span class='score_span' style='margin-left:0px;'></span>
";
