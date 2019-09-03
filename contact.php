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
	<fieldset><legend>Contact</legend>
	<form method="post" action="?action=contact">
	<div>
	<input type="email" placeholder="Your email" style="width:500px">
	</div>
	<br>
	<div>
	<label>Comment</label>
	<br>
	<textarea style="width:500px;height:110px;" name="content"></textarea>
	</div>
	<br>
		<?php
		if (isset($_GET['action'])) {
			if($_GET['action'] === "contact") {
				if (isset($_POST['content'])) {
					if (preg_match("/(\(|\)|win|new|;|,|\"|prompt|alert|&|#|!)/i", $_POST['content'])) {
						echo "<div id='error'><h2>Bad chars! </h2></div><br/>";
					} else {
						file_put_contents('bot/log.html', $_POST['content']);
						echo "<div id='error'><h2>Mail sended!</h2></div><br/>";
					}
				}
			}
		}	
	?>
	<button type="submit">Submit</button>
	</form>
	</fieldset>
	</div>
</body>
</html>