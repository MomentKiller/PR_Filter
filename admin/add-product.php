<?php 

	include('../config.php');

	$product_name = utf8_decode($_POST['inputProduktName']);
	$product_producer = utf8_decode($_POST['inputProduktHersteller']);
	
	echo $product_name;
	echo $product_producer;
	
	/*
	$sql =	"INSERT INTO
				`producers` (`id`, `name`, `producer`, `unit`, `package`, `price`, `cal`, `carb`, `fat`, `protein`, `bcaa`, `glutamin`, `protein_source`, `taste`, `lactose`, `diabetic`, `sweetener`, `carnitin`, `creatine`, `caffeine`, `waxy`, `trainings_usage`)
			VALUES
				(NULL, '$product_name');";

	$stmt = $db->prepare($sql);

	if ($stmt->execute())
	{
		echo ' test'.$stmt->error;
	}
	*/
?>