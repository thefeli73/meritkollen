<?php
echo "
<script src='/js/jquery.js'></script>
<script src='/js/material.js'></script>
<script src='/js/materialize.js'></script>
<script defer src='/js/calcscript.js'></script>
<script defer src='/js/changeall.js'></script>
<script defer src='/js/sparabetyg.js'></script>
<script defer src='/js/smallScript.js'></script>
<script defer>
$(document).ready(function() {
	laddaBetyg();
	$('select').material_select();
});

function updateGrade() {
	$('select').material_select('destroy');
	window.setTimeout(partB,0);
}
function partB(){
	$(document).ready(function() {
    	$('select').material_select();
  	});
}
</script>
";
