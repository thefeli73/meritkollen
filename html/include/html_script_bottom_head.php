<?php

echo "

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
<script src='https://code.getmdl.io/1.3.0/material.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
<script src='assets/js/loader.min.js?v=1.6'></script>
<script src='assets/js/calcscript.js?v=1.6'></script>
<script src='assets/js/changeall.js?v=1.6'></script>
<script src='assets/js/sparabetyg.js?v=1.6'></script>

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

<!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97913650-1', 'auto');
  ga('send', 'pageview');
</script>
-->

<!-- Hotjar Tracking Code for MeritKollen.se
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:878823,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
-->
";
