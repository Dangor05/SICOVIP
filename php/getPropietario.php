<?php
include "conexion.php";

$user_id=null;
$sql1= "select  `sv03cedp`, `sv03nomp`, `sv03apdp`, `sv03emp`, `sv03telp`, `sv06codp` from sv03ptario";
$query = $con->query($sql1);
?>