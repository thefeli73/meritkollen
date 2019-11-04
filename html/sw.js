importScripts('/cache-polyfill.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('meritkollen').then(function(cache) {
     return cache.addAll([
       '/',
       '/index.html',
       '/Ekonomi.php',
       '/Estet.php',
       '/Natur.php',
       '/Samhäll.php',
       '/Teknik.php',
       '/assets/css/main.min.css',
       '/assets/img/background.jpg',
       '/assets/js/calcscript.js',
       '/assets/js/changeall.js',
       '/assets/js/loader.js',
       '/assets/js/loader.min.js',
       '/assets/js/softscrollscript.js',
       '/assets/js/sparabetyg.js',
     ]);
   })
 );
});

self.addEventListener('fetch', function(event) {
	console.log(event.request.url);
	event.respondWith(
	caches.match(event.request).then(function(response) {
		return response || fetch(event.request);
	})
	);
});