<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style/estilo.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
session_start();			
if ($_SESSION['admin'] == 'drfree24')
	
{
	if (isset($_POST["guardar"]))
	{
		echo "sus cambios se han guardado con exito";
	}
	else
	
	{
	$id = $_POST['id'];
	
	$conn = mysql_connect("localhost","drfree24db","222702qaaq");
			mysql_select_db("drwebs_",$conn);
	$ssql = mysql_query("SELECT * FROM casilleros WHERE id='$id'");

	$cas	 	=  mysql_result($ssql,0,"id");
	$nick 		=  mysql_result($ssql,0,"nick");
	$pass	 	=  mysql_result($ssql,0,"pass");
	$nombres 	=  mysql_result($ssql,0,"nombres");
	$apellidos 	=  mysql_result($ssql,0,"apellidos");
	//$ci 		=  mysql_result($ssql,0,"ci");
	$email 		=  mysql_result($ssql,0,"email");
	$pais 		=  mysql_result($ssql,0,"pais");
	$estado 	=  mysql_result($ssql,0,"estado");
	$ciudad 	=  mysql_result($ssql,0,"ciudad");
	$telefono 	=  mysql_result($ssql,0,"telefono");
	$celular 	=  mysql_result($ssql,0,"celular");
	$dir 		=  mysql_result($ssql,0,"dir");
	
	mysql_close($conn);	
	
?>


<div id="MarcoGlobal">

	<div id="Marcohead"></div><!--Fin de marco head-->
    <div id="MarcoMenu"> /
    <a href="control.php">Volver a buscador</a> / <a href="destruir.php">Cerrar Admin Center</a> /
		
	
</div>
    <!--Fin de marco menu-->
   
 <div id="Marcocontenedor">
 <br /><br />
 

			<b> Editar Datos de Casillero</b>
            <br /><br />

 
			
			
			<form method="post" action="editarsave.php">
            
			<table width="200" border="0" align="center">
                  
                      <tr>
                        <td width="82" align="left"><b>Cas:</b></td>
                        <td width="102" align="left"><span id="sprytextfield1">
                        <label for="cas"></label>
                          <input name="cas" type="text" id="cas" value="<?php echo $id ?>" readonly="readonly" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Nick:</b></td>
                        <td align="left"><span id="sprytextfield2">
                          <label for="nick"></label>
                          <input name="nick" type="text" id="nick" value="<?php echo $nick ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                      <tr>
                        <td align="left"><b>Clave:</b></td>
                        <td align="left"><span id="sprytextfield3">
                          <label for="pass"></label>
                          <input name="pass" type="text" id="pass" value="<?php echo $pass ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                        <td align="left"><b>Nombres:</b></td>
                        <td align="left"><span id="sprytextfield4">
                          <label for="nombres"></label>
                          <input name="nombres" type="text" id="nombres" value="<?php echo $nombres ?>" />
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Apellidos:</b></td>
                        <td align="left"><span id="sprytextfield5">
                        <label for="apellidos"></label>
                          <input name="apellidos" type="text" id="apellidos" value="<?php echo $apellidos ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                      
                        <td align="left"><b>Cedula:</b></td>
                        <td align="left"><span id="sprytextfield6">
                          <label for="ci"></label>
                          <input name="ci" type="text" id="ci" value="<?php echo $ci ?>" />
</span></td>
                       
                      </tr>
                      <tr>
                        <td align="left"><b>E-mail:</b></td>
                        <td align="left"><span id="sprytextfield7">
                          <label for="email"></label>
                          <input name="email" type="text" id="email" value="<?php echo $email ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Pais:</b></td>
                        <td align="left"><span id="sprytextfield8">
                          <label for="pais"></label>
                          <input name="pais" type="text" id="pais" value="<?php echo $pais ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Estado:</b></td>
                        <td align="left"><span id="sprytextfield9">
                          <label for="estado"></label>
                          <input name="estado" type="text" id="estado" value="<?php echo $estado ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Ciudad:</b></td>
                        <td align="left"><span id="sprytextfield10">
                          <label for="ciudad"></label>
                          <input name="ciudad" type="text" id="ciudad" value="<?php echo $ciudad ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Telfono:</b></td>
                        <td align="left"><span id="sprytextfield11">
                          <label for="telefono"></label>
                          <input name="telefono" type="text" id="telefono" value="<?php echo $telefono ?>" />
</span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Celular:</b></td>
                        <td align="left"><span id="sprytextfield12">
                          <label for="celular"></label>
                          <input name="celular" type="text" id="celular" value="<?php echo $celular ?>" />
</span></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Direccion:</b></td>
                        <td align="left"><span id="sprytextfield13">
                          <label for="dir"></label>
                          <input name="dir" type="text" id="dir" value="<?php echo $dir ?>" />
                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                    </table>
			<br />
			<table width="200" border="0" align="center">
			  <tr>
			    <td><input type="submit" value="Guardar Cambios" name="guardar"/></td>
			    <td><input type="reset" value="Deshacer Cambios" /></td>
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

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {isRequired:false});
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "none", {isRequired:false});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13");
</script>
</body>
</html>