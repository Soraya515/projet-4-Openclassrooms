<?php 
$title = 'Ajouter un article';
$navigation_title = 'Administration : Articles';
ob_start();
?>

<div class="card cardajoutmembre" align="center">
<div class="card-header" align="center">
	<h2 class="titre">Ajouter un article</h2>
</div>

<div class="card-body ">
<form action="index.php?action=addPost" method="post">
     <div class="form-group form-comment">
     <label for="text">Titre</label><br>
        <input type="text" name="title" /> 
        </div>
         <div class="form-group form-comment">
         <label for="content">Contenu</label><br>
        <textarea id="content" name="content"></textarea>
        </div>
         <div class="form-group form-comment">
        <input type="submit" class="btn btn-primary" value="ajouter un article"/>
        </div>  
</form>
</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>