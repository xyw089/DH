<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?php
	include 'includes/connection.php';
	if(isset($_POST["login"])) {
		$password = $_POST["password"];
		if($password == "admin") {
			$_SESSION['admin'] = 'admin';
		}
		else{
			echo("Feil Passord");
		}
	}
	if(isset($_SESSION['admin']) && $_SESSION['admin'] = 'admin'){ ?>
		<!-- Trigger/Open The Modal -->
		<a href="create.php">Legg til Medlem</a>
		<a href="includes/logout.inc.php">Logg av</a>
		<?php 
		include 'includes/admin.inc.php';

	}
	else { ?>
		<form method="POST">
		<input type="password" name="password" placeholder="password...">
		<input type="submit" name="login" value="Login">
		</form>
	<?php } ?>
</body>