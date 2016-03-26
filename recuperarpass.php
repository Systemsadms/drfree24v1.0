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
  <table width="200" border="0" align="center">
    <tr>
      <td align="center"><b>Recupere su contraseña</b></td>
    </tr>
  </table>
</div><!--Fin de MARCO  BANNER -->
<div id="Marcobanner">

<br /><br>

<form method="post" action="#">
<table width="289" border="0" align="center">
  <tr>
    <td><label for="email">Coloque su correo</label></td>
    <td><input type="text" name="correo" id="email" /></td>
  </tr>
  </table>
<table width="200" border="0" align="center">
  <tr>
    <td align="center"><input type="submit" name="recuperar" value="Recuperar Password" /></td>
  </tr>
</table>
</form>
<br /><br>

			<?php
            		if (isset($_POST['recuperar']))	
					{
						$correo = $_POST['correo'];
						
					    $conn = mysql_connect("localhost","drfree24db","222702qaaq");
			
						mysql_select_db("drwebs_",$conn);
						$ssql = "SELECT * FROM casilleros WHERE email ='$correo'";
						$rs = mysql_query($ssql,$conn);
							
			
			
								if (mysql_num_rows($rs)== 1)
								{

									$ssql = mysql_query("SELECT * FROM casilleros WHERE email='$correo'");	
									
									
									$pass 		=  mysql_result($ssql,0,"pass");
			
	
		
									$body='Hemos recibido una solicitud de recuperacion de contrasena
												
										Password:			'.$pass.'
										
										
										
										Si usted no realizo esta solicitud por la seguridad de su cuenta comuniquese con nostros de inmediato.
										
										';
								
								
								
											$para= $correo;
			
	
			
											$desde = $_POST["correo"];
											$mensaje = $body;
										
					
											$asunto 	= "Recuperacion de Password";
											$desde		= $_POST["nick"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["correo"] . "\r\n";
											$cabeceras = "From: " . "dr.free24@gmail.com" . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);
								
								
											mysql_close($conn);
											
											echo "Su contraseña ha sido enviada a su direccion de correo, recuerde revisar su bandeja de correos no deseados en caso de no encontrar el correo de recuperacion de contrase en la bandeja de entrada";
								
								
								
								
								
								}else
								{
									echo "Esa direccion de correo no se encuentra dentro de nuestra base de datos por favor comuniquese con nuestro personal";	
								}
						
					}
            
            ?>
            <br /><br />
</div><!--Fin de MARCO  CONTENIDO 1-->
   
    
    
    
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
