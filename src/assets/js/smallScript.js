if('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
	navigator.serviceWorker.register('/sw.js');
  });
}

window.addEventListener('load', function() {
  $(".lateLoader").prop('disabled', false);
});
