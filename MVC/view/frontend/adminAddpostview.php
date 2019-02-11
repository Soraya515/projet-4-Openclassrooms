<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout d'un Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action="index.php?action=addPost" method="post">
    <p>
        <input type="text" name="title" /> 
        <textarea id="content" name="content"></textarea>
        <input type="submit" value="ajouter un article"/>
    </p>
</form>
</body>
</html>