
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>User info</title>
	<link rel="stylesheet" type="text/css" href="css/style_uinfo.css">
</head>
<body>
	<div id="full-site">
		<div id="container">
			<div id="header">
				<h1>User info</h1>
			</div>
			<div id="Logout_div">
				<form action="home.php" method="POST" id="lg_out_btn">		
					<input type="submit" name="" value="Home">
				</form>
				<form action="php/logout_process.php" method="POST">
					<input type="submit" name="" value="Logout">
				</form>
			</div>
			<div id="main-content">
				<h2>User Info</h2>
				<?php
					$xml1 = simplexml_load_file('php/user.xml');
					$i=1;
					foreach ($xml1->children() as $user) {
						echo "Username : " . $user->username . " Password : " . $user->password . "<br>";
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>