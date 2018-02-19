<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<div id="full-site">
		<div id="container">
			<div id="header">
				<h1>Registration</h1>
			</div>
			<div id="main-content">
				<form action="php/registerUser.php" method="POST">
					<fieldset>
						<label>Username</label>
						<input type="text" name="uName">
					</fieldset>
					<fieldset>
						<label>Password</label>
						<input type="password" name="uPass">
					</fieldset>
					<fieldset>
						<label>Conform Password</label>
						<input type="password" name="Conform_uPass">
					</fieldset>
					<fieldset>
						<label>Email</label>
						<input type="email" name="uEmail">
					</fieldset>
					<fieldset>
						<label>Phone</label>
						<input type="tel" name="uPhone">
					</fieldset>
					<fieldset>
						<label>Full Name</label>
						<input type="text" name="uFullName">
					</fieldset>
					<fieldset id="btn-fieldset">
						<input type="reset" name="" value="Reset">
						<input type="submit" name="" value="Register">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>