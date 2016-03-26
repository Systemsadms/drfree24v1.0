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
<div id="Marcobanner"><br /><br />
  <table width="681" border="0" align="center">
    <tr>
    
      <td align="center"><strong>Reporta el pago de tu Gift Card o Envios realizados</strong></td>
    </tr>
  </table>
</div><!--Fin de MARCO  BANNER -->
<div id="Marcobanner">

<br /><br />


			<form method="post" action="#">

            <table width="300" border="0" align="center">
              <tr>
                <td width="140">N° de Deposito<br />o Transferencia</td>
                <td width="144"><span id="sprytextfield1">
                  <label for="numero"></label>
                  <input type="text" name="numero" id="numero" />
                <span class="textfieldRequiredMsg">Campo Requerido.</span></span></td>
              </tr>
              <tr>
                <td>Banco Emisor:</td>
                <td><label for="banco"></label>
                  <select name="banco" id="banco">
                    <option selected="selected">Mercantil</option>
                    <option>Banesco</option>
                    <option>Venezuela</option>
                    <option>Provincial</option>
                </select></td>
              </tr>
              <tr>
                <td>Fecha:</td>
                <td><span id="sprytextfield2">
                  <label for="fecha"></label>
                  <input type="text" name="fecha" id="fecha" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td>Nombre del depositante:</td>
                <td><span id="sprytextfield3">
                  <input type="text" name="nombredep" id="nombredep" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td>Tu nombre:</td>
                <td><span id="sprytextfield4">
                  <label for="nombre"></label>
                  <input type="text" name="nombre" id="nombre" />
                <span class="textfieldRequiredMsg">Campo Requerido.</span></span></td>
              </tr>
              <tr>
                <td>Telefono:</td>
                <td><span id="sprytextfield5">
                  <label for="telefono"></label>
                  <input type="text" name="telefono" id="telefono" />
                <span class="textfieldRequiredMsg">Campo Requerido.</span></span></td>
              </tr>
              <tr>
                <td>Monto:</td>
                <td><span id="sprytextfield6">
                  <label for="monto"></label>
                  <input type="text" name="monto" id="monto" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              <tr>
                <td>Correo:</td>
                <td><span id="sprytextfield7">
                  <label for="correo"></label>
                  <input type="text" name="correo" id="correo" />
                <span class="textfieldRequiredMsg">A value is required.</span></span></td>
              </tr>
              </table>
            <br />
            <table width="200" border="0" align="center">
              <tr>
                <td align="center"><input type="submit" name="reportarpago" value="Reportar Pago"></td>
              </tr>
            </table>
<p>&nbsp;</p>
</form>
<br /><br />


<?php
		
		if (isset($_POST['reportarpago']))
		{
			
			$body='Se ha reportado un nuevo pago
			
								Numero de Deposito o Transferencia:		'.$_POST['numero'].'
								Banco: 		'.$_POST['banco'].'
								Monto: 		'.$_POST['monto'].'
								Fecha: 		'.$_POST['fecha'].'
								Nombre del Depositante: 	'.$_POST['nombredep'].'
								Nombre:		'.$_POST['nombre'].'
								Telefono: 	'.$_POST['telefono'].'
								Correo: 	'.$_POST['correo'].'

								
								';
								
											$para="dr.free24@gmail.com";
			
	
			
											$desde = $_POST["nombre"];
											$mensaje = $body;
										
					
											$asunto 	= "Nuevo Reporte de Pago ";
											$desde		= $_POST["nick"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
											$cabeceras = "From: " . $_POST ["correo"] . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);   					
			
			
			
			
			
			
			echo" Su pago ha sido reportado con exito";
			
			
		}



?>





</div><!--Fin de MARCO  CONTENIDO 1-->
 
    
    
    
  <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
  </script>
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
