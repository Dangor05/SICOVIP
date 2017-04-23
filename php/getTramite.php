<?php
include "conexion.php";

$user_id=null;
$sql1= "select  `sv08conse`, `sv08fchs`, `sv08fumt`, `sv01cedc`, `sv03cedp`, `sv04nfin`, `sv02code` from sv08trmte";
$query = $con->query($sql1);
?>