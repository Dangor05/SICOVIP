<?php 
include("conexion.php");
$last="SELECT COUNT(*) FROM `sv08trmte` WHERE `sv08conse` LIKE CONCAT('%',YEAR(NOW()),'%');";
$resp = $con->query($last);
$cons=null;
if ($resp->num_rows>=0) {
  while ($r=$resp->fetch_array()) {

  	$fch=date("dmY");

    $cons=$fch.$r[0];
    
  }
}
 ?>