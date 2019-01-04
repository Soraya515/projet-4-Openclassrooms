<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
<?php if(isset($error)){
    echo $error;
} ?>
 <p> 
    <form action="inscription.php" method="post">
    <input type="text" name="pseudo"/>
    <input type="password" name="mdp"/>
    <input type="password" name="confirmation_mdp"/>
    <input type="text" name="email"/>
    <input type="submit" value="valider"/>
 </form>   
</p>

    
</body>
</html>