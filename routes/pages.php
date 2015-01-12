<?php

// Home page
$router->map("GET", "/", function () {
    if(isset($_SESSION['loggedIn'])){
        openView('root');
    } else {
        require DIR_VIEW . 'login.php';
    }
}, "Home");


// create admin
$router->map("GET", "/CrEaTeAdMiN/", function () {
	openView("admin");
}, "CREATE ADMIN");

// Search
$router->map("POST|GET", "/search/", function () {
	openView("search");
}, "Search");
// Search medewerker
$router->map("POST|GET", "/search2/", function () {
	openView("search_test");
}, "Search2");
// Search bedrijf
$router->map("POST|GET", "/search3/", function () {
	openView("search_test_bedrijf");
}, "Search3");
// Search bedrijfmw
$router->map("POST|GET", "/search4/", function () {
	openView("search_test_bedrijfmw");
}, "Search4");

// Gebruikerspaneel

	// Ticket
	$router->map("POST|GET", "/ticket/", function () {
		openView("gebruikerspaneel/overview/ticket", array('Medewerker', 'Teamleider'));
	}, "Ticket Knoppen");
		// Nieuw
		$router->map("POST|GET", "/ticket/nieuw/", function () {
			openView("gebruikerspaneel/nieuw/ticket", array('Medewerker', 'Teamleider'));
		}, "Nieuwe ticket");