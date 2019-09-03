<?php
session_start();
include('config/db.php');
?>
<html>
<head>
<title>Intranet</title>
</head>
<body><link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='template/s.css' media='all' /><iframe id='iframe' src='https://www.root-me.org/?page=externe_header'></iframe>
<a href="contact.php">Contact</a> | <a href="profile.php">Profile</a> | <a href="private.php">Private</a> | <a href="members.php">Members</a> | <a href="logout.php">Logout</a><hr>
<br><br>
	<div>
	<fieldset><legend>Our members</legend>
	<?php
	if (isset($_GET['username'])) {
		$username = $_GET['username'];
		$query=$db->prepare("SELECT username FROM users WHERE username = :username");
		$query->bindValue(':username', $username, PDO::PARAM_STR);
		$query->execute();
		$data=$query->fetch();
		if ($data['username'] === $username) {
			echo "Username : " . htmlspecialchars($username) . "<br/>";
			if ($_SESSION['username'] === $username) {
				echo "Visiting your own profile does not add you views!<br/>";
			} else {
				$mysqli = new mysqli('localhost', 'root', '', 'challenge');
  				$result=mysql_query("SELECT * FROM users WHERE username='$username'");
			}
			$query=$db->prepare("SELECT views FROM users WHERE username = :username");
			$query->bindValue(':username', $username, PDO::PARAM_STR);
			$query->execute();
			$views=$query->fetch();
			echo "Number of views : " . htmlspecialchars($views['views']);
		} else {
			echo "User does not exists.";
		}
	} else {
		echo "<a href='members.php?username=" . $_SESSION['username'] . "'>" . $_SESSION['username'] . "</a>";
	}
	?>
	</fieldset>
	</div>
</body>
</html>
