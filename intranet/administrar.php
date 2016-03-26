<?php
	
		

			$user = $_POST['user'];
			$pass = $_POST['password'];
		
			

		if ($user == 'drfree24' && $pass == 'drfree242013')
			{
				session_start();
			
			$_SESSION['admin'] = $user ;
				
				header("location:control.php");
			}
		else
			{
				
				header("location:indexn.html");	
			}	
	
?>