<meta charset="utf-8"> 
<?php
$urok="КОНСУЛЬТАЦИЯ";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['company_name']))			{$company_name			= $_POST['company_name'];		if ($company_name == '')	{unset($company_name);}}
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['phone']))		{$phone		= $_POST['phone'];		if ($phone == '')	{unset($phone);}}
if (isset($_POST['email']))			{$email			= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')		{unset($text);}}
//стирание треугольных скобок из полей формы
if (isset($company_name) ) {
$company_name=stripslashes($company_name);
$company_name=htmlspecialchars($company_name);
}
if (isset($phone) ) {
$phone=stripslashes($phone);
$phone=htmlspecialchars($phone);
}
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
// адрес почты куда придет письмо
$address="alex.bizby@gmail.com";
// текст письма 
$note_text="Тема : $urok \r\nНазвание компании $company_name\r\nФИО : $name \r\nТелефон $phone \r\nEmail : $email\r\nВопрос: $text";

if (isset($company_name) &&  isset ($name) &&  isset ($phone) &&  isset ($email)&&  isset ($text) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<script>window.close();</script>";
}

?>