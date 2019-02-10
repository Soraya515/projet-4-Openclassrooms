<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout d'un utilisateur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action="index.php?action=addMember" method="post">
    <p>
        <input type="text" name="pseudo" /> 
        <input type="email" name="email"/>
        <input type="password" name="password"/>
        <input type="text" name="access_level"/>
        <input type="submit" value="ajouter un membre"/>
    </p>
</form>
</body>
</html>