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

if(mail("�����",
"����� ������ � ����� ������������.��",
"���, ��� �����������: ������������.��".$text."\n".
"�������: ".$email."\n",
"From: ����� \r\n")
)

{
	header('location: thank-you.html');
}


?>
