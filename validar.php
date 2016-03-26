<?php

	$nick	= 	$_POST['nick'];
	$pass	=	$_POST['pass'];
	
	
	$conn = mysql_connect("localhost","drfree24db","222702qaaq");
			mysql_select_db("drwebs_",$conn);
			
			$ssql = "SELECT * FROM casilleros WHERE nick='$nick' and pass='$pass'";
			$rs = mysql_query($ssql,$conn);
			
			
			
			if (mysql_num_rows($rs)==1)
			{
				session_start();		
 
				$_SESSION["login"] = $nick;
				
				header("location:midrfree24.php");
				mysql_close($conn);
			}
			else
			{
				header("location:indexn.html");
				mysql_close($conn);
			} 
			
				
	

?>