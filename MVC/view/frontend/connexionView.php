<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Page Connexion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
	integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
	crossorigin="anonymous">
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	crossorigin="anonymous">

</head>
<body>
	<br>
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="card w-50" align="center">

				<div class="card-header">
					<h5>Connexion</h5>
				</div>
				<div class="card-body ">
					<br>
					<form action="index.php?action=connexion" method="post">

						<div class="form-group ml-3" text-align="center">

							<label for="pseudo">Pseudo</label>
							<input type="text"name="login" placeholder="Pseudo" />

						</div>

						<div class="form-group" text-align="center">
							<label for="pass">Password</label> <input type="password"name="pass" placeholder="Password" />
						</div>
						<div class="form-group " align="center">
							<input type="submit" class="btn btn-primary" name="Connexion"
								value="Connexion" />
						</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>