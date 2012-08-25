<?php 
	include('../config.php');
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
</head>
<body>
<div class="container">
	<header>
		<div class="row">
			<div class="span12">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li><a href="#">Hersteller</a></li>
							<li><a href="#">Geschmack Kategorie</a></li>
							<li><a href="#">Geschmack</a></li>
							<li><a href="#">Produkt</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="row" role="main">
		<div class="span12">
			<h1>Hersteller</h1>
			
			<form class="form-horizontal formHersteller">
			
			<div class="control-group">
				<label class="control-label" for="inputHerstellerName">Name:</label>
				<div class="controls">
					<input type="text" name="inputHerstellerName" id="inputHerstellerName" placeholder="Hersteller Name">
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputHerstellerLand">Land:</label>
				<div class="controls">
					<select name="inputHerstellerLand" id="inputHerstellerLand">
						<option value="de">Deutschland</option>
						<option value="ch">Schweiz</option>
					</select>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputHerstellerLink">Link:</label>
				<div class="controls">
					<input type="text" name="inputHerstellerLink" id="inputHerstellerLink" placeholder="Hersteller Link">
				</div>
			</div>
			
			</form>
			<button class="btn btn-primary sendHersteller">Senden</button>
		</div>
	</div>

	<footer>
		&copy; by me
	</footer>
</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/libs/jquery-1.8.0.min.js"><\/script>')</script>

	<script src="../js/plugins.js"></script>

	<script>
		var _gaq=[['_setAccount','<?php echo $googleanalytics; ?>'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>



<script>
	$('.sendHersteller').click(function() {
		var serial = $('.formHersteller').serializeArray();
		console.log(serial);
		$.ajax({
			type: 'POST',
			url: 'add-producers.php',
			data: serial,
			success: function(data) {
				console.log(data);
			}
		});
	});
</script>




</body>
</html>