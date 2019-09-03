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
<br><br><div>
		<fieldset><legend>Update Profile</legend>
		<form action="?action=profile" method="post" enctype="multipart/form-data">
		<div class="form-group">
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo htmlspecialchars($_SESSION['username']);?>">
		</div>
		<br>		
		<div class="form-group">
		<label>Administrator:</label>
		<?php
			$username = $_SESSION['username'];
			$query=$db->prepare("SELECT admin FROM users WHERE username = :username");
			$query->bindValue(':username', $username, PDO::PARAM_STR);
			$query->execute();
			$data=$query->fetch();
			if ($data['admin'] == 0) {
				echo "No"; 
			} elseif ($data['admin'] == 1) {
				echo "Yes";
			} else {
				echo "No";
			}
		?>
		</div>
		<br>
		<div class="form-group">
		<label>Number of views:</label>
		<?php
			$username = $_SESSION['username'];
			$query=$db->prepare("SELECT views FROM users WHERE username = :username");
			$query->bindValue(':username', $username, PDO::PARAM_STR);
			$query->execute();
			$data=$query->fetch();
			echo htmlspecialchars($data['views']);
		?>
		</div>
		<br>	
		<button type="submit">Submit</button>
		</form></fieldset>
		</div>
</body>
</html>