<?php

/*
 * MySQL Daten
 */

	$dbhost = '';
	$dbuser = '';
	$dbpass = '';
	$dbname = '';

/*
 * Allgemeine Einstellungen
 */

	$charset = 'utf-8';
	$googleanalytics = '';

/*
 * Error Reporting
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


/*
 * MySQL Verbindung
 */

	$db = @new MySQLi($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
		die('Konnte keine Verbindung zu Datenbank aufbauen, MySQL meldete: '.mysqli_connect_error());
	}

?>