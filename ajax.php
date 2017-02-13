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

	switch ($funk) {
    case "login":
				$login = $_GET['login'];
        getMysql("select * from users where login='$login'");
        break;
		case "mail":
				$mail = $_GET['mail'];
		    getMysql("select * from users where mail='$mail'");
		    break;
	 }
?>
