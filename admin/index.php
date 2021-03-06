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
				<?php include('navigation.php'); ?>
			</div>
		</div>
	</header>

	<div class="row" role="main">
		<div class="span12">
			<h1>Home</h1>
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