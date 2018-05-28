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

	<?php if (!isset($_SESSION['u_id'])) : ?>
		
		<section class="login-section">
			<div class="row">
				<div class="column small-12">
					<?php include 'parts/login-form.php'; ?>
				</div>
			</div>
		</section>

	<?php else : 

		$firstName = $_SESSION['u_first'] ? $_SESSION['u_first'] : null;

	?>

		<section class="login-section">
			<div class="row">
				<div class="column small-12">
					<?php if ( $firstName ) : ?>
						<h2>Hej <?php echo $firstName; ?></h2>
					<?php endif; ?>
					Du är inloggad!
				</div>
			</div>
		</section>
	
	<?php endif; ?>

</body>
</html>