<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<p>Prueba de Envio de Correo


  <form method="post" action="#">
  
</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="nombre"></label>
    <input type="text" name="nombre" id="nombre" /> 
    NOmbre
</p>
  <p>
    <label for="email"></label>
    <input type="text" name="email" id="email" />
  Correo</p>
  <p>
    <input type="text" name="asunto" id="asunto" />
  asunto</p>
  <p>
    <input type="text" name="texto" id="texto" />
  texto</p>
  <p>
    <input type="submit" name="btn_enviar" id="btn_enviar" value="Submit" />
  </p>
</form>
 


<?php
	echo	$nombre =$_POST['nombre'];
	echo	$email =$_POST['email'];
	echo	$asunto =$_POST['asunto'];
	echo 	$texto =$_POST['texto'];


 if(isset($_POST['btn_enviar']))
			{
				$para = 'systemsadms@hotmail.com';
				$asunto = $_POST["asunto"];
				$desde = $_POST["email"];
				$mensaje = $_POST["texto"];
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["email"] . "\r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
			echo "Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas";
				
			}
			else
			{
				echo "  <b>No se ha enviado nada aun</b>";
			}


?>


</body>
</html>