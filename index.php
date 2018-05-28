<?php include_once 'parts/head.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Active uppsala</title>
<link rel="stylesheet" type="text/css" href="/assets/css/foundation.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>

<body>
	<?php require 'includes/dbConnection.php'; ?>
	
	<?php include 'parts/main-menu.php'; ?>

	<section class="top-section text-center">
		<div class="row align-center">
			<div class="column small-12 large-8">
				<h1>För ett aktivare Uppsala!</h1>
				<p>Välkommen till Active Uppsala! Här hittar du närmaste anläggning för just din träningstyp. Vi samlar alla Uppsalas träningsformer och visar dig var du kan hitta dessa, snabbt och enkelt, så att du får mer tid över till din träning. Bra va? Skapa en användare här nedan och ta första steget till göra vår stad till en aktivare sådan! Redan medlem? Välkommen tillbaka!</p>
			</div>
				<div class="column small-12 large-8">
					<img src="assets/images/banner1.jpg">
		</div>
		<p></p>
		<p></p>
		<div class="column small-12 large-8">
					<img src="assets/images/vaderuppsala.jpg">
		</div>
	</section>

	<section class="login-section">
		<div class="row">
			<div class="column small-12">
				<?php include 'parts/login-form.php'; ?>
			</div>

			<div class="column">
				<img src="/assets/images/feet-running.jpg" alt="Feet run">
			</div>
		</div>
	</section>

	<script src="assets/js/scripts.js"></script>
</body>

</html>