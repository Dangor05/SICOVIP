<?php
include "conexion.php";

$user=$_SESSION['sv07cdtp'];
$sql1= "SELECT sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07emt from sv07tpgfo where sv07cdtp = '$user'";
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>