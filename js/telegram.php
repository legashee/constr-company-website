<?php

$name = $_POST['getname'];
$surname = $_POST['getsurname'];
$email = $_POST['getmail'];
$number = $_POST['getnumber'];
$comment = $_POST['getcomment'];
$token = "6191565743:AAGvkYj9clXZ8uPKXM_AYIuOwIvy5jd5SXM";
$chat_id = "-970180157";
$arr = array(
  'Имя: ' => $name,
  'Фамилия ' => $surname,
  'Почта ' => $email,
  'Телефон: ' => $number,
  'Комментарий ' => $comment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>