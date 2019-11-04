importScripts('/cache-polyfill.js');


self.addEventListener('install', function(e) {
 e.waitUntil(
   caches.open('meritkollen').then(function(cache) {
     return cache.addAll([
		'/',
		'/index.html',
		'/Ekonomi',
		'/Estet',
		'/Natur',
		'/Samhäll',
		'/Teknik',
		'/Kontakt',
		'/assets/css/main.min.css',
		'/assets/css/main.min.css?v=201',
		'/assets/img/tips.jpg ',
		'/assets/img/background.jpg ',
		'/assets/img/favicon/manifest.json',
		'/assets/img/favicon/android-chrome-192x192.png',
		'/assets/img/favicon/favicon-32x32.png',
		'/assets/img/favicon/favicon-16x16.png',
		'/assets/img/favicon/favicon.ico',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Regular.woff2',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Regular.woff',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
		'https://fonts.gstatic.com/s/materialicons/v48/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2',
		'https://fonts.googleapis.com/icon?family=Material+Icons',
		'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'
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