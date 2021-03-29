<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];


$emailNewsLetter = $_POST['email_newsLetter'];

$nameFooter = $_POST['name_footer'];
$phoneFooter = $_POST['phone_footer'];
$messageFooter = $_POST['message_footer'];


// Формирование modal письма
$title = "Notification Best Tour Plan";
$body = "
<h2>New message</h2>
<b>Name:</b> $name<br>
<b>Number:</b> $phone<br><br>
<b>E-mail:</b> $email<br>
<b>Message:</b><br>$message<br><br>
";

// Формирование newslwtter письма
$titleNewsLetter = "New follower Best Tour Plan";
$bodyNewsLetter = "
<h2>New follower</h2>
<b>E-mail:</b> $emailNewsLetter<br>
";

// Формирование footer письма
$titleFooter = "Notification Best Tour Plan";
$bodyFooter = "
<h2>New message</h2>
<b>Name:</b> $nameFooter<br>
<b>Number:</b> $phoneFooter<br><br>
<b>Message:</b><br>$messageFooter<br><br>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  $mail->SMTPDebug = 2;
  $mail->Debugoutput = function ($str, $level) {
    $GLOBALS['status'][] = $str;
  };

  // Настройки вашей почты
  $mail->Host       = 'mail.alena-web.ru'; // SMTP сервера вашей почты
  $mail->Username   = 'alena@alena-web.ru'; // Логин на почте
  $mail->Password   = 'UriAl1998temple'; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->SMTPAutoTLS = false;
  $mail->SMTPSecure = false;
  $mail->Port       = 25;
  $mail->setFrom('alena@alena-web.ru', 'alena'); // Адрес самой почты и имя отправителя

  // Получатель письма
  $mail->addAddress('9642444600a@gmail.com');


  // Отправка сообщения
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  // Проверяем отравленность сообщения
  if ($mail->send()) {
    $result = "success";
  } else {
    $result = "error";
  }
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Настройки PHPMailerNL
$mailNL = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mailNL->isSMTP();
  $mailNL->CharSet = "UTF-8";
  $mailNL->SMTPAuth   = true;
  $mailNL->SMTPDebug = 2;
  $mailNL->Debugoutput = function ($str, $level) {
    $GLOBALS['status'][] = $str;
  };

  // Настройки вашей почты
  $mailNL->Host       = 'mail.alena-web.ru'; // SMTP сервера вашей почты
  $mailNL->Username   = 'alena@alena-web.ru'; // Логин на почте
  $mailNL->Password   = 'UriAl1998temple'; // Пароль на почте
  $mailNL->SMTPSecure = 'ssl';
  $mailNL->SMTPAutoTLS = false;
  $mailNL->SMTPSecure = false;
  $mailNL->Port       = 25;
  $mailNL->setFrom('alena@alena-web.ru', 'alena'); // Адрес самой почты и имя отправителя

  // Получатель письма
  $mailNL->addAddress('9642444600a@gmail.com');
  // Отправка сообщения
  $mailNL->isHTML(true);
  $mailNL->Subject = $titleNewsLetter;
  $mailNL->Body = $bodyNewsLetter;
  // Проверяем отравленность сообщения
  if ($mailNL->send()) {
    $result = "success";
  } else {
    $result = "error";
  }
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mailNL->ErrorInfo}";
}

// Настройки PHPMailerFooter
$mailFooter = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mailFooter->isSMTP();
  $mailFooter->CharSet = "UTF-8";
  $mailFooter->SMTPAuth   = true;
  $mailFooter->SMTPDebug = 2;
  $mailFooter->Debugoutput = function ($str, $level) {
    $GLOBALS['status'][] = $str;
  };

  // Настройки вашей почты
  $mailFooter->Host       = 'mail.alena-web.ru'; // SMTP сервера вашей почты
  $mailFooter->Username   = 'alena@alena-web.ru'; // Логин на почте
  $mailFooter->Password   = 'UriAl1998temple'; // Пароль на почте
  $mailFooter->SMTPSecure = 'ssl';
  $mailFooter->SMTPAutoTLS = false;
  $mailFooter->SMTPSecure = false;
  $mailFooter->Port       = 25;
  $mailFooter->setFrom('alena@alena-web.ru', 'alena'); // Адрес самой почты и имя отправителя

  // Получатель письма
  $mailFooter->addAddress('9642444600a@gmail.com');

  // Отправка сообщения
  $mailFooter->isHTML(true);
  $mailFooter->Subject = $titleFooter;
  $mailFooter->Body = $bodyFooter;

  // Проверяем отравленность сообщения
  if ($mailFooter->send()) {
    $result = "success";
  } else {
    $result = "error";
  }
} catch (Exception $e) {
  $result = "error";
  $status = "Сообщение не было отправлено. Причина ошибки: {$mailFooter->ErrorInfo}";
}

// Отображение результата
header('Location: thanks.php');
