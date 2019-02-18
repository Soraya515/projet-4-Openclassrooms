<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mise à jour d'un utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="/projetblogAlaska/MVC/public/CSS/main.css" />
</head>
<body>
    <div class="card cardajoutmembre" align="center">
    <div class="card-header" align="center">
		<h2 class="titre">Mise à jour du membre</h2>
	</div>
	
	<div class="card-body ">
<form action="index.php?action=updateMember" method="post">
   
        <input type="hidden" name="id" value="<?= $_GET['id'];?>" />
        <div class="form-group form-comment">
		<label for="text">Pseudo</label><br />
        <input type="text" name="pseudo" value="<?= $resultat['pseudo'];?>" /> 
        </div>
        <div class="form-group form-comment">
		<label for="email">Email</label><br />
        <input type="email" name="email" value="<?= $resultat['email'];?>"/>
        </div>
        <div class="form-group form-comment">
		<label for="password">Mot de passe</label><br />
        <input type="password" name="password"/>
        </div>
        <div class="form-group form-comment">
		<label for="text">niveau acces</label><br />
        <input type="text" name="access_level" value="<?= $resultat['access_level'];?>"/>
        </div>
        <div class="form-group form-comment">
        <input type="submit" class="btn btn-primary" value="Mettre à jour"/>
        </div>
</form>
</div>
</div>
</body>
</html>