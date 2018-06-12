
<meta charset="utf-8">
<?php
$zakaz="Примите новый заказ!";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы
if (isset($_POST['fullname']))			{$fullname			= $_POST['fullname'];		if ($fullname == '')	{unset($fullname);}}
if (isset($_POST['phone']))		{$phone		= $_POST['phone'];		if ($phone == '')	{unset($phone);}}
if (isset($_POST['email']))		{$email		= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['message']))			{$message			= $_POST['message'];		if ($message == '')	{unset($message);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
if (isset($fullname) ) {
$fullname=stripslashes($fullname);
$fullname=htmlspecialchars($fullname);
}
if (isset($phone) ) {
$phone=stripslashes($phone);
$phone=htmlspecialchars($phone);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
if (isset($message) ) {
$message=stripslashes($message);
$message=htmlspecialchars($message);
}
// адрес почты куда придет письмо
$address="e.k.f.y.91@gmail.com";
// текст письма
$note_text="Тема : $zakaz \r\nИмя : $fullname \r\n Телефон : $phone \r\n Email : $email \r\n Дополнительная информация : $message";

if (isset($fullname)  &&  isset ($sab) ) {
mail($address,$zakaz,$note_text,"Content-type:text/plain; utf-8");
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$fullname</b> Ваше письмо отправленно успешно.</p>";
}

?>
