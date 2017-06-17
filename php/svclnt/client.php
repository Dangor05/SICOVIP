<?php
session_start();
include '../lib/conexion.php';
$id=$_SESSION['tp'];
$stm="SELECT sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc,sv01pass  FROM sv01clnte WHERE sv01cdtpc='$id'";
$query = $con->query($stm);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}
}
?>