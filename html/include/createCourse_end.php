<?php
echo "
</form>
<a type='button' class='btn btn-primary btn-mini add_row' style='color:#fff;display:block; width:85%; margin:10px auto 0;' onClick='updateGrade();'>Lägg till Kurs</a>
<form onSubmit='return false;' style='display:table; margin:auto;'>
	<h5>Meritpoäng:</h5>
	<input class='meritpoint' style='width:29px; position:static;' value='0' type='number' step='0.5' min='0' max='2.5'>
</form><br>
<span class='score_span' style='margin-left:0px;'></span>
";
