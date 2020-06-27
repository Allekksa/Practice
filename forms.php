<!--
<form action="" method="POST">
	<input type="text" name="user" value="<? //if(isset($_POST['user'])) echo $_POST['user'];?>"><br><br>
	<textarea name="message"></textarea><br><br>
	<input type="submit">
	</form>
-->

<?

//echo $_POST['user'];
 ?>
 <!-------------Задачи
Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'.-->

<!-- <html>
<p>Введите город!</p>
<form action="" method="POST">
	<input type="text" name="city">
	<input type="submit">
</form>

</html>-->
<?
//Если форма была отправлена и город не пустой:
/*if(!empty($_REQUEST['city'])){
$city = htmlspecialchars($_REQUEST['city']);//+запрет ввода тегов
echo 'Ваш город: ' . $city;
} */

?>


<!------Скрываем форму после отправки--->

<?
	//Если город пустой - покажем форму
/* if(isset($_REQUEST['city'])){
?>

<form action="" method= "POST">
	<input type='text' name="city">
	<input type="submit">
</form>
<?
}

?>

<?
	//Если форма была отправлена и город не пустой:

	if(isset($_REQUEST['city'])){
		$city = htmlspecialchars($_REQUEST['city']);
		echo "Ваш город: " . $city;
	}

?> */

//-------------------Задачи для решения
//--------------------------Формы
// Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'. Показать решение.
?>
<!-- <form action="" method="POST">
<p>Введите Ваше имя</p>
<input type="text" name="name">
<input type="submit">

<br> <br>
--->
<?
/*if(isset($_REQUEST['name'])) {
	$name = htmlspecialchars($_REQUEST['name']);
	echo "Привет, " . $name . '.';
} */
?>


 <!--Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.

/*Привет, Дмитрий, 25 лет.
Твое сообщение: ...
--->

<!-------<form action="" method="POST">
	<p>Введите имя</p>
	<input type="text" name="name">
	<p>Введите возраст</p>
	<input type="text" name="age">
	<p>Введите сообщение</p>
	<textarea name="message"></textarea>
	<input type="submit" name="submit">
</form>--->
<?
/*if(isset($_REQUEST['submit'])){
	$name = htmlspecialchars($_REQUEST['name']);
	$age = htmlspecialchars($_REQUEST['age']);
	$message = htmlspecialchars($_REQUEST['message']);
	echo "Привет, $name, $age <br> Твое сообщение: $message";

}*/
?>

<!--------/*Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее. -->



 <?
/* if(!isset($_REQUEST["submit"])) {
?>
<html>
	<form action="" method="POST">
<p>Введите Ваш возраст!</p>
<input type="text" name="age">
<input type="submit" name="submit">
</form>
<?
}
?>
<?
if(isset($_REQUEST["age"])) {
	$age = htmlspecialchars($_REQUEST['age']);
	echo "Ваш возраст " . $age;
}
*/
?>

 <!--Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь. Показать решение.
  <form action="" method="POST">
	<p>Введите логин</p>
	<input type="text" name="login">
	<p>Введите пароль</p>
	<input type="password" name="password"><br><br>
	<input type="submit">
</form>--->

<?
/*if(!empty($_POST['login']) && !empty($_POST['password'])){
	$login = 'cat';
	$pass = "12345";
	$formLog = trim(htmlspecialchars($_POST['login']));
	$formPass = trim(htmlspecialchars($_POST['password']));

	if($formLog == $login && $formPass == $pass) {
		echo "Доступ разрешен";
	}else{
		echo "Доступ запрещен!";
	}
}
*/
?>

<!----------- Атрибуты value и placeholder
// Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.--->



<!-- <form action="" method="POST">
<input name="login" value="<?php /*if(isset($_POST['login']))echo $_POST['login'*/];?>">
<input type="submit">
</form>
 -->


<?
/*if(isset($_POST['login'])){
	$name = $_POST['login'];
	echo $name;
} */
?>
<!------Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали.-->

<form action="" method="POST">
	<p>Введите имя</p>
<input name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
<textarea name="message">
	<?php if(isset($_POST['message'])) echo $_POST['message'];?>
</textarea>
<input type="submit">
</form>

