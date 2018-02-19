<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style_home.css">
</head>
<body>
	<div id="full-site">
		<div id="container">
			<div id="header">
				<h1>Home</h1>
			</div>
			<div id="Logout_div">
				<form action="php/logout_process.php" method="POST">
					<input type="submit" name="" value="Logout">
				</form>
			</div>
			<div id="main-content">
				<div id="welcome-note">
					<h2>Hello <?php echo $_SESSION['userName'] ?></h2>
				</div>
				<div id="links">
					<a href="userinfo.php">User Info</a>
					<a href="userinfo.php">User Login Info</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>