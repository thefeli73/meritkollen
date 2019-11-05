<?php
echo "
<script defer>
";
readfile("https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js");
readfile("https://code.getmdl.io/1.3.0/material.min.js");
readfile("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js");
readfile("assets/js/loader.min.js");
readfile("assets/js/calcscript.js");
readfile("assets/js/changeall.js");
readfile("assets/js/sparabetyg.js");
readfile("assets/js/smallScript.js");
echo "
$(document).ready(function() {
	$('select').material_select();
});

function updateGrade() {
	$('select').material_select('destroy');
	window.setTimeout(partB,50);
}
function partB(){
	$(document).ready(function() {
    $('select').material_select();
  });
}
</script>
";
