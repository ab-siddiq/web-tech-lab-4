<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

 <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
	   <title>sign up</title>
	</head>
	<body>
	<h1 align="center">Register</h1>
	<hr/>
	 <form action="validate.php" method="post">
	   <table align="center">
	      <tr>
		      <td>Username:</td>
			  <td><input type="text" name="uname"></td>
		  </tr>
		   <tr>
		      <td>Password:</td>
			  <td><input type="password" name="pass"></td>
		  </tr>
		  <tr>
		      <td>Re-Password:</td>
			  <td><input type="password" name="rpass"></td>
		  </tr>
		  <tr>
		      <td>Email:</td>
			  <td><input type="text" name="email"></td>
		  </tr>
		  <tr>
		      <td>Phone:</td>
			  <td><input type="text" name="phone"></td>
		  </tr>
		  <tr>
		      <td>Full Name:</td>
			  <td><input type="text" name="fname"></td>
		  </tr>
		  <tr>
		      <td></td>
			  <td><input type="submit" name="submit"></td>
			  <td><input type="reset" name="reset"></td>		  
		  </tr>	
	   </table>
	 </form>
	     <?php
	    if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$nam=$_POST['uname'];
			if(empty($nam))
			{
				echo "<span style='color:red'>Fill UP</span>";
			}
			else
			{
				echo "Well come ".$nam.".";
			}
		}
	 ?>
	 
   </body>
</html>