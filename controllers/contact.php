<?php
require_once realpath(__DIR__).'/../core/recaptchalib.php';

// https://github.com/google/recaptcha/blob/1.0.0/php/recaptchalib.php

switch ($actionName) {
 case 'index':

  $title = "Contact Us";
 
  //секретный ключ
  $secret = "6LehvTsUAAAAAEKTe_ta9GX7mQXDvSNCvv2yX6VF";
  //ответ
  $response = null;
  //проверка секретного ключа
  $reCaptcha = new ReCaptcha($secret);
 
if (!empty($_POST)) {
 
    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
        );
    }
 
    if ($response != null && $response->success) {
        echo "Все хорошо.";
    } else {
        echo "Вы точно человек?";
    }
 
}
  require_once realpath(__DIR__).'/../views/home/contact.php';
  break;
}
?>

