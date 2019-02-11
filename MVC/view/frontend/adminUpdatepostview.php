<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mise à jour article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action="index.php?action=updatePost" method="post">
    <p>
        <input type="hidden" name="id" value="<?= $_GET['id'];?>" />
        <input type="text" name="title" value="<?= $resultat['title'];?>"/> 
        <textarea id="content" name="content"><?= $resultat['content'];?></textarea>
        <input type="submit" value="Mettre à jour"/>
    </p>
</form>
</body>
</html>