<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
session_start();			
if ($_SESSION['admin'] == 'drfree24')
	
	{
						
														
							?>
								
								
								<div id="MarcoGlobal">
								
									<div id="Marcohead"></div><!--Fin de marco head-->
									<div id="MarcoMenu"> /
									<a href="control.php">Volver a buscador</a> / <a href="destruir.php">Cerrar Admin Center</a> /
										
									
								</div>
									<!--Fin de marco menu-->
								   
								 <div id="Marcocontenedor">
								 <br /><br />
                                 
                                 
                                 <?php
								 	
									if(isset($_POST['si']))
									{
										$guia = $_POST['eliminarid'];
										include ("inc/trackingbd.php");	
										
										$consulta = "DELETE FROM guias WHERE guia ='$guia';";
										$hacerconsulta=mysql_query ($consulta,$conexion);
										mysql_close($conexion);
										
										
										echo "El Tracking fue eliminado con exito<br><br>";
										
										echo "<a href='control.php'>Volver a Buscador</a><br><br>";	
										
										
									}else
									
									echo "La guia no ha sido eliminada";
									
									
								 ?>
                              
								 
								
								 
                               
					

   

 </div><!--Fin de marco contenedor-->






</div><!--Fin de marco global-->



               
 







<?php			
}
else
{			
session_destroy();		
header("location:indexn.php");	
}
?>	
</body>
</html>