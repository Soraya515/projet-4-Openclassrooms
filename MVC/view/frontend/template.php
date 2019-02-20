<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
         
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="/projetblogAlaska/MVC/public/CSS/main.css" />
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=fde4qzd6yyt4nrrlcv6gq2cbqtisnbvkp4kvxzygo1w8vy3a"></script>
         <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
    </head>
        
    <body>
           
<nav class="navbar navbar-dark bg-primary ">
    <div class="container-fluid ">
        <div class="navbar-header">
            <ul class="nav">
                <li><a class="navbar-brand" href="index.php"><?= $navigation_title ?></a></li>
            </ul>
            
        </div>
        <ul class="nav navbar_nav" style="color:white">

			<?php if(is_admin()) {?>
				<li><a href="index.php?action=adminMembers"><span class="fas fa-user-alt fa-2x m-2" style= "color:white"></span></a></li>
				<li><a href="index.php?action=adminposts"><span class="far fa-newspaper fa-2x m-2" style= "color:white"></span></a></li>
                <li><a href="index.php?action=adminComments"><span class="fas fa-comments fa-2x m-2" style= "color:white"></span></a></li>
			<?php }?>
			<?php if(session_status() == PHP_SESSION_NONE) {?>
			<li><a href="index.php?action=connexion"><span class="fas fa-users fa-2x m-2" tabindex="0" data-toggle="tooltip" title="Connexion" style="color:white"></span></a></li>
			<li><a href="index.php?action=inscription"><span class="fas fa-user-plus fa-2x m-2" style="color:white"></span></a></li>
			<?php }?>
            <?php if(session_status() == PHP_SESSION_ACTIVE) {?>
			<li><a href="index.php?action=deconnexion"><span class="fas fa-sign-out-alt fa-2x m-2" style="color:white"></span></a></li>
			<?php }?>
            
        </ul>
    </div>
</nav>

	

      <?= $content ?>
    </body>
    
    
    
    
    
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>