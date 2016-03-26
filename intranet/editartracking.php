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
						
							$id = $_POST['cargarguias'];
							
							?>
								
								
								<div id="MarcoGlobal">
								
									<div id="Marcohead"></div><!--Fin de marco head-->
									<div id="MarcoMenu"> /
									<a href="control.php">Volver a buscador</a> / <a href="destruir.php">Cerrar Admin Center</a> /
										
									
								</div>
									<!--Fin de marco menu-->
								   
								 <div id="Marcocontenedor">
								 <br /><br />
					 
					
								<b> Editar Guias</b>
								<br /><br />
								
								
					<?php
					
						include ("inc/trackingbd.php");	
					
					
								$consulta = "SELECT * FROM guias WHERE user ='$id';";
								$hacerconsulta=mysql_query ($consulta,$conexion);
								
								echo "<table border='3' bordercolor='#FF0000' align='center'>";
								echo "<tr>";
								echo "<td align='center'><b>N° Guia</b></td>";
								echo "<td align='center'><b>User</b></td>";
								echo "<td align='center'><b>Tracking Number</b></td>";
								echo "<td align='center'><b>Direccion de Envio</b></td>";
								echo "<td align='center'><b>Libras</b></td>";
								echo "<td align='center'><b>Volumen</b></td>";
								echo "<td align='center'><b>Costo de Envio</b></td>";
								
				
				
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

				
				
								$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
								echo "</tr>";
								}
								echo "</table>";
								mysql_close($conexion);
									?> 
                                    
                                    
                                    <br /><br />
                                    
                                 <form method="post" action="editarsavetracking.php">
                                	Introduzca el N° de Guia que desea Editar<br /><br />
                                    <table width="200" border="0" align="center">
                                      <tr>
                                        <td align="center">N° Guia:</td>
                                        <td><label for="ideditar"></label>
                                        <input name="ideditar" type="text" id="ideditar" size="4" />
                                        </td>
                                        <td>
                                        <input type="submit" name="editarid" value="Editar" /></td>
                                      </tr>
                                    </table>
								   </form> 
                                   <br /><br />   

   


	
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