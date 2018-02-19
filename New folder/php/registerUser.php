<?php

	$usernameErr = $passwordErr = $passwordConformErr = $emailErr = $phoneErr = $fullNameErr = $sameUserName = "";
	$username = $password = $email = $phone = $fullName = "";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		// Name Data check
		if(empty($_POST["uName"]))
		{
			$usernameErr = "username can not be empty.";
			
		}
		else
		{
			// same username check
			$xml1 = simplexml_load_file('user.xml');
			$i=1;
			foreach ($xml1->children() as $user) {
				$i++;
				$exist_username = $user->username;

				if ($exist_username == $_POST["uName"]) {
					$sameUserName = "same user name exist.";
					echo "<script type='text/javascript'>alert('Same username exist!!');</script>";
				}
				else
				{
					$username 	= test_input($_POST["uName"]);
				}
			}
			//end same username check
			
		}

		//Password Data check
		if(empty($_POST["uPass"]))
		{
			$passwordErr = "Password can not be empty.";
		}
		else
		{
			if ($_POST["uPass"] != $_POST["Conform_uPass"]) {
				$passwordConformErr = "Password not matched.";
			}
			else
			{
				$password 	= test_input($_POST["uPass"]);
			}
		}

		//Email Data check
		if(empty($_POST["uEmail"]))
		{
			$emailErr = "Email can not be empty.";
		}
		else
		{
			$un_email = test_input($_POST["uEmail"]);
			if (!filter_var($un_email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "Invalid email format";
			}
			else
			{
				$email = test_input($_POST["uEmail"]);
			}
		}

		//Phone Data check
		if(empty($_POST["uPhone"]))
		{
			$phoneErr = "Phone can not be empty.";
		}
		else
		{
			$phone = test_input($_POST["uPhone"]);
		}		

		//Full Name Data check
		if(empty($_POST["uFullName"]))
		{
			$fullNameErr = "Fullname can not be empty.";
		}
		else
		{
			$fullName = test_input($_POST["uFullName"]);
		}	


		// Data insert if any field is not empty
		if($usernameErr== "" && $passwordErr== "" && $passwordConformErr== "" && $emailErr== "" && $phoneErr== "" && $fullNameErr=="" && $sameUserName=="")
		{
			/*XML
			$xml = new DOMDocument("1.0","UTF-8");
			$xml->load("user.xml");

			$rootTag = $xml->getElementsByTagName("document")->item(0);

			$dataTag = $xml->createElement("data");

			$usernameTag = $xml->createElement("username", $username);
			$passwordTag = $xml->createElement("password", $password);
			$emailTag = $xml->createElement("email", $email);
			$phoneTag = $xml->createElement("phone", $phone);
			$fullNameTag = $xml->createElement("fullName", $fullName);

			$dataTag->appendChild($usernameTag);
			$dataTag->appendChild($passwordTag);
			$dataTag->appendChild($emailTag);
			$dataTag->appendChild($phoneTag);
			$dataTag->appendChild($fullNameTag);

			$rootTag->appendChild($dataTag);

			$xml->save("user.xml");

			*/

			$xml1 = simplexml_load_file('user.xml');
			$user1 = $xml1->addChild('data');

			$user1->addChild('username',$username);
			$user1->addChild('password',$password);
			$user1->addChild('email',$email);
			$user1->addChild('phone',$phone);
			$user1->addChild('fullName',$fullName);

			file_put_contents('user.xml', $xml1->asXML());

			/*
			$dataUsername = array( $username => $username);
			$dataPassword = array( $username => $password);
			$dataEmail 	  = array( $username => $email);
			$dataPhone	  = array( $username => $phone);
			$dataFullName = array( $username => $fullName);

			$message = "username : " . $dataUsername[$username] . " password : " . $dataPassword[$username] . " Email : " . $dataEmail[$username] . " Phone : " . $dataPhone[$username] . " Fullname : " . $dataFullName[$username];
			echo "<script type='text/javascript'>alert('$message');</script>";
			*/
		}
		else
		{
			echo $usernameErr;
			echo "<br>";
			if ($passwordErr != "") {
				echo $passwordErr;
				echo "<br>";
			}
			if ($passwordConformErr != "") {
				echo $passwordConformErr;
				echo "<br>";
			} 			
			echo $emailErr;
			echo "<br>";
			echo $phoneErr;
			echo "<br>";
			echo $fullNameErr;
			
			

		}
	}

	
	// Function
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

?>