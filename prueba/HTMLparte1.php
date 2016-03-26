<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cargar imagen</title>
<meta name="author" content="Fernando Magrosoto V." />
<meta name="history" content="01 noviembre 2012" />
<meta name="email" content="fmagrosoto@gmail.com" />
<style>
body {
background-color: rgb(250,250,250);
color: rgb(50,50,50);
font-family: sans-serif;
font-size: 100%;
width: 600px;
margin: auto;
}
:focus {
outline: none;
}
a {
text-decoration: none;
color: red;
}
a:hover {
text-decoration: underline;
}
header {
border-bottom: 1px gray dotted;
padding-bottom: 25px;
margin-bottom: 25px;
}
header h1 {
font-size: xx-large;
text-shadow: 1px 1px 5px gray;
}
header em {
color: gray;
}
section form {
font-size: small;
}
section form fieldset {
padding: 10px 25px;
background-color: white;
border: 1px gray solid;
border-radius: .5em;
}
section form fieldset legend {
padding: 5px 10px;
border: 1px gray solid;
border-radius: .5em;
}
footer {
border-top: 1px gray dotted;
padding-top: 25px;
margin-top: 25px;
position: relative;
}
.msg {
margin-bottom: 20px;
padding: 10px;
background-color: rgb(255,250,250);
border: 1px red dotted;
}
.elimina {
color: blue;
}
</style>
</head>
<!-- Pgina demostrativa que permite reducir las imgenes cargadas -->
<!-- desde un formulario y almacenarlas en el servidor -->
<!-- utilizando las libreras GD de PHP. -->
<!-- CREADO POR: Fernando Magrosoto V. -->
<!-- HISTORIA: Noviembre 2012 -->
<!-- CONTACTO: fmagrosoto@gmail.com -->
<!-- DESCARGAR CDIGO: https://gist.github.com/4687238 -->
 
<body>
<!-- HEADER -->
<header>
  <h1>&nbsp;</h1>
</header>
<!-- SECCION -->
<section>
  <?php 
  	if(isset($_POST['submit'])) 
		{ 
	?>
  		<div class="msg">El archivo ha sido cargado satisfactoriamente.</div>
	<?php 
	}
 	?>
    
    
    
    
<form action="PHPparte2.php" method="POST" enctype="multipart/form-data">
<fieldset>
<legend>Seleccionar una imagen</legend>
<div><input type="file" name="foto" /></div>
<div style="margin-top: 10px;"><input type="submit" name="submit" />
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Reiniciar</a></div>
</fieldset>
</form>


</div>
</section>
<!-- FOOTER -->

<!-- FIN DE LA PGINA -->
<!-- EOF -->
</body>
</html>