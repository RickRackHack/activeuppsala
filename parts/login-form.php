
<form id="login-form" onsubmit="return validateForm();" action="includes/login.inc.php" method="POST">
	<div class="row align-center space">

		<div class="column small-12 medium-4 large-3">
			<label for="login-email">Användarnamn:</label>
			<input type="text" id="uid" name="uid" placeholder="Användarnamn" class="form-input">
		</div>
		
		<div class="column small-12 medium-4 large-3">
			<label for="login-pass">Lösenord:</label>
			<input type="password" id="pwd" name="pwd" placeholder="Lösenord" class="form-input">
		</div>
			
		<div class="column small-12 medium-4 large-3">
			<label for="submit"></label>
			<input type="submit" name="submit" class="submit-button" value="Logga in">
		</div>

		<div class="column small-12 text-center space">
			<h3>Har du inte ett konto?</h3>
			<a href="/signup.php" class="button">Registrera dig</a>
		</div>

	</div>
</form>