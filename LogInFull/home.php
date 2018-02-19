<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


 <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
	   <title>home</title>
	</head>
	<body>
	<h1 align="center">Home</h1>
	<hr/>
	<form method="get" action="logout.php">
       <button type="submit">Logout</button>    
    </form>
 <?php	
       session_start(); 
	   echo "Welcome ".$_SESSION['fname']; 
?>	
	<hr/>
	<a href="userinfo.php" target="_blank">User Info</a><br/>
	<a href="userlogin.php" target="_blank">User Login Info</a>
	</body>
</html>