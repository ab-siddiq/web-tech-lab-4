<?php
	//define variables for error and set empty values
	$userNameErr = $passwordErr = " ";
	$userName = $password = " ";

	//condition to be checked for user name field
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//condition to be checked for user name field 
		if(empty($_POST["userName"])){
			$userNameErr = "*User Name Is Required";
		}
		else{
			$userName = test_input($_POST["userName"]);
		}
				
		//condition to be checked for password field 
		if(empty($_POST["password"])){
			$passwordErr = "*Password Is Required";
		}
		else{
			$password = test_input($_POST["password"]);
		}
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}	
?>