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
<div id="Marcobanner"></div><!--Fin de MARCO  BANNER -->
<div id="marcocontenidoregistro">


			            
            
<br /><br />
<table align="center" bgcolor="#FFFFFF" border="0">
	<tr>
    	<td>  
       <?php
//-------------------------------------------------------------------------------------------------------------------------	   	
		if (isset($_POST['aereo']))
		{
			$largo 	= $_POST['largo'];
			$ancho 	= $_POST['ancho'];
			$alto 	= $_POST['alto'];
			$peso 	= $_POST['peso'];

			
			$pv 	= $largo * $ancho * $alto / 166 ;
			
				if($pv > $peso)
				{

					
						$costo = $pv * 6.43;
						$final  = number_format($costo,2,".",",");
						
				?>		
		  <table width="667" border="0" align="center" bordercolor="#FF0000">
							  <tr>
								<td align="center"><?php echo "El costo estimado de su envio es de" . " " . "<b>".$final*70 . " bs." . "</b>"; ?></td>
							  </tr>
                                <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
			</table>

							
                   <?php     
  
				}
				else
				{
					$costo = $peso * 6.43;
					$final  = number_format($costo,2,".",",");
 

							?>
							<table width="667" border="0" align="center" bordercolor="#FF0000">
							  <tr>
								<td align="center"><?php echo "EL costo estimado de su envio es de" . " " . "<b>" . $final*70 . " bs." . "</b>"; ?></td>
							  </tr>
                                <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
		  </table>
						
                        	<?php
								
								
								
								  
							
						

				}
				
				//Fin de calculo de Envio aereo
				
				
				
		}
		
		
		//Calculo de envio maritimo
		
		
		
		
		if (isset($_POST['maritimo']))
		{
			$largo 	= $_POST['largo'];
			$ancho 	= $_POST['ancho'];
			$alto 	= $_POST['alto'];
			
			$cuft 	= $largo * $ancho * $alto / 1728 ;
			
			
			
			$costo = $cuft * 22;
			$final  = number_format($costo,2,".",",");
			
					
						
							
							?>
			  <table width="667" border="0" align="center" bordercolor="#FF0000">
							  <tr>
								<td align="center"><?php echo "EL costo estimado de su envio es de" . " " . "<b>". $final*70 . " bs." . "</b>"; ?></td>
							  </tr>
                                <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
		  </table>
						
                        	<?php
	 
							
				
			

		}
	   ?>    


</td>
</tr>
</table>






<br />
<br />
<br />
  <strong>Tenga presente las siguientes observaciones a la hora de introducir sus datos para que no tenga estimaciones incorrectas : </strong><br />	<br />
  <b>1)</b> Las medidas y peso requeridos para cotizar deben ser expresados en pulgadas y libras respectivamente.<br />
  <br />
  
  <b>2)</b> Es necesario que las medidas y peso sean de la caja que contiene el articulo, mas no del articulo como tal. Es decir las medidas deben ser del embalaje del articulo.
  <br />
  <br />
  
  <b>3)</b> Tenga presente que por lo general en internet estan las medidas de los articulos y no de sus cajas... mientras que en caso de los articulos que requieren armado, las medidas que aparecen son del articulo ya armado, mas no de la caja donde viene desarmado el articulo.
 </p>
<p>&nbsp;</p>
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
