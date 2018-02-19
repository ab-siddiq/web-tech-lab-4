<?php
   
   $setUsername="admin";
   $setPassword="admin";
   $setRePassword="admin";
   $setEmail="admin@gmail.com";
   $setPhone="0123456789";
   $setFullname="wahiduzzaman";
   
   if(isset($_POST['submit']))
   {
	   $uname=$_POST['uname'];
	   $pass=$_POST['pass'];
	   $rpass=$_POST['rpass'];
	   $email=$_POST['email'];
	   $phone=$_POST['phone'];
	   $fname=$_POST['fname'];
	   if($uname==$setUsername && $setPassword==$pass && $setRePassword==$rpass && $setEmail==$email && $setPhone==$phone && $setFullname==$fname )
	   {
		    session_start();
		     $_SESSION['uname']=$uname;
			 $_SESSION['pass']=$pass;
			 $_SESSION['rpass']=$rpass;
			 $_SESSION['email']=$email;
			 $_SESSION['phone']=$phone;
			 $_SESSION['fname']=$fname;
		      header("location:index.php");
		   
	   }	  
	   
   } else{
	   echo "fill up first";
		  header("location:register.php");
	  }

?>