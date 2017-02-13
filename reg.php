<?php
include"auth.php";
$ip = $_SERVER['REMOTE_ADDR'];

$query="SELECT * FROM regip WHERE date >= DATE_SUB(NOW() , INTERVAL 5 MINUTE) AND (ip='$ip')";
$result=mysql_query($query);
$arr = mysql_fetch_array($result);
  if(empty($arr[0])){
    include"regform.php";
  } else {
    echo"<h2>С вашего IP адреса недавно была произведена регистрация. Для повторной попытки необходимо подождать 5 минут.</h2>";
  }
?>
