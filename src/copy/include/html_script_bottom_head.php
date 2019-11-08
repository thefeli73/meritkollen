<?php
echo "
<script defer>
";
readfile("https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js");
readfile("https://code.getmdl.io/1.3.0/material.min.js");
readfile("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js");
readfile("js/calcscript.js");
readfile("js/changeall.js");
readfile("js/sparabetyg.js");
readfile("js/smallScript.js");
echo "
$(document).ready(function() {
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
