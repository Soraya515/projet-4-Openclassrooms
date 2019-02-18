<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mise à jour article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="/projetblogAlaska/MVC/public/CSS/main.css" />
</head>
<body>
    <body>
    <div class="card cardajoutmembre" align="center">
    <div class="card-header" align="center">
		<h2 class="titre">Mise à jour de l'article</h2>
	</div>
	
	<div class="card-body ">
    
<form action="index.php?action=updatePost" method="post">
    
        <input type="hidden" name="id" value="<?= $_GET['id'];?>" />
        <div class="form-group form-comment">
		<label for="text">Titre</label><br />
        <input type="text" name="title" value="<?= $resultat['title'];?>"/> 
        </div>
        <div class="form-group form-comment">
		<label for="content">Contenu</label><br />
        <textarea id="content" name="content"><?= $resultat['content'];?></textarea>
        </div>
        <div class="form-group form-comment">
        <input type="submit" class="btn btn-primary" value="Mettre à jour"/>
        </div>
    
</form>
</div>
</div>
</body>
</html>