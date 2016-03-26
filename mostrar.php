<?php


	$nick = $_SESSION["login"];
	


	 $conn = mysql_connect("localhost","drfree24db","222702qaaq");
			mysql_select_db("drwebs_",$conn);
			
	
	$ssql = mysql_query("SELECT * FROM casilleros WHERE nick='$nick'");
	
	
	
	$cas	 	=  mysql_result($ssql,0,"id");
	$nick 		=  mysql_result($ssql,0,"nick");
	$nombres 	=  mysql_result($ssql,0,"nombres");
	$apellidos 	=  mysql_result($ssql,0,"apellidos");
	$ci 		=  mysql_result($ssql,0,"ci");
	$email 		=  mysql_result($ssql,0,"email");
	$pais 		=  mysql_result($ssql,0,"pais");
	$estado 	=  mysql_result($ssql,0,"estado");
	$ciudad 	=  mysql_result($ssql,0,"ciudad");
	$telefono 	=  mysql_result($ssql,0,"telefono");
	$celular 	=  mysql_result($ssql,0,"celular");
	$dir 		=  mysql_result($ssql,0,"dir");
	

	mysql_close($conn);

?>