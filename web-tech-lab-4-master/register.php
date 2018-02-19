<!DOCTYPE html>
<html>
	<head>
		<title>Registration Page</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<?php
			include "register_required_field_check.php";
			include "set_cookie_for_register.php";
		?>
	
	
		<table border="1px" width="400px">
			<tr >
				<td align="center">REGISTER</td>
			</tr>
			<tr align="center">
				<td align="right">
					<form method="post" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
						<label style="align:center;">
							<a href="index.php">Login</a>
						</label><br/>
						<label>Username</label>
						<input type="text" name="userName" size="40"><br/>
						<span class="error" color="red"><?php echo $userNameErr;?></span>
						<br/><br/>
						<label>Password</label>
						<input type="password" name="password" size="40"><br/>
						<span class="error"><?php echo $passwordErr;?></span>
						<br/><br/>
						<label>Re-Password</label>
						<input type="password" name="rePassword" size="40"><br/>
						<span class="error"><?php echo $rePasswordErr;?></span>
						<br/><br/>
						<label>E-mail</label>
						<input type="text" name="email" size="40"><br/>
						<span class="error"><?php echo $emailErr;?></span><br/><br/>
						<label>Phone</label>
						<input type="text" name="phone" size="40"><br/>
						<span class="error"><?php echo $phoneErr;?></span>
						<br/><br/>
						<label>Full Name</label>
						<input type="text" name="fullName" size="40"><br/>
						<span class="error"><?php echo $fullNameErr;?></span>
						<br/><br/>
						
						<input type="reset"  name="reset">
						<input type="submit" name="submit">
					</form>
				</td>
			</tr>		
			 
		</table>
	</body>
</html>