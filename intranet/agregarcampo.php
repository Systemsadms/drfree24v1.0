<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php


 
			$base="drwebs_";
			$tabla="guias";			
			$anadir="ALTER TABLE ";
			$anadir.=$tabla;
			$anadir.=" ADD dimensiones VARCHAR(100) ";
			
			$conexion=mysql_connect ("localhost","drfree24db","222702qaaq");
			mysql_select_db ($base, $conexion);
			
			if(mysql_query ($anadir ,$conexion)) {
			echo "<h2> A la tabla $tabla se le ha añadido un campo</h2><br>";
			}else{
			echo "<h2> No ha podido añadir</h2><br>";
			};
			
			mysql_close($conexion);
?>


	
	
?>


</body>
</html>