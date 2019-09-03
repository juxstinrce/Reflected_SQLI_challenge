<?php
session_start();
if (isset($_SESSION['username'])) {
	header('Location: profile.php');
}
include('config/db.php');
?>
<html>
<head>
<title>Intranet</title>
</head>
<body><link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='template/s.css' media='all' /><iframe id='iframe' src='https://www.root-me.org/?page=externe_header'></iframe>
<a href="login.php">Login</a> | <a href="register.php">Register</a><hr>
<br><br><fieldset><legend>Login</legend>
		<form method="post" action="?action=login">
		<div>
		<input type="text" name="username" placeholder="Username">
		</div>
		<br>
		<div>
		<input type="password" name="password" placeholder="Password">
		</div>
		<br>
		<button type="submit">Sign in</button>
		</form>
</body>
</html>