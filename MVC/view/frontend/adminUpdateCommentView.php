<?php
$title = 'Mise à jour des commentaires';
$navigation_title = 'Administration : Commentaires';
ob_start();
?>

<div class="card cardajoutmembre" align="center">
	<div class="card-header" align="center">
		<h2 class="titre">mise à jour du commentaire</h2>
	</div>

	<div class="card-body ">
		<form
			action="index.php?action=updateComment&id=<?= $resultat['id']  ?>"
			method="post">


			<input type="hidden" id="id" name="id"
				value="<?= $resultat['id']  ?>" />
			<div class="form-group form-comment">
				<label for="author">Auteur</label><br /> <input type="text"
					id="author" name="author" value="<?= $resultat['author'] ?>" />
			</div>
			<div class="form-group form-comment">
				<label for="comment">Commentaire</label><br />
				<textarea id="mytextarea" name="comment"><?= $resultat['comment'] ?></textarea>
			</div>
			<div class="form-group form-comment">
				<input type="submit" class="btn btn-primary"
					value="mise à jour commentaire" />
			</div>
		</form>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>