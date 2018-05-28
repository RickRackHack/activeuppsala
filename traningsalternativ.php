<?php include_once 'parts/head.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Active uppsala - Träningsalternativ</title>
<link rel="stylesheet" type="text/css" href="/assets/css/foundation.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>

<body>
	<?php require 'includes/dbConnection.php'; ?>
	
	<?php include 'parts/main-menu.php'; ?>

	<section class="top-section text-center">
		<div class="row align-center">
			<div class="column small-12 large-8">
				<h1>Träningstyp</h1>
				<p>Här finner du Uppsalas populäraste träningsformer. Välj just din och hitta närmaste anläggning eller löprunda utifrån din position! <br> Vem vet, du kanske hittar en ny favoritsträcka i skogen eller en tom konstgräsplan med tända lampor hela kvällen?</p>
			</div>
			<div class="column small-12 large-8">
					<img src="assets/images/banner5.jpg">
		</div>
		</div>
	</section>

	<section class="training-options">
		<div class="row align-center">

			<div class="column small-12 large-12">
				<h2>Gym</h2>
				<p></p>
				<a href="/gym.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/gym.jpg">
				</div>

			<div class="column small-12 large-12">
				<h2>Simning</h2>
				<p></p>
				<a href="/simhallar.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/simhallar.jpg">
				</div>

			<div class="column small-12 large-12">
				<h2>Fotboll</h2>
				<p></p>
				<a href="/fotbollsplaner.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/fotbollsplaner.jpg">
				</div>

			<div class="column small-12 large-12">
				<h2>Löpning</h2>
				<p></p>
				<a href="/loprundor.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/loprundor.jpg">
				</div>

			<div class="column small-12 large-12">
				<h2>Tennis</h2>
				<p></p>
				<a href="/tennisplaner.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/tennisplaner.jpg">
				</div>

			<div class="column small-12 large-12">
				<h2>Padel</h2>
				<p></p>
				<a href="/padelplaner.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/padelplaner.jpg">
				</div>

			<div class="column small-12 large-12">
				<h2>Crossfit</h2>
				<p></p>
				<a href="/crossfit.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/crossfit.jpg">
				</div>

			<div class="column small-12 large-12">
				<h2>Kampsport</h2>
				<p></p>
				<a href="/kampsport.php">Läs mer...</a>
			</div>

				<div class="column small-12 large-4">
					<img src="assets/images/kampsport.jpg">
				</div>


		</div>
	</section>

	<script src="assets/js/scripts.js"></script>
</body>

</html>