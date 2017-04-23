<?php

include "conexion.php";

$user_id=null;
$sql1= "select  `sv07cdtp`, `sv07cedt`, `sv07nomt`, `sv07apdt`, `sv07estd`, `sv07pass`, `sv07emt`, `sv05codu` from sv07tpgfo";
$query = $con->query($sql1);
?>