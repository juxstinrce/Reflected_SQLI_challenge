<?php
session_start();
include('config/db.php');
if (isset($_GET['action'])) {
	if ($_GET['action'] === "register") {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query=$db->prepare("INSERT into users (username, password, admin) VALUES (:username, :password, 0)");
		$query->bindValue(':username',$username, PDO::PARAM_STR);
		$query->bindValue(':password',$username, PDO::PARAM_STR);
		$query->execute();
		echo "<script>alert('Inscris!');</script>";
	}
}
?>
<html>
<head>
<title>Intranet</title>
</head>
<body><link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='template/s.css' media='all' /><iframe id='iframe' src='https://www.root-me.org/?page=externe_header'></iframe>
<a href="login.php">Login</a> | <a href="register.php">Register</a><hr>
<br><br>
		<div>
		<fieldset><legend>Register</legend>
		<form action="?action=register" method="post">
		<div>
		<input type="username" name="username" placeholder="Username">
		</div>
		<br>
		<div>
		<input type="password" name="password" placeholder="Password">
		</div>
		<br>
		<button type="submit" class="btn btn-default">Submit</button>
		</form>
		</fieldset></div>
	</div>
</body>
</html>