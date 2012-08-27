<?php 
	include('../config.php');

// Hersteller DB
	$sql=	"SELECT
				id, name, lang, link
			FROM
				producers
			ORDER BY
					id ASC";
	
	$result = $db->query($sql);
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="../css/libs/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="../js/libs/modernizr.min.js"></script>
	<script src="../js/libs/jquery-1.8.0.min.js"></script>
	<script src="../js/libs/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>
</head>
<body>
<div class="container">
	<header>
		<div class="row">
			<div class="span12">
				<?php include('navigation.php'); ?>
			</div>
		</div>
	</header>

	<div class="row" role="main">
		<div class="span12">
			<h1>Produkt</h1>
			
			<form class="form-horizontal formProdukt">
			
			<div class="control-group">
				<label class="control-label" for="inputProduktName">Name:</label>
				<div class="controls">
					<input type="text" name="inputProduktName" id="inputProduktName" placeholder="Produkt Name">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktHersteller">Land:</label>
				<div class="controls">
					<select name="inputProduktHersteller" id="inputProduktHersteller">
						<?php 
						
							if ($result->num_rows) {
								while ($row = $result->fetch_assoc()) {
									echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
								}
							}
						
						?>
					</select>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktEinheit">Einheit:</label>
				<div class="controls">
				Einheit
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktVerpackung">Verpackung:</label>
				<div class="controls">
					Verpackung
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktPreise">Preis:</label>
				<div class="controls">
					Preis
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktKcal">kcal:</label>
				<div class="controls">
					kcal
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktKohlenhydrate">Kohlenhydrate:</label>
				<div class="controls">
					Kohlenhydrate
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktFett">Fett:</label>
				<div class="controls">
					Fett
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktProtein">Protein:</label>
				<div class="controls">
					Protein
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktBcaa">BCAA:</label>
				<div class="controls">
					BCAA
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktGlutamin">Glutamin:</label>
				<div class="controls">
					Glutamin
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktProteinQuelle">ProteinQuelle:</label>
				<div class="controls">
					ProteinQuelle
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktGeschmack">Geschmack:</label>
				<div class="controls">
					Geschmack
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktLaktose">Laktose:</label>
				<div class="controls">
					<label class="radio inline">
						<input type="radio" id="inputProduktLaktose" name="inputProduktLaktose" value="1"> Ja
					</label>
					<label class="radio inline">
						<input type="radio" id="inputProduktLaktose" name="inputProduktLaktose" value="0"> Nein
					</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktDiabetis">Diabetis:</label>
				<div class="controls">
					<label class="radio inline">
						<input type="radio" id="inputProduktDiabetis" name="inputProduktDiabetis" value="1"> Ja
					</label>
					<label class="radio inline">
						<input type="radio" id="inputProduktDiabetis" name="inputProduktDiabetis" value="0"> Nein
					</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktSuessstoff">S&uuml;&szlig;stoff:</label>
				<div class="controls">
					<label class="radio inline">
						<input type="radio" id="inputProduktSuessstoff" name="inputProduktSuessstoff" value="1"> Ja
					</label>
					<label class="radio inline">
						<input type="radio" id="inputProduktSuessstoff" name="inputProduktSuessstoff" value="0"> Nein
					</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktCarnitin">L-Carnitin:</label>
				<div class="controls">
					<label class="radio inline">
						<input type="radio" id="inputProduktCarnitin" name="inputProduktCarnitin" value="1"> Ja
					</label>
					<label class="radio inline">
						<input type="radio" id="inputProduktCarnitin" name="inputProduktCarnitin" value="0"> Nein
					</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktKreatin">Kreatin:</label>
				<div class="controls">
					<label class="radio inline">
						<input type="radio" id="inputProduktKreatin" name="inputProduktKreatin" value="1"> Ja
					</label>
					<label class="radio inline">
						<input type="radio" id="inputProduktKreatin" name="inputProduktKreatin" value="0"> Nein
					</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktKoffein">Koffein:</label>
				<div class="controls">
					<label class="radio inline">
						<input type="radio" id="inputProduktKoffein" name="inputProduktKoffein" value="1"> Ja
					</label>
					<label class="radio inline">
						<input type="radio" id="inputProduktKoffein" name="inputProduktKoffein" value="0"> Nein
					</label>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputProduktWaxy">Wachsmaisst&auml;rke:</label>
				<div class="controls">
					<label class="radio inline">
						<input type="radio" id="inputProduktWaxy" name="inputProduktWaxy" value="1"> Ja
					</label>
					<label class="radio inline">
						<input type="radio" id="inputProduktWaxy" name="inputProduktWaxy" value="0"> Nein
					</label>
				</div>
			</div>
			
			</form>
			<button class="btn btn-primary sendProdukt">Senden</button>
		</div>
	</div>

	<footer>
		&copy; by me
	</footer>
</div>

	<script>
		var _gaq=[['_setAccount','<?php echo $googleanalytics; ?>'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>



<script>
	$('.sendProdukt').click(function() {
		var serial = $('.formProdukt').serializeArray();
		console.log(serial);
		$.ajax({
			type: 'POST',
			url: 'add-product.php',
			data: serial,
			success: function(data) {
				console.log(data);
			}
		});
	});
</script>




</body>
</html>