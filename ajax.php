<?php

function getMysql($sql) {
	$connection = mysqli_connect("localhost","root","","javap");
    $result = mysqli_query($connection, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }
    echo json_encode($data);
}

$funk = $_GET['funk'];
$login = $_GET['login'];

	switch ($funk) {
    case "users":
        getMysql("select * from users where login='$login'");
        break;
	 }
?>
