<?php
require_once('../core/PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

if ($_POST) { // если передан массив POST
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $json = array(); // подготовим массив ответа

    function mime_header_encode($str, $data_charset, $send_charset) { // функция преобразования заголовков в верную кодировку
        if($data_charset != $send_charset)
            $str=iconv($data_charset,$send_charset.'//IGNORE',$str);
        return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
    }

    $mail->isSMTP();
    //$mail->SMTPDebug = true;
    $mail->Host = 'smtp.yandex.ru';  																							// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    $mail->Username = 'ujin.tech@yandex.ru';
    $mail->Password = 'Qq1234567';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('ujin.tech@yandex.ru');
    $mail->addAddress('dexploitdm@yandex.ru');
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Ujin';
    $mail->Body    = '
    Форма - связаться с менеджером:<br>
    <b>Фамилия, Имя:</b> ' .$fio . '<br> 
    <b>Телефон:</b> ' .$phone. '<br>
    <b>Почта:</b> ' .$email. '';
    $mail->AltBody = '';
    $mail->send();
    $json['error'] = 0; // ошибок не было
   // header("/");
    if ($mail->Send()) {
        header('Location: /');
    }
   // echo json_encode($json); // выводим массив ответа
} else { // если массив POST не был передан
    echo 'GET LOST!'; // высылаем
}
