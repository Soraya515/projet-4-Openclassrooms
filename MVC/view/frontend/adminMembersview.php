<?php 
$title = 'liste des membres';
$navigation_title = 'Administration : Membres';
ob_start();
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Membres</th>
      <th scope="col">Status</th>
      <th scope="col">modifications</th>
      </thead>
  <tbody>
  <?php while ($member= $allMembers->fetch()) { ?>
    <tr>
      <th scope="row"><?= $member['id'];?></th>
      <td><?= $member['pseudo'];?></td>
      <td><?= $member['access_level'];?></td>



    <td> <a href="index.php?action=updateMemberForm&id=<?= $member['id'];?>"><i class="fas fa-edit"></i></a>
            <a href="index.php?action=deleteMember&id=<?= $member['id'];?>"><i class="fas fa-trash-alt"></i></a>
            
    </td>
    </tr>
    <?php } ?>

  </tbody>
</table>

<a href="index.php?action=addMemberForm"><i class="fas fa-plus"></i></a>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
