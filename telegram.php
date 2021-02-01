<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$lastname = $_POST['user_lastname'];
$user_url = $_POST['user_url'];
$email = $_POST['user_email'];
$message = $_POST['user_message']
$token = "1325626428:AAEoz3JinbkFLRVKNpkf7TPhVnta6fJutRk";
$chat_id = "-1001119873847";
$arr = array(
  'Имя пользователя: ' => $name,
  'Фамилия пользователя: ' => $lastname,
  'url: ' => $user_url,
  'Email' => $email,
  'Message' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>