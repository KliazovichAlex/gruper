<?php

/* https://api.telegram.org/bot1605665932:AAHxXgIxrEYhU0IuJmszNArSI05kwsR3rxU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$phone = $_POST['user_phone'];
$token = "1605665932:AAHxXgIxrEYhU0IuJmszNArSI05kwsR3rxU";
$chat_id = "-572912152";
$arr = array(
  'Телефон клиента:' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /');
} else {
  echo "Error";
}
?>