var files = [
        '/index.html',
        '/login.html',
        '/app.html',
        '/criarconta.html',
        '/user.html',
        '/css/index.css',
        '/css/materialize.css',
        '/css/materialize.min.css',
        '/js/functionapp.js',
        '/js/globalfunction.js',
        '/sw.js',
        '/jquery-1.12.4.min.js',
        '/wwb14.min.js',
        '/files.json',
        '/manifest.json',
        '/images/icon.png',
        '/images/angopapo.jpg',
        '/images/foto.jpg',
        '/images/outra.jpg'
];
// dev only
if (typeof files == 'undefined') {
  var files = [];
} else {
  files.push('./');
}

var CACHE_NAME = 'App-v1';

self.addEventListener('activate', function(event) {
  console.log('[SW] Activate');
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (CACHE_NAME.indexOf(cacheName) == -1) {
            console.log('[SW] Delete cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('install', function(event){
  console.log('[SW] Install');
  event.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return Promise.all(
      	files.map(function(file){
      		return cache.add(file);
      	})
      );
    })
  );
});

self.addEventListener('fetch', function(event) {
  console.log('[SW] fetch ' + event.request.url)
  event.respondWith(
    caches.match(event.request).then(function(response){
      return response || fetch(event.request.clone());
    })
  );
});

self.addEventListener('notificationclick', function(event) {
  console.log('On notification click: ', event);
  clients.openWindow('/');
});