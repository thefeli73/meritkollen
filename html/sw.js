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
		'/assets/img/tips.jpg ',
		'/assets/img/background.jpg ',
		'/assets/img/background85.webp ',
		'/assets/img/favicon/manifest.json',
		'/assets/img/favicon/android-chrome-192x192.png',
		'/assets/img/favicon/favicon-32x32.png',
		'/assets/img/favicon/favicon-16x16.png',
		'/assets/img/favicon/favicon.ico',
		'/assets/js/softscrollscript.js',
		'/assets/js/loader.min.js',
		'/assets/js/material.min.js',
		'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
		'https://fonts.googleapis.com/icon?family=Material+Icons',
		'https://fonts.gstatic.com/s/materialicons/v48/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2',
		'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Regular.woff2',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Regular.woff',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Medium.woff2',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Medium.woff',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Light.woff2',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Light.woff',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Thin.woff2',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/fonts/roboto/Roboto-Thin.woff',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css',
     ]);
   })
 );
});

self.addEventListener('fetch', function(event) {
	//console.log(event.request.url);
	event.respondWith(
	caches.match(event.request).then(function(response) {
		return response || fetch(event.request);
	})
	);
});