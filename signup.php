<?php include_once 'parts/head.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Active uppsala - Registrera dig</title>
<link rel="stylesheet" type="text/css" href="/assets/css/foundation.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>

<body>
	<?php require 'includes/dbConnection.php'; ?>
	
	<?php include 'parts/main-menu.php'; ?>

	<section class="top-section text-center">
		<div class="row align-center">
			<div class="column small-12 large-8">
				<h1>Registrera konto</h1>
				
					<form name="signup-form" class="signup-form" method="POST" onsubmit="return validateForm();" action="includes/signup.inc.php">
						<div class="row">
							<div class="column small-12 large-6">
								<input type="text" id="first" name="first" placeholder="Förnamn" class="form-input">
							</div>

							<div class="column small-12 large-6">
								<input type="text" id="last" name="last" placeholder="Efternamn" class="form-input">
							</div>

							<div class="column small-12 large-6">
								<input type="text" id="uid" name="uid" placeholder="Användarnamn" class="form-input">
							</div>

							<div class="column small-12 large-6">
								<input type="email" id="email" name="email" placeholder="E-mail" class="form-input">
							</div>

							<div class="column small-12 large-6">
								<input type="password" id="pwd" name="pwd" placeholder="Lösenord" class="form-input">
							</div>
							
							<div class="column small-12">
								<button type="submit" name="submit" class="submit-button">Registrera dig</button>
							</div>

						</div>	
					</form>

			  	  	<h3>Har du redan ett konto?</h3>
			  	  	<a href="index.php" class="button">Logga in</a>

			</div>
		</div>
	</section>

	<script src="assets/js/scripts.js"></script>
</body>

</html>