<?php
if(isset($_POST['submit'])){
	$exp = time()+30*24*60*60; //time when cookie will expire
	/* set cookie values for registration form */
	setcookie("username", $_POST['userName'], $exp);
	setcookie("pass", $_POST['password'], $exp);
	setcookie("repass", $_POST['rePassword'], $exp);
	setcookie("mail", $_POST['email'], $exp);
	setcookie("phn", $_POST['phone'], $exp);
	setcookie("fName", $_POST['fullName'], $exp);
}
?>