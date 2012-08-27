<?php 

	include('../config.php');

	$taste_cats = utf8_decode($_POST['inputGeschmackKat']);
	
	$sql =	"INSERT INTO
				`taste_cats` (`id`, `name`)
			VALUES
				(NULL, '$taste_cats');";

	$stmt = $db->prepare($sql);

	if ($stmt->execute())
	{
		echo ' test'.$stmt->error;
	}
?>