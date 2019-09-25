<?php
echo "
<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://code.getmdl.io/1.3.0/material.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
<script src='assets/js/loader.min.js?v=1.6'></script>
<script src='assets/js/calcscript.js?v=1.8'></script>
<script src='assets/js/changeall.js?v=1.8'></script>
<script src='assets/js/sparabetyg.js?v=1.10'></script>

<script>
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
