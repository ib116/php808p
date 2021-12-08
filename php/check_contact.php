<?php 
session_start();

unset($_SESSION['username']);
unset($_SESSION['emal']);
unset($_SESSION['subject']);
unset($_SESSION['message']);


unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['error_message']);

function redirect() {
    header('Location');
    exit;
}
$username = htmlspecialchars(trim($_POST['username']));
$from = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username'] = $username;
$_SESSION['email'] =   $from;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;


if (strlen($username) <= 1) {
    $_SESSION['error_username'] = "Введите корректное имя";
    redirect();
}


else if (strlen($from) <= 7 || strpos($from, '@') == false) {
    $_SESSION['error_email'] = "Введите корректный адрес почты";
    redirect();
}

else if (strlen($subject) <=5) {
    $_SESSION['error_subject'] = "Введите тему сообщения не менее из 5 символов";
    redirect();
}

else if (strlen($message) <= 15) {
    $_SESSION['error_message'] = "Введите сообщение не менее из 15 символов";
    redirect();
}
else {
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\n\Content-type:text/plain; charset-utf-8\r\n";
    mail("admin@it.com", $subject, $message, $headers);
    $_SESSION['success_mail'] = "Письмо успешно отправлено";
    redirect();
}
