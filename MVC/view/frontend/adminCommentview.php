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
                <a class="navbar-brand" href="#">Administration</a>
            </ul>
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






</body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</html>