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
<!-- InstanceEndEditable -->
</head>

<body>

<div id="MarcoGlobal">
	<div id="Marcobusqueda">
    
    <table width="980" border="0">
  <tr>
  <form>
  	<td width="69">&nbsp;</td>
    <td width="247"><img src="img/logoblack.png" width="100" height="30" /></td>
    <td width="118"><div id="tipodeletraserch"><strong><a href="midrfree24.php">Mi DrFree24</a></strong></div></td>
    <td width="87"><div id="tipodeletraserch"><strong><a href="http://sistema.sfdservices.com/clientes/sfd/registrarusuario.asp">Tracking</a></strong></div></td>
    <td width="138">&nbsp;</td>
    <td width="39">Serch:</td>
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
 <li><a href=""><b>Servicios</b></a></li>
 <li><a href="comprasusa.html"><b>Comprar en USA</b></a></li>  
   <li><a href="giftcard.html"><b>Gift Cards</b></a></li>
  <li><a href="#"><b>Galerias</b></a></li>
   <li><a href="#"><b>Socios</b></a></li>
 <li><a href="contactanos.html"><b>Contacto</b></a></li>
</ul>
  </div>
 </div>
 <br />
</div>
    </div><!--Fin de MARCO  MENU --><!-- InstanceBeginEditable name="EditRegion1" -->
<div id="Marcobannergiftcard"><img src="img/banergiftcard.png" width="980" height="400" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="621,325,758,373" href="comfunciona.html" target="_blank" />
    <area shape="rect" coords="807,327,935,372" href="#" target="_blank" />
  </map>
</div>
<!--Fin de MARCO  BANNER -->
<div id="marcocontenidogifrcard">
  <table width="613" border="0" align="center">
    <tr>
      <td width="603" align="center">&nbsp;</td>
    </tr>
  </table>
  <table width="841" border="0" align="center">
    <tr>
      <td width="318" align="center"><a name="gift" id="gift"></a></td>
    </tr>
  </table>
	<br />
    
    
    
      <?php
	  
	  if(isset($_POST['correo1']))
	  {
		
		$nombre1= 	$_POST['nombre1'];
		$correo1= 	$_POST['correo1'];
		$telefono= 	$_POST['telefono'];
		$card= 		$_POST['card'];
		
		$cuenta2 = $card * 0.10;
		$cuenta = $card + $cuenta2;
		
		
		//Enviar email a correo
				
				
			$body='Se he generado una orden de compra
			
			Cliente:				'.$_POST['nombre1'].'
			Correo de Cliente:		'.$_POST['correo1'].'
			Telefono de Cliente:	'.$_POST['telefono'].'
			Monto de GiftCard: 		'.$_POST['card'].'$

			
			';
			
$Mensaje = '
<html>
<head>
<title>Orden de Compra Gift Card</title>
</head>

<body>
<table width="614" border="0" align="center">
  <tr>
    <td align="center"><h3>Hemos recibido una orden de compra para una GIFT CARD de '.$card.'$  <br />
      <br />
    Para completar la orden de compra usted debe realizar las siguientes operaciones.</h3></td>
  </tr>
</table>
<p>&nbsp;	</p>
<table width="506" border="0" align="center">
  <tr>
    <td width="49" align="center"><strong><em>Paso 1</em></strong></td>
  </tr>
  <tr>
    <td align="center">Transfiera a nuestra cuenta paypal, la cantidad de'.$cuenta.' $.<br /><br /></td>
  </tr>
  <tr>
    <td align="center"><table width="247" border="1">
      <tr>
        <td width="215" align="center" bgcolor="#9999CC">

		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6LPM6SXX6AD3A">
<table>
<tr><td align="center"><input type="hidden" name="on0" value="Selecciona tu Gift Card">
  Selecciona tu Gift Card y Paga con Paypal</td></tr><tr><td align="center">
  <br />
  <select name="os0">
	<option value="Gift Card">Gift Card $100.00 USD</option>
	<option value="Gift Card">Gift Card $150.00 USD</option>
	<option value="Gift Card">Gift Card $250.00 USD</option>
	<option value="Gift Card">Gift Card $500.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

		  </td>
      </tr>
    </table></td>
  </tr>
</table>
<BR />
<table width="638" border="0" align="center">
  <tr>
    <td width="49" align="center"><strong><em>Paso 2</em></strong></td>
  </tr>
  <tr>
    <td>Reporte su pago en nuestro sitio web<a href="http://www.systemsadms.com/cliente0082/giftcard.html"> www.drfree24.com</a> seccion GIFT CARD. Nuestro personal se encargara de verificar la validez del reporte.</td>
  </tr>
</table>
<br />
<table width="639" border="0" align="center">
  <tr>
    <td width="49" align="center"><strong><em>Paso 3</em></strong></td>
  </tr>
  <tr>
    <td>Nosotros nos encargamos de enviarte la GIFT CARD para que pueda realizar sus compras en amazon.com.</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="200" border="0" align="center">
  <tr>
    <td align="center"><b>Telefonos:</b></td>
  </tr>
  <tr>
    <td align="center">(+58) 212 331 11 54
    <br>
    (+580212 331 25 71</td>
  </tr>
  <tr>
    <td align="center">
    
    <img src="http://www.systemsadms.com/cliente0082/img/logo.jpg" width="200" height="75">
    
    </td>
  </tr>
</table>

</body>

</html>
';





		
				$para="dr.free24@gmail.com";
				$asunto = "Nueva orden de compra";
				$desde = $_POST["correo1"];
				$mensaje = $body;
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				$cabeceras = "To: " . $_POST ["nombre1"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["correo1"] . "\r\n";      





				$para2= $correo1;
				$asunto2 = "Orden de Compra Gift Card '$card'$";
				$desde2 = "dr.free24@gmail.com";
				

			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: www.drfree24.com <dr.free24@gmail.com>\r\n";
			$headers .= "X-Mailer: PHP/" . phpversion();
							
							mail ($para2, $asunto2, $Mensaje, $headers);
							
							
				if (mail ($para, $asunto, $mensaje, $cabeceras))
					{
						echo "<b>Su orden de compra fue generada, recibira en su correo la informacion necesaria para completar su compra,  </b><br><br><b>Si es la primera vez que realiza esta compra puede que reciba el mail con los datos en la bandeja de correos no deseados, recuerde revisar esta bandeja y agregarnos como correo permitido</b>";
					}
					
		

		
		}
		else
		{
			echo 	"<b>Debe completar el formulario para generar una ordend e compra </b>";
		}
		
			
		

	
?>

  <p>&nbsp;</p>
</div><!--Fin de MARCO  CONTENIDO 1-->
<!--Fin de MARCO  CONTENDIO 2-->
    
    
    
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
    


</di