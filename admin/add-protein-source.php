<?php 

	include('../config.php');

	$protein_source = utf8_decode($_POST['inputProteinQuelle']);
	
	$sql =	"INSERT INTO
				`protein_sources` (`id`, `protein_source`)
			VALUES
				(NULL, '$protein_source');";

	$stmt = $db->prepare($sql);

	if ($stmt->execute())
	{
		echo ' test'.$stmt->error;
	}
?>