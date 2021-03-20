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

// Формирование самого письма
$title = "Обращение Best Tour Plan";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message<br><br>
<b>E-mail:</b> $email<br>
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
<<<<<<< HEAD
  $mail->Host       = 'mail.alena-web.ru'; // SMTP сервера вашей почты
  $mail->Username   = 'alena@alena-web.ru'; // Логин на почте
 
=======
  $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
  $mail->Username   = 'alenabisyaeva@yandex.ru'; // Логин на почте
 
>>>>>>> 4e2e587ed376adb383dca6a76f476db96725fd0d
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

// Отображение результата
header('Location: thanks.php');
