<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<style>
			.error {color: #FF0000;}
			background-color:#EFEFEF;
		</style>
	</head>
	<body>
		<?php
			include "login_required_field.php";
		?>
		<table border="1px" width="350px" height="400px">
			<tr align="center">
				<td>LOGIN</td>
			</tr>
			<tr align="right">
				<td>
					<form method="post" action="home.php">
						<label >
							<a href="register.php">Register</a>
						</label><br/>
						<label>Username</label>
						<input type="text" name="userName"  size="40" height="200">
						<span class="error"><?php echo $userNameErr;?></span>
						<br/><br/>
						<label>Password</label>
						<input type="password" name="password"  size="40">
						<span class="error"><?php echo $passwordErr;?></span>
						<br/><br/>
						<input type="submit" href="home.php" name="submit" height="50px">
					</form>
				</td>
			</tr>		
		</table>
	</body>
</html>