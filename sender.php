<?php
$name = $_POST['userName'];
$email = $_POST['userMail'];
$message = $_POST['userPhone'];

$to = 'starshova1309@gmail.com';
$date = date ('d.m.y');
$time = date ('h:i');
$from = $email;

$msg="
Имя: $name
Почта: $email
Текст: $message";
mail($to, $msg, "From: $from")

?>
