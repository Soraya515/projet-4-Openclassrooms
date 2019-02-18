<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
<body>
    
<div class="container h-100">
		<div class="row  h-100">
			<div class="card w-50" >

				<div class="card-header" align="center">
					<h5>Inscription</h5>
				</div>
				<div class="card-body" >
					<br>    
<form class="form-horizontal" action="index.php?action=inscription" method="post">

    	<div class="form-group">
    	<label class="control-label col-xs-3" for="pseudo">Pseudo</label>
    	 <div class="col-xs-9">
        <input class="form-control"type="text" name="pseudo" />
        </div>
        </div>
        <div class="form-group"> 
        <label for="email">Email</label>
        <div class="col-xs-9">
        <input class="form-control" type="email" name="email"/>
        </div>
        </div>
        <div class="form-group " >
        <label for="password">Password</label>
        <div class="col-xs-9">
        <input class="form-control" type="password" name="password"/>
        </div>
        </div>
        <div class="form-group ">
        <label for="password">Confirmation password</label>
        <div class="col-xs-9">
        <input class="form-control" type="password" name="confirmation_password"/>
        </div>
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Inscription"/>
    	</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>