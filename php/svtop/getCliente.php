<?php

include ("php/lib/conexion.php");

$mysql = new conexion();

$con=$mysql->get_connection();

$user_id=null;
$sql1= "select `sv01cedc`, `sv01cdtpc`, `sv01nomc`, `sv01apdc`, `sv01emc`, `sv01telc`, `sv01pass` from sv01clnte";
$query = $con->query($sql1);
?>