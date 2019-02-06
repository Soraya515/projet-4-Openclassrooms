<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mise à jour d'un utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action="index.php?action=updateMember" method="post">
    <p>
        <input type="hidden" name="id" value="<?= $_GET['id'];?>" />
        <input type="text" name="pseudo" value="<?= $resultat['pseudo'];?>" /> 
        <input type="email" name="email" value="<?= $resultat['email'];?>"/>
        <input type="password" name="password"/>
        <input type="text" name="access_level" value="<?= $resultat['access_level'];?>"/>
        <input type="submit" value="Mettre à jour"/>
    </p>
</form>
</body>
</html>