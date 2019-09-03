<?php
session_start();
include('config/db.php');
if (isset($_GET['action'])) {
	if ($_GET['action'] === "login") {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query=$db->prepare("SELECT password FROM users WHERE username = :username");
		$query->bindValue(':username', $username, PDO::PARAM_STR);
		$query->execute();
		$data=$query->fetch();
		if ($data['password'] == $password) {
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header('Location: profile.php');
		} else {
			echo "<script>alert('Mot de passe incorrect')</script>";
		}
	}
}
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