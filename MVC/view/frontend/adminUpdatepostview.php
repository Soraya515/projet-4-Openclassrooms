<?php
$title = 'Mise à jour de l\'article';
$navigation_title = 'Administration : Articles';
ob_start();
?>
<div class="card cardajoutmembre" align="center">
	<div class="card-header" align="center">
		<h2 class="titre">Mise à jour de l'article</h2>
	</div>

	<div class="card-body ">

		<form action="index.php?action=updatePost" method="post">

			<input type="hidden" name="id" value="<?= $_GET['id'];?>" />
			<div class="form-group form-comment">
				<label for="text">Titre</label><br /> <input type="text"
					name="title" value="<?= $resultat['title'];?>" />
			</div>
			<div class="form-group form-comment">
				<label for="content">Contenu</label><br />
				<textarea id="mytextarea" name="content"><?= $resultat['content'];?></textarea>
			</div>
			<div class="form-group form-comment">
				<input type="submit" class="btn btn-primary" value="Mettre à jour" />
			</div>

		</form>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>