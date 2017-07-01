<?php 
include('php/lib/conexion.php');
$mysql = new conexion();
$con=$mysql->get_connection();

if (isset($_GET['con']) && isset($_GET['nfin']) ) {
	$cn=$_GET['con'];
$user=$_GET['nfin'];
}else
{
	$cn=null;
	$user=null;
}

$sql1= "SELECT a.sv04nfin, a.sv04doc, c.sv03cedp FROM sv04reqtos a, sv08trmte b, sv03ptario c 
WHERE a.sv04nfin =b.sv04nfin 
AND c.sv03cedp= b.sv03cedp 
AND a.sv04nfin ='$user' ";
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}
}


?>