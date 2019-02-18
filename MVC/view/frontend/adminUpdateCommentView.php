<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Mon blog</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="/projetblogAlaska/MVC/public/CSS/main.css" />
</head>

<body>

 <div class="card cardajoutmembre" align="center">
    <div class="card-header" align="center">
		<h2 class="titre">mise à jour du commentaire</h2>
	</div>
	
	<div class="card-body ">
	<form action="index.php?action=updateComment&id=<?= $resultat['id']  ?>"
method="post">
		
		
		<input type="hidden" id="id" name="id" value="<?= $resultat['id']  ?>" />
		<div class="form-group form-comment">
			<label for="author">Auteur</label><br /> <input type="text"
				id="author" name="author" value="<?= $resultat['author'] ?>"/>
		</div>
		<div class="form-group form-comment">
			<label for="comment">Commentaire</label><br />
			<textarea id="comment" name="comment"><?= $resultat['comment'] ?></textarea>
		</div>
		<div class="form-group form-comment">
			<input type="submit" class="btn btn-primary" value="mise à jour commentaire"/> 
		</div>
	</form>
	</div>
	</div>
</body>
</html>