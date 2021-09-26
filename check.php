<?php
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$error ='';

if($email ==''){
    $error = 'Введите ваш E-Mail';
}
else if($message =='') {
    $error = 'Введите ваше сообщение';
}
else if(strlen($message) <= 5){
    $error = 'Сообщение должно быть длиннее 5 символов';
}
if($error != ''){
    echo $error;
    exit();
}

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail('shossssser@gmail.com', $subject, $message, $headers);

header('Location: /index.php');
?>