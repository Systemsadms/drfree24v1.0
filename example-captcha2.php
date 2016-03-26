<html>
  <body>
  
  
<form method="post" action="registro3.php">
<?php
// descomentar la linea de abajo si tenemos el codigo de validacion en otro archivo
require_once('recaptchalib.php');
$publickey = "6Lf_cu4SAAAAAP38AsO9GLfY-RYaoI2xhNmVkJJM";
echo recaptcha_get_html($publickey, $error);
?>
<input type="submit" />
</form>
  

  
   
  </body>
</html>
