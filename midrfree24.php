<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drfree24</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="ajx/ajxmenu.css" type="text/css" />
<link rel="stylesheet" href="intranet/ajaxtix/ajxlightbox.css" type="text/css" />
<script src="intranet/ajaxtix/ajxlightbox.js" type="text/javascript"></script>
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
 <li><a href=""><b>Servicios</b></a></li>
 <li><a href="comprasusa.html"><b>Comprar en USA</b></a></li>  
   <li><a href="giftcard.html"><b>Gift Cards</b></a></li>
  <li><a href="galeria.php"><b>Galerias</b></a></li>
   <li><a href="#"><b>Precios</b></a></li>
 <li><a href="contactanos.html"><b>Contacto</b></a></li>
</ul>
  </div>
 </div>
 <br />
</div>
    </div><!--Fin de MARCO  MENU -->
<div id="Marcobanner"></div><!--Fin de MARCO  BANNER -->
<div id="marcocontenidoregistro">
<?php
session_start();
if (isset($_SESSION["login"]))
		{
			require ("mostrar.php");
														
				?>	
                	
                    <table width="855" border="0" align="center">
                          <tr>
                            <td width="429">Recuerda cerrar tu seccion al finalizar tu consulta</td>
                            <td width="280" align="center">
                            <form action "#" method="POST">
                            	<input type="submit" name="datos" value="Ver datos de tu cuenta">
                            </form>
                            </a></td>
                            <td width="132" align="center"><a href="destruir.php">Cerrar Session</a></td>
                          </tr>
                        </table>



<table width="200" border="0" align="center">
  <tr>
    <td>
    
    <img src="img/midrfree241.jpg" width="760" height="150" />
    
    </td>
  </tr>
</table>

					<table width="256" border="0" align="center">
                      <tr>
                        <td width="205" align="center"><b>Tus articulos en almacen</b></td>
                      </tr>
                    </table>
                    <br />
                    
                  
                    
              <!-------------------------------------------------------Tracking----------------------------------------------------->     
                    
                    
                    <?php
					
					include ("intranet/inc/trackingbd.php");					
				
				$consulta = "SELECT * FROM guias WHERE user='$cas';";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo "<table border='1' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>N° de Guia</b></td>";
				echo "<td align='center'><b>Tracking</b></td>";
				echo "<td align='center'><b>Direccion de Envio</b></td>";
				echo "<td align='center'><b>Libras</b></td>";
				echo "<td align='center'><b>Volumen</b></td>";
				echo "<td align='center'><b>Costo de Envio</b></td>";
				echo "<td align='center'><b>Descripcion</b></td>";
				echo "<td align='center'><b>Dimensiones</b></td>";
				echo "<td align='center'><b>Foto</b></td>";				
				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";
				echo "<td align='center'>".$reg[4]."</td>";
				echo "<td align='center'>".$reg[5]."</td>";
				echo "<td align='center'>".$reg[6]."</td>";
				echo "<td align='center'>".$reg[7]."</td>";
				echo "<td align='center'>".$reg[9]."</td>";
				echo "<td a valign='top'  align='center' width='140' >
				<div class='AJXLightboxGVHQAXA'><a href='intranet/img/guia_".$reg[8].".jpg' rel='ajxlightbox'><img src='intranet/img/guia_".$reg[8].".jpg' height='25px' width='25px'/></a></div>
				</td>";
				

				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
				echo "<br>";
				}
				else
				{
					echo "Usted no Posee articulos en almacen";
					echo "<br>";
				}
					?>

                    <!-------------------------------------------------------Fin de Tracking----------------------------------------------------->     



 						 <?php
						if (isset($_POST['datos']))
						{
						?>
                            
                            
                            <table width="231" border="0" align="center">
                              <tr>
                                <td align="center"><b>Ver datos de su cuenta</b><br />
                                  -&gt;<a href="midrfree24.php">Ocultar Datos</a>&lt;-
                                  <br />
                                  -&gt;<a href="editar.php">Modificar Datos</a> &lt;-</td>
                                  
                              </tr>
                            </table>
                            <br />

                            	<table width="200" border="0" align="center">
                                      <tr>
                                        <td width="63"><strong>Nick:</strong></td>
                                        <td width="121"><?php echo $nick; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>Nombres:</strong></td>
                                        <td><?php echo $nombres; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>Apellidos:</strong></td>
                                        <td><?php echo $apellidos; ?></td>
                                  </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                  </tr>
                                      <tr>
                                        <td><strong>Email:</strong></td>
                                        <td><?php echo $email; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>Pais:</strong></td>
                                        <td><?php echo $pais; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>Estado:</strong></td>
                                        <td><?php echo $estado; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>Ciudad:</strong></td>
                                        <td><?php echo $ciudad; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>Telefono:</strong></td>
                                        <td><?php echo $telefono; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>BBpin:</strong></td>
                                        <td><?php echo $celular; ?></td>
                                  </tr>
                                      <tr>
                                        <td><strong>Direccion:</strong></td>
                                        <td><?php echo $dir; ?></td>
                                  </tr>
              				</table>

                           <?php						   
							}
						   ?> 

					<br /><br />
                    <br /><br />
                    
                    Si realizaste una compra en los Estados Unidos y usaste la direccion de nuestro servicio Delivery, notificanos a travez del siguiente formulario:
                    <br /><br />
         <table width="547" border="0" align="center">
                      <tr>
                        <td width="185" valign="top">
                        
                        <form method="post" action="terminos.php">
                          <table width="200" height="334" border="0">
                            <tr>
                              <td align="center">
                              <input type="hidden" name="user" value="<?php echo $cas;?>" />
                              <input type="submit" name="formulario" value="Llenar Formulario"/>
                              </td>
                            </tr>
                            <tr>
                              <td height="135" align="center">
                              
                              <img src="img/midrfree242.png" width="255" height="133" />
                              
                              
                              
                              </td>
                            </tr>
                            <tr>
                              <td height="80" align="center"><a href="drfree24/reportarpagos.php"><img src="img/Reportar pagos_02.gif" width="149" height="49" /></a><br /><br /><img src="img/cuenta.JPG" width="251" height="141" /><br /></td>
                            </tr>
                            <tr>
                              <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td align="center"><img src="img/paypal.JPG" width="142" height="22" /></td>
                            </tr>
                            <tr>
                              <td align="center">
                               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="2JWXHNW2RK452">
<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
                              </td>
                            </tr>
                            <tr>
                              <td align="center"><span dir="ltr"><span dir="ltr"><img src="img/tel.png" width="25" height="25" />02123311154</span> <img src="img/tel.png" width="25" height="25" />(contactenos si no sabe como  pagar su envio a traves de PAYPAL con sus dolares del cupo CADIVI electronico)</span></td>
                            </tr>
                          </table>
                        </form>
                        
                      
                        
                        
                        
                        
                        
                        
                        </td>
                        <td width="292"><table width="389" border="0">
                          <tr>
                            <td width="183" align="left"><strong>Shipping Address (Envios Aereos)</strong></td>
                          </tr>
                          <tr>
                            <td>Name: Dr.free24 / &quot;Coloque su nombre aqui&quot;</td>
                          </tr>
                          <tr>
                            <td>ADDRESS:12250 NW 25th ST Suite 115</td>
                          </tr>
                          <tr>
                            <td>ADDRESS2: C/O Air Marine</td>
                          </tr>
                          <tr>
                            <td>CITY: MIAMI</td>
                          </tr>
                          <tr>
                            <td>STATE: FLORIDA</td>
                          </tr>
                          <tr>
                            <td>ZIP CODE: 33182</td>
                          </tr>
                          <tr>
                            <td>PHONE: 3054773496</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><strong>Shipping Address (Envios Maritimos)</strong></td>
                          </tr>
                          <tr>
                            <td>Name: Dr.free24 / &quot;Coloque su nombre aqui&quot;</td>
                          </tr>
                          <tr>
                            <td>ADDRESS:3750 NW 114th Ave Unit 6. Doral,FL</td>
                          </tr>
                          <tr>
                            <td>City: Doral State.</td>
                          </tr>
                          <tr>
                            <td>State: FLORIDA</td>
                          </tr>
                          <tr>
                            <td>Phone: 305 629 5016</td>
                          </tr>
                          <tr>
                            <td>Fax: 305 629 5017</td>
                          </tr>
                          <tr>
                            <td>ZIP CODE: 33178</td>
                          </tr>
                        </table></td>
                      </tr>
    </table>
<BR /><BR />
<br />
<br /><br />


			
               <?php
				}
				else
				{
					echo "Obtén tu cuenta para que hagas compras en los Estados Unidos, Si todavía no eres miembro de nuestra familia regístrate ahora mismo, es muy fácil, rápido y sin ningún costo. Simplemente completa el siguiente formulario y en un momento seras parte de nuestra familia.";
					echo "<br><br>";
					echo "<br><br>";
					
					?>
                    
                    	
<table width="200" border="0" align="center">
                      <tr>
                        <td><a href="registro.php"><img src="img/registrate-aqui-nectilus-colin.jpg" width="274" height="254" /></a></td>
                      </tr>
                    </table>
                    <br /><br />
            
    <form method="POST" action="validar.php">
            
<table width="650" border="0" align="center">
              <tr>
                <td>Ingrese con su usuario: </td>
                <td>
                <input type="text" name="nick" id="nick" /></td>
                <td>Password:</td>
                <td>
                  <input type="password" name="pass" id="pass" /></td>
                <td><input type="submit" name="btn_enviar" value="Entrar"></td>
              </tr>
            </table>
            <table width="233" border="0" align="center">
              <tr>
                <td width="116" align="center"><h6><a href="recuperarpass.php">Recuperar Contraseña</a></h6></td>
              </tr>
            </table>
      </form>
            
           	<br /><br />

                    
                    

                    
                    <?php
					
					
					
				}
				
				
				
				
			?>
                 
                    
                    
                    
                    <br /><br /><br /><br />
                    
                                        
                                        
                                        
</div><!--Fin de MARCO  CONTENIDO 1-->
    
    
    
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
