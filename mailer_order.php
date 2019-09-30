<meta charset="utf-8"> 
<?php
$urok="ЗАКАЗ УСЛУГИ";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['m_user_type']))			{$user_type			= $_POST['m_user_type'];		if ($user_type == '')	{unset($user_type);}}
if (isset($_POST['m_partner_name']))			{$company_name			= $_POST['m_partner_name'];		if ($company_name == '')	{unset($company_name);}}
if (isset($_POST['m_user_surname']))		{$surname		= $_POST['m_user_surname'];		if ($surname == '')	{unset($surname);}}
if (isset($_POST['m_user_name']))			{$name			= $_POST['m_user_name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['m_user_telefon']))			{$telephone			= $_POST['m_user_telefon'];		if ($telephone == '')		{unset($telephone);}}
if (isset($_POST['m_user_email']))			{$email			= $_POST['m_user_email'];		if ($email == '')		{unset($email);}}
//стирание треугольных скобок из полей формы
if (isset($user_type) ) {
$user_type=stripslashes($user_type);
$user_type=htmlspecialchars($user_type);
}
if (isset($company_name) ) {
$company_name=stripslashes($company_name);
$company_name=htmlspecialchars($company_name);
}
if (isset($surname) ) {
$surname=stripslashes($surname);
$surname=htmlspecialchars($surname);
}
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($telephone) ) {
$telephone=stripslashes($telephone);
$telephone=htmlspecialchars($telephone);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
// адрес почты куда придет письмо
$address="alex.bizby@gmail.com";
// текст письма 
$note_text="Тема : $urok \r\nТип заявки $user_type \r\nНазвание компании $company_name\r\nФИО : $surname $name \r\nТелефон $telephone \r\nEmail : $email";

if (isset($company_name)  &&  isset ($surname) &&  isset ($name) &&  isset ($telephone) &&  isset ($email) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<script>window.close();</script>";
}

?>