<?php

include('php/lib/conexion.php');
$mysql = new conexion();
			$con=$mysql->get_connection();

$user_id=null;
$sql1= "SELECT DISTINCT b.sv03cedp,b.sv03nomp,b.sv03apdp,
                d.`sv08conse`, 
                c.sv04nfin,c.sv04apln,c.sv04doc,
                e.`sv02code`,d.sv09mnt

 FROM sv03ptario b, sv04reqtos c, sv09vsdo d, sv08trmte e

 WHERE  c.sv04nfin=d.`sv04nfin` AND
        b.sv03cedp=d.sv03cedp   AND
        e.`sv08conse`=d.sv08conse";
$query = $con->query($sql1);
?>


