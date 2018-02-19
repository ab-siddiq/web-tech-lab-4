<?php
	//initializing  variables to empty defined for error message
	$userNameErr = $passwordErr = $rePasswordErr = $emailErr = $phoneErr = $fullNameErr = " ";
	//initializing variables to empty defined for input value
	$userName =$password = $rePassword = $email = $phone = $fullName = " ";
			
	//condition part
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//condition for user name
		if(empty($_POST["userName"])){
			$userNameErr = "*User Name Is Required";
		}
		else{
			$userName = test_input($_POST["userName"]);
		}
		//condition for password
		if(empty($_POST["password"])){
			$passwordErr = "*Password Is Required";
		}
		else{
			$password = test_input($_POST["password"]);
		}
		//condition for re type password
		if(empty($_POST["rePassword"])){
			$rePasswordErr = "*Re-Password Is Required";
		}
		else{
			$rePassword = test_input($_POST["rePassword"]);
		}
		//condition for email
		if(empty($_POST["email"])){
			$emailErr = "*Email Is Required";
		}
		else{
			$email = test_input($_POST["email"]);
			/*
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailErr = "*Invalid Email Format";
			}*/
		}
		//condition for phone
		if(empty($_POST["phone"])){
			$phoneErr = "*Phone Number Is Required";
		}
		else{
			$phone = test_inpt($_POST["phone"]);
		}
		//condition for full name
		if(empty($_POST["fullName"])){
			$fullNameErr = "*Full Name Is Required";
		}
		else{
			$fullName = test_inpt($_POST["fullName"]);
		}
	}
	function test_inpt($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	}	
	
?>