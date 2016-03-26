<?php
	if ($_POST['user'] == "")
	{
	header("Location:midrfree24.php");	
	}
	else
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/drfree24.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Drfree24</title>
<!-- InstanceEndEditable -->
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="ajx/ajxmenu.css" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
</head>

<body>

<div id="MarcoGlobal">
	<div id="Marcobusqueda">
    
    <table width="980" border="0">
  <tr>
  <form>
  	<td width="69">&nbsp;</td>
    <td width="247">&nbsp;</td>
    <td width="118"><div id="tipodeletraserch"><strong><a href="midrfree24.php">Mi DrFree24</a></strong></div></td>
    <td width="87"><div id="tipodeletraserch"><strong><a href="http://sistema.sfdservices.com/clientes/sfd/registrarusuario.asp">Tracking</a></strong></div></td>
    <td width="138"><div id="tipodeletraserch"><strong><a href="intranet/index.html">Intranet</a></strong></div></td>
    <td width="39">Search:</td>
    <td width="150"><label for="Serch"></label>
      <input type="text" name="Serch" id="Serch" /></td>
    <td width="54"><input type="submit" name="button" id="button" value="Buscar" /></td>
    <td width="20">&nbsp;</td>
    </form>
  </tr>
</table>

    </div><!--DIN DE MENU DE BUSQUEDA-->
	<div id="Marcomenu">
    <div class="AJXMenuQAcHDSC"><!-- AJXFILE:ajx/ajxmenu.css -->
 <div class="ajxmw1">
  <div class="ajxmw2">
<ul>
<li><a href="index.php"><b>Inicio</b></a></li>
  <li><a href="misionvision.html"><b>¿Quienes Somos?</b></a></li>
 <li><a href="servicios.html"><b>Servicios</b></a></li>
 <li><a href="comprasusa.html"><b>Comprar en USA</b></a></li>  
   <li><a href="giftcard.html"><b>Gift Cards</b></a></li>
  <li><a href="galeria.php"><b>Galerias</b></a></li>
   <li><a href="precios.html"><b>Precios</b></a></li>
 <li><a href="contactanos.html"><b>Contacto</b></a></li>
</ul>
  </div>
 </div>
 <br />
</div>
    </div><!--Fin de MARCO  MENU --><!-- InstanceBeginEditable name="EditRegion1" -->
<div id="Marcobanner">
  <table width="326" border="0" align="center">
    <tr>
      <td width="273" align="center"><strong>Formulario de recolecta de mercancia</strong></td>
    </tr>
  </table>
</div><!--Fin de MARCO  BANNER -->
<div id="Marcobanner"><br /><br />

<form action="#" method="post">
<table width="538" border="0" align="center">
  <tr>
    <td align="center">
      Fecha de la compra</td>
    </tr>
  <tr>
    <td align="center"><label for="fecha"></label>
      <span id="sprytextfield1">
      <label for="fecha2"></label>
      <input type="text" name="fecha" id="fecha2" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
  <tr>
    <td align="center">Nombre del courier que traslada su compra a nuestro almacén</td>
    </tr>
  <tr>
    <td align="center"><span id="sprytextfield2">
      <label for="currier"></label>
      <input type="text" name="currier" id="currier" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
  <tr>
    <td align="center">Numero tracking  suministrado por el courier.</td>
    </tr>
  <tr>
    <td align="center"><span id="sprytextfield3">
      <label for="tracking"></label>
      <input type="text" name="tracking" id="tracking" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
  <tr>
    <td align="center">Descripción de la compra</td>
    </tr>
  <tr>
    <td align="center"><span id="sprytextfield4">
      <input name="compra" type="text" id="compra" size="50" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
  <tr>
    <td align="center">Origen de la compra (pegar el link que sale en la barra de su navegador)</td>
    </tr>
  <tr>
    <td align="center"><span id="sprytextfield5">
      <input name="link" type="text" id="link" size="50" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
  <tr>
    <td align="center">
    
    <input type="hidden" name="user" value="<?php echo $_POST['user'];?>" />
    </td>
  </tr>

  </table> 

<br />
<table width="200" border="0" align="center">
  <tr>
    <td align="center"><input type="submit" name="enviarformulario" value="Enviar Datos de Compra"></td>
  </tr>
</table>
</form>
<br /><br />

<?php



 if(isset($_POST['enviarformulario']))
			{
				
			
					$body='Se ha reportado una nueva orden de recolecta de mercancia
								</br>
								Fecha:				'.$_POST['fecha'].'
								</br>
								Currier: 			'.$_POST['currier'].'
								</br>
								Nmro Tracking: 		'.$_POST['tracking'].'
								</br>
								Descripcion: 		'.$_POST['compra'].'
								</br>
								Link de Compra: 	'.$_POST['link'].'
								</br>
								Cuenta DrFree24:	'.$_POST['user'].'


								
								';
				
				$para = 'dr.free24@gmail.com';
				$asunto = 'Se ha reportado una nueva orden de recolecta de mercancia';
				$desde = 'drfree24.com';
				$mensaje = $body;
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: www.drfree24.com \r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
			echo "Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas";
				
			}
			else
			{
				echo "  <b>No se ha enviado nada aun</b>";
				
			}






/*
	if(isset($_POST['enviarformulario']))
	{
		
		$body='Se ha reportado una nueva orden de recolecta de mercancia
			
								Fecha:				'.$_POST['fecha'].'
								Currier: 			'.$_POST['currier'].'
								N° Tracking: 		'.$_POST['tracking'].'
								Descripcion: 		'.$_POST['compra'].'
								Link de Compra: 	'.$_POST['link'].'
								Cuenta DrFree24:	'.$_POST['nombre'].'


								
								';
								
											$para="systemsadms@hotmail.com";
			
	
			
											$desde = $_POST["nombre"];
											$mensaje = $body;
										
					
											$asunto 	= "Nueva Orden de recolecta de mercancia";
											$desde		= $_POST["nick"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
											$cabeceras = "From: " . $_POST ["correo"] . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);   					
			
			
				
		
		
*/		
?>


<table width="710" border="0" align="center">
  <tr>
    <td align="center">..</td>
  </tr>
</table>
<br /><br />

<?php
	
?>

</div><!--Fin de MARCO  CONTENIDO 1-->
   
    
    
    
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
    </script>
    
    
    <?php
	}
	?>
    <!-- InstanceEndEditable -->
    <div id="marcoredsocial">
    
    <table width="200" height="60" border="0" align="right">
  <tr>
    <td><a href="#"><img src="img/face.png" width="44" height="39" style="opacity:0.4;filter:alpha(opacity=40)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40"/></a></td>
    <td><a href="#"><img src="img/twit.png" width="40" height="40" style="opacity:0.4;filter:alpha(opacity=40)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40"/></a></td>
    <td><a href="#"><img src="img/play.png" width="40" height="41" style="opacity:0.4;filter:alpha(opacity=40)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40"/></a></td>
    <td><a href="#"><img src="img/v.png" width="42" height="40"style="opacity:0.4;filter:alpha(opacity=40)"
onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
onmouseout="this.style.opacity=0.4;this.filters.alpha.opacity=40" /></a></td>
  </tr>
  </table>
</div>
    <!--Fin de MARCO  RED SOCIAL-->
    
  <div id="marcodireccion">Dr.free24 Transporte Importador C.A<br />
Derechos Reservados DrFree24 C.A | RIF J-30943606-6
  //<a href="politicas.html">Politicas Generales</a><br />
Desing By: <a href="http://www.systemsadms.com">Systems Admins C.A</a></div><!--Fin de MARCO  DIRECCION-->
    


</div><!--Fin de MARCO Global -->



</body>
<!-- InstanceEnd --></html>
