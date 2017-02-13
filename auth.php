<?php

$host="localhost";
$user="root";
$password="";
$dbname="javap";

$db=Mysql_connect($host,$user,$password);
mysql_select_db($dbname,$db);
mysql_query("SET NAMES 'cp1251'");
mysql_query("SET CHARACTER SET 'cp1251'");

 ?>
