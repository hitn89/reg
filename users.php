<?php

include"auth.php";

$query = "SELECT * FROM users";
$result = mysql_query($query);
$num_rows = mysql_num_rows($result);
for($i=0;$i<$num_rows;$i=$i+1){
$arr = mysql_fetch_array($result);
echo"$arr[1], $arr[2]<br>";
}

?>
