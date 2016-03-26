<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drfree24</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="ajx/ajxmenu.css" type="text/css" />
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
    </div><!--Fin de MARCO  MENU -->
<div id="Marcobanner2">
  
  <img src="img/contactanos-box.jpg" width="980" height="411" />
  
  
</div><!--Fin de MARCO  BANNER --><!--Fin de MARCO  Login -->




<div id="contenidocontacto">
  
  <P class="titulo2" align="center"> <b>CONTACTENOS</b></P>
  <br />
  
  
  <table width="700" border="0" align="center">
    <tr>
      <td align="center" class="texto">
        
            
          
            
          <?php
 if ( isset ($_POST["btn_enviar"]))
			{
				$para = 'dr.free24@gmail.com';
				$asunto = $_POST["asunto"];
				$desde = $_POST["desde"];
				$mensaje ="
				Telefono de Contacto:" . $_POST["telefono"] . "<br><br>"
				 . $_POST["mensaje"];
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["desde"] . "\r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
			echo "Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas";
				
			}
			else
			{
				echo "  <b>Su mensaje ha sido enviado exitosamente pronto nos pondremos en contacto con usted</b>";
			}
?>
        
        
        
        
        </td>
      </tr>
  </table>
  
  
  
</div><!--Fin de MARCO  CONTENIDO 1-->




  <div id="contenidocontacto2">
      
      
    <table width="235" border="0">
      <tr>
        <td align="center"><img src="img/custserv.png" width="74" height="85" /></td>
      </tr>
      <tr>
        <td align="center"><span class="texto">Horario de Atención:<br />
          De<strong> Lunes a Viernes</strong><br />
          A partir de las 8:30 a 5:30 pm<br />
        Hora de Venezuela</span></td>
      </tr>
      <tr>
        <td align="center" class="texto">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><span class="texto"><img src="img/tel.png" width="74" height="85" /></span></td>
      </tr>
      <tr>
        <td align="center" class="texto">Atención Telefónica: <br />
+ (58) 212 331 11 54 <br />
+ (58) 212 331 25 71
<br />
(01) 305 647 3495
</td>
      </tr>
      <tr>
        <td align="center"></td>
      </tr>
      <tr>
        <td align="center" class="texto"><img src="img/email.png" width="74" height="85" /></td>
      </tr>
      <tr>
        <td align="center"><span class="texto">atencionalcliente@drfree24.com</span></td>
      </tr>
    </table>
      
    
      
      
  </div><!--Fin de MARCO  CONTENDIO 2-->
    
    
    
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
</html>
