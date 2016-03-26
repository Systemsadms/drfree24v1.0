<?php

if(isset($_POST['btn_enviar']))
{
require_once('recaptchalib.php');
$privatekey = "6Lf_cu4SAAAAAFgesifmEH7PTBXCbUva7gmEOAkJ";
$resp = null;
$error = null;
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
				$valido ="si";
                echo $valido;
        } else {
                # set the error code so that we can display it
                //$error = $resp->error;
				$valido ="no";
				echo $valido;
        }
}
			 
}			 	
					 

			?>