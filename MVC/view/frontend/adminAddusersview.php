<?php
$title = 'Ajouter un membre';
$navigation_title = 'Administration : Membres';
ob_start();
?>

<div class="card cardajoutmembre" align="center">
	<div class="card-header" align="center">
		<h2 class="titre">Ajouter un membre</h2>
	</div>

	<div class="card-body ">
		<form action="index.php?action=addMember" method="post">
			<div class="form-group form-comment">
				<label for="pseudo">Pseudo</label><br> <input type="text"
					name="pseudo" />
			</div>
			<div class="form-group form-comment">
				<label for="email">Email</label><br> <input type="email"
					name="email" />
			</div>
			<div class="form-group form-comment">
				<label for="password">Mot de passe</label><br> <input
					type="password" name="password" />
			</div>
			<div class="form-group form-comment">
				<label for="text">niveau acces</label><br> <input type="text"
					name="access_level" />
			</div>
			<div class="form-group form-comment">
				<input type="submit" class="btn btn-primary"
					value="ajouter un membre" />
			</div>
		</form>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
