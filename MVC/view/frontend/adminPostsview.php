<?php 
$title = 'liste des articles';
$navigation_title = 'Administration : Articles';
ob_start();
?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titre</th>
      <th scope="col">Contenu</th>
      <th scope="col">Date de création</th>
      <th scope="col">Modifications</th>
    </tr>
  </thead>
  <tbody>
  <?php while($data = $allPosts->fetch()) { ?>
    <tr>
      <th scope="row"><?= $data['id'];?></th>
      <td><?= $data['title'];?></td>
      <td><?= $data['content'];?></td>
      <td><?= $data['creation_date_fr'];?></td>
    <td> <a href="index.php?action=updatepostForm&id=<?= $data['id'];?>"><i class="fas fa-edit"></i></a>
            <a href="index.php?action=deletePost&id=<?= $data['id'];?>"><i class="fas fa-trash-alt"></i></a>
    </td>
    
    </tr>
  <?php } ?>
  </tbody>
</table>
<a href="index.php?action=addPostForm"><i class="fas fa-plus"></i></a>





<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>