<?php

include('php/lib/conexion.php');
$mysql = new conexion();
			$con=$mysql->get_connection();
$user=$_SESSION['sv07cdtp'];
$sql1= " SELECT a.sv03cedp, a.sv03nomp, a.sv03apdp,
 t.sv08conse,b.sv04nfin, b.sv04doc,
 DATE_FORMAT(t.sv08fchs,'%d-%m-%Y') AS sv08fchs,
 DATE_FORMAT(t.sv08fumt,'%d-%m-%Y') AS sv08fumt, 
 v.sv07cdtp, t.sv02code

 FROM sv08trmte t, sv09vsdo v, sv03ptario a, sv04reqtos b
 WHERE t.sv08conse = v.sv08conse 
AND t.sv04nfin = b.sv04nfin
AND v.sv04nfin = t.sv04nfin
AND t.sv03cedp = a.sv03cedp
AND t.sv02code='8'
 AND sv07cdtp='$user'";
$query = $con->query($sql1);
?>



