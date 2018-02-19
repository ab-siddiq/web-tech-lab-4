<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="full-site">
		<div id="container">
			<div id="header">
				<h1>Log In</h1>
			</div>
			<div id="main-content">
				<form action="php/logincheck.php" method="POST">
					<fieldset>
						<label>Username</label>
						<input type="text" name="uName">
					</fieldset>
					<fieldset>
						<label>Password</label>
						<input type="password" name="uPass">
					</fieldset>
					<div id="submit_div">
						<input type="submit" name="" value="Log In">
					</div>
					<div id="reg_div">
						<a href="register.php">Register</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>