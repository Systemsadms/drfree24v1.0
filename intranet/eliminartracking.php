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
						
							$user = $_POST['casillerotra'];
							
							?>
								
								
								<div id="MarcoGlobal">
								
									<div id="Marcohead"></div><!--Fin de marco head-->
									<div id="MarcoMenu"> /
									<a href="control.php">Volver a buscador</a> / <a href="destruir.php">Cerrar Admin Center</a> /
										
									
								</div>
									<!--Fin de marco menu-->
								   
								 <div id="Marcocontenedor">
								 <br /><br />
					 
					
								<b> Eliminar Tracking</b>
								<br /><br />
								
								
					<?php
					
						include ("inc/trackingbd.php");	
					
					
								$consulta = "SELECT * FROM guias WHERE user ='$user';";
								$hacerconsulta=mysql_query ($consulta,$conexion);
								
								echo "<table border='3' bordercolor='#FF0000' align='center'>";
								echo "<tr>";
								echo "<td align='center'><b>Guia</b></td>";
								echo "<td align='center'><b>user</b></td>";
								echo "<td align='center'><b>Tracking</b></td>";
								echo "<td align='center'><b>Direccion de envio</b></td>";
								echo "<td align='center'><b>Libras</b></td>";
								echo "<td align='center'><b>Volumen</b></td>";
								echo "<td align='center'><b>Costo</b></td>";
								echo "<td align='center'><b>Descripcion</b></td>";
								
				
				
								echo "</tr>";
								
								
								$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
								
								while ($reg)
								{
								echo "<tr>";	
								echo "<td align='center'>".$reg[0]."</td>";
								echo "<td align='center'>".$reg[1]."</td>";
								echo "<td align='center'>".$reg[2]."</td>";
								echo "<td align='center'>".$reg[3]."</td>";
								echo "<td align='center'>".$reg[4]."</td>";
								echo "<td align='center'>".$reg[5]."</td>";
								echo "<td align='center'>".$reg[6]."</td>";
								echo "<td align='center'>".$reg[7]."</td>";
								

				
				
								$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
								echo "</tr>";
								}
								echo "</table>";
								mysql_close($conexion);
									?> 
                                    
                                    
                                    <br /><br />
                                    
                                 <form method="post" action="#">
               	               Introduzca el ID del Tracking que desea Eliminar<br /><br />
                                    <table width="200" border="0" align="center">
                                      <tr>
                                        <td align="center">ID Tracking:</td>
                                        <td><label for="ideditar"></label>
                                        <input type="text" name="ideditar" id="ideditar" /></td>
                                        <input type="hidden" value="<?php echo $id;?>" name="casillerotra"/>
                                        <td><input type="submit" name="eliminarid" value="Eliminar" /></td>
                                      </tr>
                                    </table>
								   </form> 
                                   <br /><br />   

   
						<?php
						
						 if (isset($_POST['eliminarid']))
						 {
							 $guia = $_POST['ideditar'];
							 
							echo "Esta seguro que desea eliminar La Guia N°" . $guia;
							?>
                            
                            	<form method="POST" action="eliminarsavetracking.php">
                                	<table width="122" border="0" align="center">
                                          <tr>
                                            <td width="73" align="center">
                                            <input type="submit" name="si" value="Si">
                                            <input type="hidden" name="eliminarid" value="<?php echo $guia; ?>">
                                            </td>
                                            <td width="79" align="center"><input type="submit" name="no" value="No"></td>
                                      </tr>
                                  </table>
                                </form> 
                            	                            
                            <?php
						 }
																		
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