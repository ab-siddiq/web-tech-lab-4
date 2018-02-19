<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<table border="1px" width="350px">
			<tr align="center">
				<td>HOME</td>
			</tr>
			<tr align="center">
				<td>
					<label style="align:right">
						<a href="index.php">Logout</a>
					</label><br/>
					<?php
						echo "Hello, ";
						session_start();
						echo $_SESSION['$userName'];
					?>
				</td>
			</tr>
			<tr >
				<td>
					<br/>
					<br/>
					<br/>
					<a href="user_info.php">User Info</a><br/>
					<a href="user_login_info.php">User Login Info</a>
					<br/>
					<br/>
					<br/>
					<br/>
				</td>
			</tr>		
			 
		</table>
	</body>
</html>