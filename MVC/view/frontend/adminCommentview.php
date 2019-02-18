<?php 
$title = 'listes des commentaires'; 
$navigation_title = 'Administration : Commentaires';
ob_start(); 
?>

			
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Auteur</th>
      <th scope="col">Commentaires</th>
      <th scope="col">Date de création</th>
      <th scope="col">Signalements</th>
      <th scope="col">Modifications</th>
      
    </tr>
  </thead>
  <tbody>
  <?php while ($comment = $allComments->fetch()){ ?>
    <tr>
      <th scope="row"><?= $comment['id'];?></th>
      <td><?= $comment['author'];?></td>
      <td><?= $comment['comment'];?></td>
      <td><?= $comment['comment_date_fr'];?></td>
      <td><?php if (array_key_exists($comment['id'], $allReportedarray)) {
         echo $allReportedarray[$comment['id']];
      }
      else {
          echo '0';
      }?></td>
    <td> <a href="index.php?action=updateCommentForm&id=<?= $comment['id'];?>"><i class="fas fa-edit"></i></a>
            <a href="index.php?action=deleteComment&id=<?= $comment['id'];?>"><i class="fas fa-trash-alt"></i></a>
    </td>
    
    </tr>
  <?php } ?>
  </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>




