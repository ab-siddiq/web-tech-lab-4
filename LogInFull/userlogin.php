 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	   <title>ULinfo</title>
	</head>
	<body>
	<h1 align="center">User LoginInfo</h1>
	<hr/>
       <form method="get" action="logout.php">
       <button type="submit">Logout</button>    
       </form>
	 <form method="get" action="home.php">
       <button type="submit">Home</button>
    </form>
	  <table align="center" border="2Px" width="400PX"> 
		 
		 <tr>
		    <th>SL</th>
			<th>UserName</th>
			<th>Password</th>
		 </tr>
		 
		 <tr align="center">
		    <td>1</td>
			<td><?php session_start(); $uname=$_SESSION['uname']; echo "$uname"; ?></td>
			<td><?php $pass=$_SESSION['pass']; echo "$pass"; ?></td>
			
		 </tr>
		 
		 <tr align="center">
		    <td>2</td>
			<td></td>
			<td></td>
			
		 </tr>
		 <tr align="center">
		    <td>3</td>
			<td></td>
			<td></td>
			
		 </tr>
	  </table>
	</body>
</html>