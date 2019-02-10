<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Mon blog</title>
<link href="style.css" rel="stylesheet" />
</head>

<body>
	<form action="index.php?action=updateComment&id=<?= $resultat['id']  ?>"
		method="post">
		<input type="hidden" id="id" name="id" value="<?= $resultat['id']  ?>" />
		<div>
			<label for="author">Auteur</label><br /> <input type="text"
				id="author" name="author" value="<?= $resultat['author'] ?>"/>
		</div>
		<div>
			<label for="comment">Commentaire</label><br />
			<textarea id="comment" name="comment"><?= $resultat['comment'] ?></textarea>
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>

</body>
</html>