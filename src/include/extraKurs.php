<?php
echo "
<form id='programmes' name='programmes'>
	<form class='courses kurser'>
		<div class='sample_row' style='display:none;'>

<!--SAMPLE ROW-->
<div style='display:flex;'>
	<li class='mdl-list__item mdl-list__item--two-line' style='overflow:visible;padding: 16px 24px 16px 16px;width:175px'>
		<span class='mdl-list__item-primary-content'>
			<input class='mdl-list__item-primary-content' style='margin:-4px 0 6px; height:24px;' type='text' value='Extra Kurs'>
			<span class='points mdl-list__item-sub-title'>Poäng:</span>
		</span>
	</li>
	<input class='points mdl-list__item-sub-title' style='width:30px; height:24px; margin:40px 32px 16px -62px;-moz-appearance: textfield;' type='number' value='100'>
	<select class='grade'>
		<option value='0'>F</option>
		<option selected value='10'>E</option>
		<option value='12.5'>D</option>
		<option value='15'>C</option>
		<option value='17.5'>B</option>
		<option value='20'>A</option>
	</select>
	<a class='delete_row mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect' style='margin:16px 5px'>Ta Bort</a>
</div>
		</div>
	</form>
</form>
";
