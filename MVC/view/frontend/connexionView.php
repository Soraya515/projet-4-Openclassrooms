<?php 
$title = 'Connexion';
$navigation_title = 'Blog Alaska';
ob_start(); 
?>

	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="card w-50" align="center">

				<div class="card-header">
					<h5>Connexion</h5>
				</div>
				<div class="card-body ">
					<br>
					<form action="index.php?action=connexion" method="post">

						<div class="form-group ml-3" text-align="center">

							<label for="pseudo">Pseudo</label>
							<input type="text"name="login" placeholder="Pseudo" />

						</div>

						<div class="form-group" text-align="center">
							<label for="pass">Password</label> <input type="password"name="pass" placeholder="Password" />
						</div>
						<div class="form-group " align="center">
							<input type="submit" class="btn btn-primary" name="Connexion"
								value="Connexion" />
						</div>
				</form>
			</div>
		</div>
	</div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>