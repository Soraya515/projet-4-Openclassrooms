<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-dark bg-primary ">
    <div class="container-fluid ">  
        <div class="navbar-header">
            <ul class="nav">
                 <li><a class="navbar-brand" href="#">Administration</a></li>            
                 </ul>
            </div>
        </div>
        <ul class="nav navbar_nav ">
        
                <li><a href="#"><span class="fas fa-home fa-2x m-2" style="color:white"></span></a></li>
                <li><a href="#"><span class="far fa-newspaper fa-2x m-2" style= "color:white"></span></a></li>
                <li><a href="#"><span class="fas fa-sign-out-alt fa-2x m-2" style="color:white"></span></a></li>
                
            </ul>
            </nav>

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

</body>
</html>
