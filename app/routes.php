<?php
	
	$w_routes = array(
	//	['GET', '/', 'Default#home', 'default_home'],

		///* Quelques tests :*///
		['GET', '/test', 'Default#test', 'test' ], // = METHODE, /url, function, nom
		['GET', '/azerty', 'Default#pageAzerty', 'azerty' ],
		['GET', '/test-reservation', 'Default#testReservation', 'test-reservation' ],
		['GET', '/article/articles', 'Article#articles', 'articles'],
			// http://localhost/php/PROJET_hotel/public/article/articles

		['GET', '/chambres/gestion_chambre', 'Default#chambres', 'gestion_chambre'],
			// http://localhost/php/PROJET_hotel/public/chambres/gestion_chambre
		['GET|POST', '/contactez-nous', 'Default#contact', 'contactez-nous'],
			// http://localhost/php/PROJET_hotel/public/contactez-nous
		['GET|POST', '/messageviacontactpage', 'Default#messageviacontactpage', 'messageviacontactpage'],


		['GET', '/', 'Default#accueil', 'accueil-index'],
			// http://localhost/php/PROJET_hotel/public/accueil-index
		
		['GET', '/chambres-simples', 'Default#chambreSimple', 'chambres-simples'],
		['GET', '/chambres-doubles', 'Default#chambreDouble', 'chambres-doubles'],
		['GET', '/chambres-triples', 'Default#chambreTriple', 'chambres-triples'],
		['GET', '/suites', 'Default#chambreSuite', 'suites'],


		['GET|POST', '/resa/reservation1-dispo', 'Booking#reservation1', 'reservation1-dispo'],
		['GET|POST', '/resa/reservation2-formulaire', 'Booking#reservation2', 'reservation2-formulaire'],
		
	//	['GET', 'url/page', 'Default#function', 'page'],

	);
?>