<?php
$name = $_POST['userName'];
$email = $_POST['userMail'];
$message = $_POST['userPhone'];

$to = 'starshova1309@gmail.com';
$date = date('d.m.y');
$time = date('h:i');
$from = $email;

$msg = "
    Имя: $name
    Почта: $email
    Текст: $message
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: $from" . "\r\n";

mail($to, "Заявка с сайта", $msg, $headers);
?>
