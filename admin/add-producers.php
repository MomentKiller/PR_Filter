<?php 

	include('../config.php');

	$producer = utf8_decode($_POST['inputHerstellerName']);
	$lang = utf8_decode($_POST['inputHerstellerLand']);
	$link = utf8_decode($_POST['inputHerstellerLink']);
	
	$sql =	"INSERT INTO
				`producers` (`id`, `name`, `lang`, `link`)
			VALUES
				(NULL, '$producer', '$lang', '$link');";

	$stmt = $db->prepare($sql);

	if ($stmt->execute())
	{
		echo ' test'.$stmt->error;
	}
?>