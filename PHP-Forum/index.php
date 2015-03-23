<?php
	session_start();
	
	// Adderar ytterliggare s�kerhet g�llande sessionen.
	session_regenerate_id();
	ini_set('session.cookie_httponly', true);
	$httponly = true;
	
	// St�ller in sidans format s� att m�nad, �r, tid etc. visas p� svenska.
	setlocale(LC_ALL , "swedish");
	
	
	require_once("common/HTMLView.php");
	require_once("src/LoginController.php");
	
	$c = new LoginController();
	$htmlBody = $c->doHTMLBody();
	
	
?>