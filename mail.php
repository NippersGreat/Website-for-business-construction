<?php

$text = iconv("utf-8", "windows-1251", $_POST['name']
);
$email = $_POST['tel'];



$email = htmlspecialchars($text);
$phone = htmlspecialchars($email);

$email = urldecode($name);
$phone = urldecode($email);

$email = trim($name);
$phone = trim($email);

if(mail("Почта",
"Новое письмо с сайта ПроектМастер.КР",
"Имя, или организация: ПроектМастер.КР".$text."\n".
"Телефон: ".$email."\n",
"From: Домен \r\n")
)

{
	header('location: thank-you.html');
}


?>
