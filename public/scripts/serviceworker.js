//TODO: urls to cache
//TODO: serviceworker

let CACHE_NAME = 'my-site-cache-v1';
let urlsToCache = [
	'/',
	'/public/css/main.css',
	'/public/images/icons/android-icon-128x128.jpg',
	'/public/images/icons/android-icon-144x144.png',
	'/public/images/icons/android-icon-192x192.png',
	'/public/images/icons/android-icon-36x36.png',
	'/public/images/icons/android-icon-48x48.png',
	'/public/images/icons/android-icon-72x72.png',
	'/public/images/icons/android-icon-96x96.png',
	'/public/images/icons/apple-icon-114x114.png',
	'/public/images/icons/apple-icon-120x120.png',
	'/public/images/icons/apple-icon-144x144.png',
	'/public/images/icons/apple-icon-152x152.png',
	'/public/images/icons/apple-icon-180x180.png',
	'/public/images/icons/apple-icon-57x57.png',
	'/public/images/icons/apple-icon-60x60.png',
	'/public/images/icons/apple-icon-72x72.png',
	'/public/images/icons/apple-icon-76x76.png',
	'/public/images/icons/apple-icon-precomposed.png',
	'/public/images/icons/apple-icon.png',
	'/public/images/icons/favicon-16x16.png',
	'/public/images/icons/favicon-32x32.png',
	'/public/images/icons/favicon-96x96.png',
	'/public/images/icons/favicon.ico',
	'/public/images/icons/ms-icon-150x150.png',
	'/public/images/icons/ms-icon-310x310.png',
	'/public/images/icons/ms-icon-70x70.png',
	'/browserconfig.xml',
	'/manifest.json',
];

self.addEventListener('install', function(event) {
	// Perform install steps
	event.waitUntil(
		caches.open(CACHE_NAME)
		.then(function(cache) {
			console.log('Opened cache');
			return cache.addAll(urlsToCache);
		})
	);
});

self.addEventListener('fetch', function(event) {
	event.respondWith(
		caches.match(event.request)
		.then(function(response) {
			// Cache hit - return response
			if (response) {
				return response;
			}

			return fetch(event.request).then(
				function(response) {
					// Check if we received a valid response
					if(!response || response.status !== 200 || response.type !== 'basic') {
						return response;
					}

					// IMPORTANT: Clone the response. A response is a stream
					// and because we want the browser to consume the response
					// as well as the cache consuming the response, we need
					// to clone it so we have two streams.
					let responseToCache = response.clone();

					caches.open(CACHE_NAME)
					.then(function(cache) {
						cache.put(event.request, responseToCache);
					});

					return response;
				}
			);
		})
	);
});