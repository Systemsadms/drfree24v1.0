<?php

	if (isset($_POST['editar']))
	{
	
			$id			= 	$_POST['cas'];
			$pass		=	$_POST['pass'];
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
					pass ='$pass', email ='$email', pais='$pais', estado='$estado', ciudad='$ciudad', telefono='$telefono', celular='$celular', dir='$dir' WHERE id= $id" ;
			
			$hacerconsulta = mysql_query ($consulta);
			
				
			mysql_close ($conn);	
			
			
			header ("location:midrfree24.php");
	}


?>

