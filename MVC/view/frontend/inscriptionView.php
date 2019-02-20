
<?php
$title = 'inscription';
$navigation_title = 'Blog Alaska';
ob_start();
?>

<div class="container h-100">
	<div class="row  h-100">
		<div class="card w-50">

			<div class="card-header" align="center">
				<h5>Inscription</h5>
			</div>
			<div class="card-body">
				<br>
				<form class="form-horizontal" action="index.php?action=inscription"
					method="post">

					<div class="form-group">
						<label class="control-label col-xs-3" for="pseudo">Pseudo</label>
						<div class="col-xs-9">
							<input class="form-control" type="text" name="pseudo" />
						</div>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<div class="col-xs-9">
							<input class="form-control" type="email" name="email" />
						</div>
					</div>
					<div class="form-group ">
						<label for="password">Password</label>
						<div class="col-xs-9">
							<input class="form-control" type="password" name="password" />
						</div>
					</div>
					<div class="form-group ">
						<label for="password">Confirmation password</label>
						<div class="col-xs-9">
							<input class="form-control" type="password"
								name="confirmation_password" />
						</div>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Inscription" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>