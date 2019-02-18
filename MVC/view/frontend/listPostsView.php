<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<div class="jumbotron ">
  <div class="container" align="center">
    <h1 class="display-4">Bienvenue sur mon blog Alaska</h1>
    
  </div>
</div>

<?php
while ($data = $posts->fetch()){
    ?>
    <div class="card cardarticle" >
  
        <h3 class="card-header"align="center">
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        <div class="card-body">
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
             
        </p>
        </div>
    </div>
<?php
}



$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>