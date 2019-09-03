<?php
session_start();
include('config/db.php');
$username = $_SESSION['username'];
$query=$db->prepare("SELECT admin FROM users WHERE username = :username");
$query->bindValue(':username', $username, PDO::PARAM_STR);
$query->execute();
$data=$query->fetch();
?>
<html>
<head>
<title>Intranet</title>
</head>
<body><link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='template/s.css' media='all' /><iframe id='iframe' src='https://www.root-me.org/?page=externe_header'></iframe>
<a href="contact.php">Contact</a> | <a href="profile.php">Profile</a> | <a href="private.php">Private</a> | <a href="members.php">Members</a> | <a href="logout.php">Logout</a><hr>
<?php
if ($data['admin'] == 0) {
	echo "You are not an administrator, sorry.";
} else {
	echo "<br>Here is the flag : R3fl3ct3dSQL1nj3ct10nR0ck5!*#//";
}
?>
</body>
</html>