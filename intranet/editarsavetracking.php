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
								 if(isset ($_POST["editarid"]))
									{
										
										
										$id 	= $_POST["ideditar"];
										
						
						
										 $conn = mysql_connect("localhost","drfree24db","222702qaaq");
												mysql_select_db("drwebs_",$conn);
												
										
										$ssql = mysql_query("SELECT * FROM guias WHERE guia='$id'");
										
										
										if (mysql_num_rows($ssql)==1)
										{
										$guia 		=  mysql_result($ssql,0,"guia");
										$user		=  mysql_result($ssql,0,"user");
										$tracking 	=  mysql_result($ssql,0,"tracking");
										$direccion 	=  mysql_result($ssql,0,"direccion");
										$libras	 	=  mysql_result($ssql,0,"libras");
										$volumen 	=  mysql_result($ssql,0,"volumen");
										$costo	 	=  mysql_result($ssql,0,"costo");
										$des	 	=  mysql_result($ssql,0,"des");
										mysql_close($conn);
																
										
										}
										
								 }
								
                                 
                             ?>    
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
					 
					
								<b> Realice los Cambios del tracking Seleccionado</b>
								<br /><br />
								
<form action="#" method="POST" enctype="multipart/form-data">
      <table width="337" border="0" align="center">
  <tr>
    <td width="96">Guia N°</td>
    <td width="229"><label for="guia"></label>
      <input name="guia" type="text" id="guia" value="<?php echo $guia;?>" readonly="readonly" />      <label for="user"></label></td>
  </tr>
  <tr>
    <td>User ID:</td>
    <td><label for="tracking">
      <input type="text" name="user" id="user" value="<?php echo $user;?>"/>
    </label></td>
  </tr>
  <tr>
    <td>N° Tracking:</td>
    <td><label for="direccion">
      <input name="tracking" type="text" id="tracking" value="<?php echo $tracking;?>" />
    </label></td>
  </tr>
  <tr>
    <td>Direccion de Envio:</td>
    <td><label for="des">
      <input name="direccion" type="text" id="direccion" value="<?php echo $direccion;?>" />
    </label></td>
  </tr>
  <tr>
  <tr>
    <td>Libras:</td>
    <td><label for="des">
      <input name="libras" type="text" id="libras" value="<?php echo $libras;?>" />
    </label></td>
  </tr>
  <tr>
  <tr>
    <td>Volumen:</td>
    <td><label for="des">
      <input name="volumen" type="text" id="volumen" value="<?php echo $volumen;?>" />
    </label></td>
  </tr>
  <tr>
    <td>Costo de envio:</td>
    <td><label for="des">
      <input name="costo" type="text" id="costo" value="<?php echo $costo;?>" />
    </label></td>
  </tr>
  <tr>
  <tr>
    <td>Descripcion:</td>
    <td><textarea name="des" id="des" cols="35" rows="5"><?php echo $des;?></textarea></td>
  </tr>
  <tr>
    <td>Cambiar Foto</td>
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="hidden" value="<?php echo $id;?>" name="editarid"/></td>
  </tr>
  <tr>
    <td><input type="hidden" value="<?php echo $guia;?>" name="ideditar"/></td>
    <td><table width="200" border="0">
      <tr>
        <td align="center"><input type="submit" name="editarguia" value="Modificar"/></td>
        <td align="center"><input  type="reset" value="Deshacer"/></td>
      </tr>
    </table></td>
  </tr>
                                </table>
<br /><br />
								
</form>







<?php

if(isset($_POST['editarguia'])){ 


if ($_FILES['foto']['name'] != "")
{
####
## Funcin para redimencionar las imgenes
## utilizando las liberas de GD de PHP
####
 
function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension){
$rutaImagenOriginal = $ruta.$nombre;
if($extension == 'GIF' || $extension == 'gif'){
$img_original = imagecreatefromgif($rutaImagenOriginal);
}
if($extension == 'jpg' || $extension == 'JPG'){
$img_original = imagecreatefromjpeg($rutaImagenOriginal);
}
if($extension == 'png' || $extension == 'PNG'){
$img_original = imagecreatefrompng($rutaImagenOriginal);
}
$max_ancho = $ancho;
$max_alto = $alto;
list($ancho,$alto)=getimagesize($rutaImagenOriginal);
$x_ratio = $max_ancho / $ancho;
$y_ratio = $max_alto / $alto;
if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
$ancho_final = $ancho;
$alto_final = $alto;
} elseif (($x_ratio * $alto) < $max_alto){
$alto_final = ceil($x_ratio * $alto);
$ancho_final = $max_ancho;
} else{
$ancho_final = ceil($y_ratio * $ancho);
$alto_final = $max_alto;
}
$tmp=imagecreatetruecolor($ancho_final,$alto_final);
imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
imagedestroy($img_original);
$calidad=70;
imagejpeg($tmp,$ruta.$nombreN,$calidad);
}

	$largo=2;
		$str = "abcdefghijklmnopqrstuvwxyz";
		$may = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$num = "1234567890";
		$cad = "";
		# Comienzo de la generacion de clave.
		$cad = substr($may ,rand(0,24),1);
		$cad .= substr($num ,rand(0,10),1);
		$cad .= substr($num ,rand(0,10),1);
		for($i=0; $i<$largo; $i++) {
		$cad .= substr($str,rand(0,24),1);
		}
		;





// comprobamos que se ha enviado el formulario
// comprobar que han seleccionado una foto
if($_FILES['foto']['name'] != ""){ // El campo foto contiene una imagen...
// Primero, hay que validar que se trata de un JPG/GIF/PNG
$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
$extension = end(explode(".", $_FILES["foto"]["name"]));
if ((($_FILES["foto"]["type"] == "image/gif")
|| ($_FILES["foto"]["type"] == "image/jpeg")
|| ($_FILES["foto"]["type"] == "image/png")
|| ($_FILES["foto"]["type"] == "image/pjpeg"))
&& in_array($extension, $allowedExts)) {
// el archivo es un JPG/GIF/PNG, entonces...
$extension = end(explode('.', $_FILES['foto']['name']));
$foto = $cad . ".".$extension;
$directorio = "img"; // directorio de tu eleccin
// almacenar imagen en el servidor
move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
$minFoto = 'guia_'.$foto;
$resFoto = 'res_'.$foto;
resizeImagen($directorio.'/', $foto, 800, 600,$minFoto,$extension);
//resizeImagen($directorio.'/', $foto, 500, 500,$resFoto,$extension);
unlink($directorio.'/'.$foto);

echo "Se ha cargado un nuevo tracking";
} else { // El archivo no es JPG/GIF/PNG
$malformato = $_FILES["foto"]["type"];
echo "El tipo de archivo no es una imagen valida";
//header("Location: index.php");
exit;
}
} else { // El campo foto NO contiene una imagen
		
		echo "Se ha cargado un nuevo tracking sin imagen ";
//echo "No contiene ninguna imagen";

//header("Location: index.php");
//exit;
}
} // fin del submit

}
?>































									<?php
                                 if (isset($_POST['editarguia']))
								 {
									$guia 		= $_POST['guia'];
									$user 		= $_POST['user'];
									$tracking	= $_POST['tracking'];
									$direccion	= $_POST['direccion'];
									$libras 	= $_POST['libras'];
									$volumen 	= $_POST['volumen'];
									$costo	 	= $_POST['costo'];
									$des	 	= $_POST['des'];


if ($_FILES['foto']['name'] != "")
{

									
									
									$conn = mysql_connect("localhost","drfree24db","222702qaaq");
									mysql_select_db("drwebs_",$conn);
									
							
						
									
									$consulta = "UPDATE guias SET 
									user ='$user', tracking ='$tracking', direccion ='$direccion', libras='$libras', volumen='$volumen', costo='$costo', des='$des',foto='$cad' WHERE guia = $guia " ;
							
									$hacerconsulta = mysql_query ($consulta);
							
								
									mysql_close ($conn);	
									
									echo "Sus Cambios fueron realizados";
									

	}
	else
	{
		
			$conn = mysql_connect("localhost","drfree24db","222702qaaq");
									mysql_select_db("drwebs_",$conn);
									
							
						
									
									$consulta = "UPDATE guias SET 
									user ='$user', tracking ='$tracking', direccion ='$direccion', libras='$libras', volumen='$volumen', costo='$costo', des='$des' WHERE guia = $guia " ;
							
									$hacerconsulta = mysql_query ($consulta);
							
								
									mysql_close ($conn);	
									
									echo "Sus Cambios fueron realizados";
	}// fin del if foto								
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