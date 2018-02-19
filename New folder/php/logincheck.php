<?php
	
	session_start();

	$username = $password = "";

	$usernameErr = $passwordErr = "";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//check empty data
		if(empty($_POST["uName"]))
		{
			$usernameErr = "insert username";
		}
		else
		{
			$username 	= test_input($_POST["uName"]);
		}
		if(empty($_POST["uPass"]))
		{
			$passwordErr = "insert password";
		}
		else
		{
			$password 	= test_input($_POST["uPass"]);
		}

		// database check
		if ($username != "" || $password != "") {
			$xml1 = simplexml_load_file('user.xml');
			//$i=1;
			foreach ($xml1->children() as $user) {
				//$i++;
				$exist_username = $user->username;
				$exist_password = $user->password;

				if ($exist_username == $username) {
					if ($exist_password == $password) {
						//insert session id
						$_SESSION["userName"] = $username;
						$_SESSION["userPassword"] = $password;		
						header('Location: ../home.php');
					}
					else
					{
						echo "<script type='text/javascript'>alert('username & password mismatched !!');</script>";
					}		
				}
				else
				{
					echo "<script type='text/javascript'>alert('username don't exist!!');</script>";
				}
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Enter username and password');</script>";
			header('Location: ../index.php');
		}
		
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>