<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style/estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="ajaxtix/ajxlightbox.css" type="text/css" />
<script src="ajaxtix/ajxlightbox.js" type="text/javascript"></script>
</head>
<body>
<?php
session_start();
if ($_SESSION['admin'] == 'drfree24')
{
include ("inc/usarBD.php");
?>


<div id="MarcoGlobal">

	<div><br /><br /><br /></div><!--Fin de marco head-->
    <div id="MarcoMenu"><a href="#">Inicio</a> / <a href="galeria.php">Galeria</a> / <a href="destruir.php">Cerrar Admin Center</a> / 
		
	
</div>
    <!--Fin de marco menu-->
   
 <div id="Marcocontenedor">
 <br /><br /><br />
 
 
 
 <table width="900" border="0" align="center">
  <tr>
    <td width="429" align="center"> <form method="POST" action="#">
 
 <table width="412" border="0" align="center">
  <tr>
    <td width="151"><b>Buscar Cliente Por:</b></td>
    <td width="73"><select name="filtro" id="filtro">
      <option>Nombre</option>
      <option>Apellido</option>
      <option>Email</option>
    </select></td>
    <td width="37"><b>Dato:</b></td>
    <td width="42"><label for="dato"></label>
      <input name="dato" type="text" id="dato" size="7" /></td>
    <td width="85"><input name="buscar" type="submit" id="dato" value="Ver Clientes"/></td>
  </tr>
</table>
</form></td>
    <td width="43">&nbsp;</td>
    <td width="412" align="center"><form method="POST" action="#">
 
 <table width="412" border="0" align="center">
  <tr>
    <td width="131"><b>Buscar Guias Por:</b></td>
    <td width="76"><select name="filtro2" id="filtro2">
      <option>Tracking</option>
      <option>User</option>
    </select></td>
    <td width="43" align="right"><b>Nº:</b></td>
    <td width="52"><label for="dato2"></label>
      <input name="dato2" type="text" id="dato2" size="7" /></td>
    <td width="86"><input name="guias" type="submit" id="dato" value="Ver Guias"/></td>
  </tr>
</table>
</form></td>
  </tr>
</table>

 <br />

 <form method="post" action="abrir.php"> 
    <table width="237" border="0" align="center">
  <tr>
    <td width="120"><b>Abrir User Nº</b></td>
    <td width="56"><label for="id"></label>
      <input name="id" type="text" id="id" size="3" width="35px"/></td>
    <td width="45"><input type="submit" name="abrir" id="cas" value="Abrir"/></td>
  </tr>
</table>
</form>
 <br />

 <!--  <form method="post" action="abrir.php"> 
    <table width="436" border="0" align="center">
  <tr>
    <td width="195"><b>Abrir Casillero Nº</b></td>
    <td width="144"><label for="cas"></label>
      <input type="text" name="cas" id="cas" width="35px"/></td>
    <td width="83"><input type="submit" name="abrir" id="cas" value="Abrir"/></td>
  </tr>
</table>
</form>  -->
<br /><br /><br />
<?php 

		if(isset ($_POST["buscar"]))
			{
				$filtro	= $_POST['filtro'];
				$dato	= $_POST['dato'];
				
				
				
				if ($_POST['dato']=="") 
				{
					
					
				$consulta = "SELECT * FROM casilleros;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>User</b></td>";
				echo "<td bgcolor='#CCCCCC' align='center'><b>Nick</b></td>";
				echo "<td align='center'><b>Nombres</b></td>";
				echo "<td align='center'><b>Apellidos</b></td>";
				echo "<td align='center'><b>password</b></td>";
				echo "<td align='center'><b>email</b></td>";
				echo "<td align='center'><b>pais</b></td>";
				echo "<td align='center'><b>estado</b></td>";
				echo "<td align='center'><b>ciudad</b></td>";
				echo "<td align='center'><b>BBPin</b></td>";
				echo "<td align='center'><b>telefono</b></td>";
				echo "<td align='center'><b>direccion</b></td>";


				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				
				echo "<td align='center'>".$reg[6]."</td>";
				echo "<td align='center'>".$reg[7]."</td>";
				echo "<td align='center'>".$reg[8]."</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				echo "<td align='center'>".$reg[10]."</td>";
				echo "<td align='center'>".$reg[11]."</td>";
				echo "<td align='center'>".$reg[12]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				
				
				
				
				//COMIENZO DE CONSULTA CON FILTRO
				
				
				
				
				}
				elseif ($_POST["filtro"]=="Nombre")
				{
									
					$like = $_POST['dato'];	
					$busqueda = $like;
 
				
				  $consulta = "SELECT * FROM casilleros WHERE nombres LIKE '%$busqueda%';";
				  $hacerconsulta=mysql_query ($consulta,$conexion);
				  //$hacerconsulta=mysql_query ($consulta,$conexion);
				
				
				
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>User</b></td>";
				echo "<td bgcolor='#CCCCCC' align='center'><b>Nick</b></td>";
				echo "<td align='center'><b>Nombres</b></td>";
				echo "<td align='center'><b>Apellidos</b></td>";
				echo "<td align='center'><b>password</b></td>";
				echo "<td align='center'><b>email</b></td>";
				echo "<td align='center'><b>pais</b></td>";
				echo "<td align='center'><b>estado</b></td>";
				echo "<td align='center'><b>ciudad</b></td>";
				echo "<td align='center'><b>BBPin</b></td>";
				echo "<td align='center'><b>telefono</b></td>";
				echo "<td align='center'><b>direccion</b></td>";


				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				
				echo "<td align='center'>".$reg[6]."</td>";
				echo "<td align='center'>".$reg[7]."</td>";
				echo "<td align='center'>".$reg[8]."</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				echo "<td align='center'>".$reg[10]."</td>";
				echo "<td align='center'>".$reg[11]."</td>";
				echo "<td align='center'>".$reg[12]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}
				
				
				
				
				
				elseif ($_POST["filtro"]=="Apellido")
				{
									
					$like = $_POST['dato'];	
					$busqueda = $like;
 
				
				  $consulta = "SELECT * FROM casilleros WHERE apellidos LIKE '%$busqueda%';";
				  $hacerconsulta=mysql_query ($consulta,$conexion);
				  //$hacerconsulta=mysql_query ($consulta,$conexion);
				
				
				
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>User</b></td>";
				echo "<td bgcolor='#CCCCCC' align='center'><b>Nick</b></td>";
				echo "<td align='center'><b>Nombres</b></td>";
				echo "<td align='center'><b>Apellidos</b></td>";
				echo "<td align='center'><b>password</b></td>";
				echo "<td align='center'><b>email</b></td>";
				echo "<td align='center'><b>pais</b></td>";
				echo "<td align='center'><b>estado</b></td>";
				echo "<td align='center'><b>ciudad</b></td>";
				echo "<td align='center'><b>BBPin</b></td>";
				echo "<td align='center'><b>telefono</b></td>";
				echo "<td align='center'><b>direccion</b></td>";


				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				
				echo "<td align='center'>".$reg[6]."</td>";
				echo "<td align='center'>".$reg[7]."</td>";
				echo "<td align='center'>".$reg[8]."</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				echo "<td align='center'>".$reg[10]."</td>";
				echo "<td align='center'>".$reg[11]."</td>";
				echo "<td align='center'>".$reg[12]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}
				
				
				
				elseif ($_POST["filtro"]=="Email")
				{
									
					$like = $_POST['dato'];	
					$busqueda = $like;
 
				
				  $consulta = "SELECT * FROM casilleros WHERE email LIKE '%$busqueda%';";
				  $hacerconsulta=mysql_query ($consulta,$conexion);
				  //$hacerconsulta=mysql_query ($consulta,$conexion);
				
				
				
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>User</b></td>";
				echo "<td bgcolor='#CCCCCC' align='center'><b>Nick</b></td>";
				echo "<td align='center'><b>Nombres</b></td>";
				echo "<td align='center'><b>Apellidos</b></td>";
				echo "<td align='center'><b>password</b></td>";
				echo "<td align='center'><b>email</b></td>";
				echo "<td align='center'><b>pais</b></td>";
				echo "<td align='center'><b>estado</b></td>";
				echo "<td align='center'><b>ciudad</b></td>";
				echo "<td align='center'><b>BBPin</b></td>";
				echo "<td align='center'><b>telefono</b></td>";
				echo "<td align='center'><b>direccion</b></td>";


				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				
				echo "<td align='center'>".$reg[6]."</td>";
				echo "<td align='center'>".$reg[7]."</td>";
				echo "<td align='center'>".$reg[8]."</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				echo "<td align='center'>".$reg[10]."</td>";
				echo "<td align='center'>".$reg[11]."</td>";
				echo "<td align='center'>".$reg[12]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}
				
			}
				
			 
				
				
				
				//FIN DE CONSULTA CON FILTRO 1
				
			
			if (isset ($_POST["guias"]))
			{
				$filtro	= $_POST['filtro'];
				$dato	= $_POST['dato'];
				
				if ($_POST['dato2']=="") 
				{
					
				$consulta = "SELECT * FROM guias;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>Guia</b></td>";
				echo "<td align='center'><b>User</b></td>";
				echo "<td align='center'><b>Tracking</b></td>";
				echo "<td align='center'><b>Direccion de Envio</b></td>";
				echo "<td align='center'><b>Libras</b></td>";
				echo "<td align='center'><b>Volumen</b></td>";
				echo "<td align='center'><b>Cosot de Envio</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";
				echo "<td align='center'><b>Foto</b></td>";
				echo "<td align='center'><b>Dimensiones</b></td>";



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
								echo "
				<td a valign='top'  align='center' width='140' >				
				<div class='AJXLightboxGVHQAXA'><a href='img/guia_".$reg[8].".jpg' rel='ajxlightbox'><img src='img/guia_".$reg[8].".jpg' width='25px' height='25px'/></a>
				</div>				
				</td>";
				echo "<td align='center'>".$reg[9]."</td>";

				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
			}


				elseif ($_POST["filtro2"]=="Tracking")
				{
									
					$like = $_POST['dato2'];	
					$busqueda = $like;
 
				
				  $consulta = "SELECT * FROM guias WHERE tracking LIKE '%$busqueda%';";
				  $hacerconsulta=mysql_query ($consulta,$conexion);
				  //$hacerconsulta=mysql_query ($consulta,$conexion);
				
				
				
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>Guia</b></td>";
				echo "<td align='center'><b>User</b></td>";
				echo "<td align='center'><b>Tracking</b></td>";
				echo "<td align='center'><b>Direccion de Envio</b></td>";
				echo "<td align='center'><b>Libras</b></td>";
				echo "<td align='center'><b>Volumen</b></td>";
				echo "<td align='center'><b>Cosot de Envio</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";
				echo "<td align='center'><b>Foto</b></td>";
				echo "<td align='center'><b>Dimensiones</b></td>";



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
				
				echo "<td a valign='top'  align='center' width='140' >
				
				<div class='AJXLightboxGVHQAXA'><a href='img/guia_".$reg[8].".jpg' rel='ajxlightbox'><img src='img/guia_".$reg[8].".jpg' width='25px' height='25px'/></a>
</div>
				
				</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}
				
				
				
				
				
				elseif ($_POST["filtro2"]=="User")
				{
									
					$like = $_POST['dato2'];	
					$busqueda = $like;
 
				
				  $consulta = "SELECT * FROM guias WHERE user LIKE '%$busqueda%';";
				  $hacerconsulta=mysql_query ($consulta,$conexion);
				  //$hacerconsulta=mysql_query ($consulta,$conexion);
				
				
				
				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>Guia</b></td>";
				echo "<td align='center'><b>User</b></td>";
				echo "<td align='center'><b>Tracking</b></td>";
				echo "<td align='center'><b>Direccion de Envio</b></td>";
				echo "<td align='center'><b>Libras</b></td>";
				echo "<td align='center'><b>Volumen</b></td>";
				echo "<td align='center'><b>Cosot de Envio</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";
				echo "<td align='center'><b>Foto</b></td>";
				echo "<td align='center'><b>Dimensiones</b></td>";



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
				echo "<td align='center'>".$reg[9]."</td>";
				echo "<td a valign='top'  align='center' width='140' >
				
				<div class='AJXLightboxGVHQAXA'><a href='img/guia_".$reg[8].".jpg' rel='ajxlightbox'><img src='img/guia_".$reg[8].".jpg' width='25px' height='25px'/></a>
</div>
				
				</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				}
				

				//FIN DE CONSULTA CON FILTRO 2
			
			}
			
			
 ?>
 
<br /><br />

   

 </div><!--Fin de marco contenedor-->






</div> <!--Fin de marco global-->



               
 







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