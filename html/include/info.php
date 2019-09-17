<?php
echo "
<!--
XXXXXX
HEADER
XXXXXX
-->
<div id='hider' style='display:none;height: 100vh;position: fixed;width: 100vw;top: 0;background-color: rgba(85, 85, 85, 0.74);z-index: 4;'></div>
<div id='popup' style='display:none;'>
  <div style='margin:30px;'>
  <h1>Tips</h1><br>
  <h5>Glömt bort vilken kurs som innehåller vad? Håll muspekaren över en icke standard kurs för att se mer info.</h5><br><br>
  <img src='assets/img/tips.jpg' width='100%' height='auto' alt='Tips' style='max-width:450px; margin:auto; display:block;'/>
</div>
</div>
<!--popup-->
<script>

$(document).ready(function() {
	laddaBetyg();
    if(localStorage.getItem('popupInfo') != 'sett'){
        $('#popup').delay(1000).fadeIn();
        $('#hider').delay(300).fadeIn();
    }
	
    $('body').click(function(e) 
    {
    	$('#popup').fadeOut(); 
    	$('#hider').fadeOut(); 
        localStorage.setItem('popupInfo','sett')
    });
});
</script>
";