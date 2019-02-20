<?php
$title = 'Un article';
$navigation_title = 'Blog Alaska';
ob_start();
?>

<div class="texte">
	<h3>
                <?= htmlspecialchars($post['title']) ?>
            </h3>
	<p class="italique">
		<em>le <?= $post['creation_date_fr'] ?></em>
	</p>

	<p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
</div>

<h2 class="titre">Commentaires</h2>
<br>

<?php
while ($comment = $comments->fetch()) {
    ?>
<div class="card  cardcomment">

	<h4 class="card-header" align="center">
		<strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?>
            </h4>
	<div class="card-body" align="center">
		<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
		<p>
		
		
		<form action="reportComment.php" method="post">
			<input type="hidden" name="comment_id" value="<?= $comment['id']?>">
			<input type="submit" class="btn btn-primary" value="Signaler">
		</form>
	</div>
</div>
<?php
}
?>
<br>
<div class="card cardajoutcomment" align="center">
	<div class="card-header" align="center">
		<h2 class="titre">Ecrire un commentaire</h2>
	</div>
	<div class="card-body ">
		<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>"
			method="post">
			<div class="form-group form-comment">
				<label for="author">Auteur</label><br /> <input type="text"
					id="author" name="author" />
			</div>
			<div class="form-group form-comment">
				<label for="comment">Commentaire</label><br />
				<textarea id="comment" name="comment"></textarea>
			</div>
			<div class="form-group form-comment">
				<input type="submit" class="btn btn-primary" />
			</div>
		</form>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
