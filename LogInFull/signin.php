 <?php
		 session_start();
   
            if(isset($_POST['submit']))
            {
				   $uname=$_POST['uname'];
	               $pass=$_POST['pass'];
		       if($uname== $_SESSION['uname'] && $pass==$_SESSION['pass'] )
			   {
				    header("location: home.php");	
			   }
			   else
			   {
				  
				   echo "invalid Username and Password.";
				   echo "registration first..";				  
			   }			   
		        
            } else{
		        header("location:index.php");
	          }

?>