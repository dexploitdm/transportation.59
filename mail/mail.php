<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../core/PHPMailer/src/Exception.php';
require '../core/PHPMailer/src/PHPMailer.php';
require '../core/PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

if ($_POST) { // если передан массив POST
    $from_region = $_POST['from_region'];
    $to_region = $_POST['to_region'];
    $cargo_weight = $_POST['cargo_weight'];
    $cargo_volume = $_POST['cargo_volume'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
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
    <b>Откуда везем (регион/город отправки):</b> ' .$from_region . '<br> 
    <b>Куда везем (регион/город назначения):</b> ' .$to_region. '<br>
    <b>Вес груза (в кг):</b> ' .$cargo_weight. '<br>
    <b>Объем груза (в м3):</b> ' .$cargo_volume. '<br>
    <b>Имя:</b> ' .$name. '<br>
    <b>Телефон:</b> ' .$phone. '<br>
    <b>Комментарий:</b> ' .$comment. '';
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