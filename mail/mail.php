<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../core/PHPMailer/src/Exception.php';
require '../core/PHPMailer/src/PHPMailer.php';
require '../core/PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

if ($_POST) { // если передан массив POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $json = array(); // подготовим массив ответа
    function mime_header_encode($str, $data_charset, $send_charset) { // функция преобразования заголовков в верную кодировку
        if($data_charset != $send_charset)
            $str=iconv($data_charset,$send_charset.'//IGNORE',$str);
        return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
    }
    $mail->Host = 'smtp.yandex.ru';  																							// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    $mail->Username = 'karlosblade@yandex.ru';
    $mail->Password = '4815162342007Katesdev';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->setFrom('karlosblade@yandex.ru',  'Mailer');
    $mail->addAddress('dexploitdm@yandex.ru', 'Msdf');
    $mail->isHTML(true);                                         //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('karlosblade@yandex.ru', 'Mailer');
    $mail->addAddress('dexploitdm@yandex.ru', 'Joe User');     //Add a recipient
    //Content
    $mail->Subject = 'Ujin';
    $mail->Body    = '
    Клиент оставил заявку:<br>
    <b>Имя:</b> ' .$name . '<br> 
    <b>Почта:</b> ' .$email. '<br>
    <b>Вопрос или комментарий клиента:</b> ' .$msg. '';
    $mail->AltBody = '';
    $mail->send();
    $json['error'] = 0;
    if ($mail->Send()) {
        $json['status'] = 'good';
    }
    // echo json_encode($json); // выводим массив ответа
} else { // если массив POST не был передан
    echo 'GET LOST!'; // высылаем
}