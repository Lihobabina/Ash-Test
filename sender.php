<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $userName = $_POST["userName"];
    $userMail = $_POST["userMail"];
    $userPhone = $_POST["userPhone"];

    // Адрес, на который отправлять письмо
    $to = "starshova1309@gmail.com";

    // Тема письма
    $subject = "Новая заявка с формы сайта";

    // Текст письма
    $message = "Имя: $userName\n";
    $message .= "Email: $userMail\n";
    $message .= "Номер телефона: $userPhone\n";

    // Отправляем письмо
    mail($to, $subject, $message);

    // Возвращаем успешный ответ на клиентскую сторону (можно заменить на другую обработку)
    echo "Success";
} else {
    // Возвращаем ошибку на клиентскую сторону (можно заменить на другую обработку)
    echo "Error";
}
?>
