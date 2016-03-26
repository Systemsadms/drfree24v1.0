<?php

	
		$largo=10;
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
		//print "\nClave = ". $cad . "\n\n" ;
		;
	


	
	$nick		= 	$_POST['nick'];
	$pass		=	$cad;
	$nombres	=	$_POST['nombres'];
	$apellidos	=	$_POST['apellidos'];
	//$ci			=	$_POST['ci'];
	$email		=	$_POST['email'];
	$pais		=	$_POST['pais'];
	$estado		=	$_POST['estado'];
	$ciudad		=	$_POST['ciudad'];
	$telefono	=	$_POST['telefono'];
	$celular	=	$_POST['celular'];
	$direccion	=	$_POST['dir'];
	
	 
	
			
			$conn = mysql_connect("localhost","drfree24db","222702qaaq");
			
			mysql_select_db("drwebs_",$conn);
			$ssql = "SELECT * FROM casilleros WHERE nick ='$nick'";
			$rs = mysql_query($ssql,$conn);
			
			
			
			if (mysql_num_rows($rs)>0)
				{
									
				echo "<b>Ya existe un un usuario con ese nick, por favor intente registrarse con otro nick</b>";
				
				
				
				mysql_close($conn);
				
				?>
                	<br /><br />
                    <a href="registro.html">--> Intentar de Nuevo</a>
				<?php
			
				}else 
				{
				
							mysql_select_db("runnerca_drfree24",$conn);
							$ssql = "SELECT * FROM casilleros WHERE email ='$email'";
							$rs = mysql_query($ssql,$conn);
				
							if (mysql_num_rows($rs)>0)
							{								
							echo "<b>Ya existe un un usuario con ese email, por favor intente registrarse con otra direccion de correo</b>";							
							mysql_close($conn);
							
							?>
                            <br /><br />
                            <a href="registro.html">--> Intentar de Nuevo</a>
                        	<?php
	
							}else
													
							{
								
			
				
						
							mysql_query ("INSERT INTO casilleros VALUES 
							('', '$nick','$pass','$nombres','$apellidos','$ci','$email','$pais','$estado','$ciudad','$telefono','$celular','$direccion')");
							mysql_close ($conn);
							
								echo "<b>Bienvenido a la familia de DrFree 24. Se ha registrado exitosamente por favor revise en su correo nuestro email de no estar en la bandeja de entrada buscar en la bandeja de spam o correos no deseados y guardar nuestra direccion como segura.</b>";	
								
								echo "<br><br><br>";
				
			
		
				
								//Enviar email a correo
									
							
								
								$body='Se ha registrado un Nuevo Usuario
								Usuario:	'.$_POST['nick'].'
								Nombres: 	'.$_POST['nombres'].'
								Apellidos: 	'.$_POST['apellidos'].'
								Pais: 		'.$_POST['pais'].'
								Estado: 	'.$_POST['estado'].'
								Ciudad:		'.$_POST['ciudad'].'
								E-Mail: 	'.$_POST['email'].'
								Celular: 	'.$_POST['celular'].'
								Telefono: 	'.$_POST['telefono'].'
								Direccion: 	'.$_POST['dir'].'
								
								';

								$body2 = 'Saludos Cordiales:
							
								Sr(a). '.$_POST['nombres'].', es un gusto para nosotros que usted forme parte de nuestra cartera de clientes. Su usuario y su password para acceer a su Dr.free24 son los siguientes:
								
										Usuario:	'.$_POST['nick'].'
										Password:	'.$cad.'
									
								 Usted puede cambiar su contraseña cuando guste desde su cuenta en Drfree24.com				
								
								 Por lo tanto a partir de ahora al realizar cualquier compra usted debera informarle a su proveedor que la direccion de envio de su carga es la siguiente:
								 
									SHIPPING ADDRESS:
									Nombre: Dr.free24 /SU NOMBRE COMPLETO
									Adress: 12250 NW 25th ST Suite 115
									Adress2: C/O Air Marine 
									City: MIAMI
									Estate: FLORIDA
									Zip Code: 33182
									Phone: (305)4773496
									
											
									
									Cada vez que recibamos un paquete , usted recibira un correo electronico informandole los detalles de la carga que ha recepcionado. Esta informacion es actualizada a diario por lo tanto usted sera notificado de los paquetes el mismo dia de su recepcion.
									
									De igual forma lo invitamos a visitar nuestra pagina web www.drfree24.com donde con su usuario y su contrasena, usted podra monitorear el estatus de sus paquetes y asi estar informado sobre la ubicacion del mismo.
										
										Gracias por su interes en trabajar con nosotros, esperamos brindarles un excelente servicio.
										
											';
							
							
							
										$para="dr.free24@gmail.com";
										$para2= $_POST['email'];
							
									
										if ( isset ($_POST["btn_enviar"]))
										{
											$asunto = "Nuevo Registro de Usuario";
											$desde = $_POST["nick"];
											$mensaje = $body;
											
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
											$cabeceras = "From: " . $_POST ["email"] . "\r\n";  
							
							
											$asunto2 	= "Bienvenido a Drfrre24";
											$desde2		= $_POST["nick"];
											$mensaje2 	= $body2;
											$cabeceras2 = "";
											$cabeceras2 = "MIME-VErsion: 1.0 \r\n";
											$cabeceras2	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras2 = "To: " . $_POST ["nick"] . "\r\n";
											$cabeceras2 = "From: " . "dr.free24@gmail.com" . "\r\n";    
							
							
											mail ($para2, $asunto2, $mensaje2, $cabeceras2);   
							
														
											mail ($para, $asunto, $mensaje, $cabeceras);
												
											echo "<b>Se ha registrado exitosamete, por favor intente ingresar a su cuenta</b>";
												
												
										}
						}	
		
	}
			
		

	
?>