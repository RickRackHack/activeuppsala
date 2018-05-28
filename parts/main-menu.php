<header class="page-header">
	<div class="row">
		<div class="column small-5 large-4">
			<a href="/index.php" class="page-logo">Active Uppsala</a>
		</div>
		<div class="column small-7 large-8">
			<ul class="main-nav">
				<li><a href="/index.php">Hem</a></li>
				<li><a href="/forum.php">Forum</a></li>
				<li><a href="/evenemang.php">Evenemang</a></li>
				<li><a href="/traningsalternativ.php">Träningsalternativ</a>
					<ul class="sub-menu">
						<li><a href="/gym.php">Gym</a></li>
						<li><a href="/simhallar.php">Simhallar</a></li>
						<li><a href="/fotbollsplaner.php">Fotbollsplaner</a></li>
						<li><a href="loprundor.php">Löprundor</a></li>
						<li><a href="tennisplaner.php">Tennisplaner</a></li>
						<li><a href="padelplaner.php">Padelplaner</a></li>
						<li><a href="crossfit.php">Crossfit</a></li>
						<li><a href="kampsport.php">Kampsport</a></li>
					</ul>
				</li>

				<?php if (isset($_SESSION['u_id'])) : ?>
					<li><a href="/minprofil.php">Min profil</a>
						<ul class="sub-menu">
						<li>
							<form action="includes/logout.inc.php" method="POST">
								<button type="submit" name="submit" class="logout-button">Logga ut</button>
							</form>
						</li>
						</ul>
					</li>
				<?php endif; ?>
				
			</ul>
		</div>
	</div>
</header>