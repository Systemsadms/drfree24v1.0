<?php

	if (isset($_POST['guardar']))
	{
	
			$cas		= 	$_POST['cas'];
			$nick		= 	$_POST['nick'];
			$password	= 	$_POST['pass'];
			$nombres	= 	$_POST['nombres'];
			$apellidos	= 	$_POST['apellidos'];
			$cedula		= 	$_POST['ci'];
			$email		=	$_POST['email'];
			$pais		=	$_POST['pais'];
			$estado		=	$_POST['estado'];
			$ciudad		=	$_POST['ciudad'];
			$telefono	=	$_POST['telefono'];
			$celular	=	$_POST['celular'];
			$dir		=	$_POST['dir'];
			
		
			
			$conn = mysql_connect("localhost","drfree24db","222702qaaq");
					mysql_select_db("drwebs_",$conn);
					
			

				
$consulta = "UPDATE casilleros SET 
nick ='$nick', pass ='$password' , nombres ='$nombres', apellidos ='$apellidos', ci ='$cedula', email ='$email', pais='$pais', estado='$estado', ciudad='$ciudad', celular='$celular', telefono='$telefono', dir='$dir' WHERE id = $cas" ;
			
			$hacerconsulta = mysql_query ($consulta);
			
				
			mysql_close ($conn);
			
			header("location:abrir.php");
		
				
			

	}


?>

