importScripts('/js/cache-polyfill.js');


self.addEventListener('install', function(e) {
 self.skipWaiting();
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
		'/css/main.css',
		'/img/background.jpg',
		'/img/background85.webp',
		'/img/favicon/manifest.json',
		'/img/favicon/android-chrome-192x192.png',
		'/img/favicon/favicon-32x32.png',
		'/img/favicon/favicon-16x16.png',
		'/img/favicon/favicon.ico',
		'/js/calcscript.js',
		'/js/changeall.js',
		'/js/jquery.js',
		'/js/material.js',
		'/js/materialize.js',
		'/js/modernizer-webp.js',
		'/js/smallScript.js',
		'/js/softscrollscript.js',
		'/js/sparabetyg.js',
		'https://fonts.googleapis.com/icon?family=Material+Icons',
		'https://fonts.gstatic.com/s/materialicons/v48/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2',
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
