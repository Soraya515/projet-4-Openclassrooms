<?php 
$title = 'Mise à jour du membre'; 
$navigation_title = 'Administration : Membres';
ob_start(); 
?>

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
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>