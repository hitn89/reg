<?php

include"auth.php";

$login = $_POST['login'];
$mail = $_POST['mail'];
$name = $_POST['name'];
$password = $_POST['password'];

$password = md5(md5(trim($password)));
$login = strtolower($login);
$mail = strtolower($mail);

$query="INSERT INTO users(id,login,mail,name,password) VALUES ('0','$login','$mail','$name','$password');";
mysql_query($query);
echo"Регистрация прошла успешно! Теперь вы можете <a href=\"index.php\">ВОЙТИ</a> на сайт используя свой логин и пароль ";

 ?>