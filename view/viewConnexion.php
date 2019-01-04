<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php if(isset($error_msg)){
    echo $error_msg;
} ?>

<form method="post" action="connexion.php">

<p>

<input type="text" name="pseudo" />
<br>
<input type="text" name="pass" />
<br>
<input type="submit" name="connexion" />
<br>

</p>
</form>
</body>
</html>