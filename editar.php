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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
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
<div id="marcocobanner">
<?php
			
			session_start();
			
            if (isset($_SESSION["login"]))
				{
					require ("mostrar.php");
					
			?>		
			
				<br /><br /><br />
                
                
                <form method="post" action="editarsave.php">
                
                
                <br /><br />
                <table width="294" border="0" align="center">
  <tr>
    <td width="88">Nick:</td>
    <td width="190"><span id="sprytextfield1">
      <label for="nick"></label>
      <input name="nick" type="text" id="nick" value="<?php echo $nick ?>" readonly="readonly" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><span id="sprytextfield2">
      <label for="pass"></label>
      <input type="password" name="pass" id="pass" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Repetir Pass:</td>
    <td><span id="spryconfirm1">
      <label for="rpass"></label>
      <input type="password" name="rpass" id="rpass" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
  </tr>
  <tr>
    <td>Nombres:</td>
    <td><span id="sprytextfield4">
      <label for="nombres"></label>
      <input name="nombres" type="text" id="nombres" value="<?php echo $nombres ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Apellidos:</td>
    <td><span id="sprytextfield5">
      <label for="apellidos"></label>
      <input name="apellidos" type="text" id="apellidos" value="<?php echo $apellidos ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><span id="sprytextfield6">
      <label for="email"></label>
      <input name="email" type="text" id="email" value="<?php echo $email ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pais:</td>
    <td><label for="pais"></label>
      <select name="pais" id="pais">
        <option selected="selected">Venezuela</option>
        <option>Estados Unidos</option>
        <option>Panama</option>
        <option>Colombia</option>
      </select></td>
  </tr>
  <tr>
    <td>Estado:</td>
    <td><span id="sprytextfield7">
      <label for="estado"></label>
      <input name="estado" type="text" id="estado" value="<?php echo $estado ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Ciudad:</td>
    <td><span id="sprytextfield8">
      <label for="ciudad"></label>
      <input name="ciudad" type="text" id="ciudad" value="<?php echo $ciudad ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>Telefono:</td>
    <td><span id="sprytextfield9">
      <label for="telefono"></label>
      <input name="telefono" type="text" id="telefono" value="<?php echo $telefono ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <td>BBpin::</td>
    <td>
      <input type="text" name="celular" value ="<?php echo $celular ?>" id="textfield" /></td>
  </tr>
  <tr>
    <td>Direccion:</td>
    <td><span id="sprytextfield11">
      <label for="dir"></label>
      <input name="dir" type="text" id="dir" value="<?php echo $dir ?>" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  </table>
  <br />
                <table width="200" border="0" align="center">
                  <tr>
                    <td>
                    
                    
                    <input type="hidden" name="cas" value="<?php echo $cas ?>"/>
                    <input type="submit" name="editar" value="Guardar"/>
                    </td>
                    <td><input type="reset" name="borrar" value="Borrar"/></td>
                  </tr>
                </table>
        </form>			
					

					
					
					
				<?php	
				}else
				{
					
				}
				?>






</div><!--Fin de MARCO  CONTENIDO 1-->
   
    
    
  <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pass");
  </script>
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
