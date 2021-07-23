<?php
$data = $_POST;

$name = $data['name'];
$country = $data['country'];
$organization = $data['organization'];
$phone = $data['phone'];
$mail = $data['mail'];

$time = date("Y-m-d H:i:s");
$subject_name = 'Заявка с сайта ' . $_SERVER['SERVER_NAME'];

$message = '
        <html>
        <p>Заявка с сайта ' . $_SERVER['SERVER_NAME'] . '</p>';

$message .= "<div><p>Дата отправки: </p> $time";

if(isset($name) && $name !== ''){
    $message .= "<p>Фамилия Имя Отчество: </p> $name";
}
if(isset($country) && $country !== ''){
    $message .= "<p>Страна: $country.'</p>";
}
if(isset($organization) && $organization !== ''){
    $message .= "<p>Организация: $organization'</p>";
}
if(isset($phone) && $phone !== ''){
    $message .= "<p>Телефон: $phone'</p>";
}
if(isset($mail) && $mail !== ''){
    $message .= "<p>Email: $mail'</p>";
}

$message .= "</div>
        </html>";

$headers = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8";


$success = mail('samura95@gmail.com', $subject_name, $message, $headers);
if (!$success) {
    $errorMessage = error_get_last()['message'];
    echo $errorMessage;
} else {
    echo 'ok';
}
