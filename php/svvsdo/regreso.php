<?php 
if (isset($_GET['id'])) {
	include('../lib/conexion.php');
	$mysql = new conexion();
			$con=$mysql->get_connection();
$id=$_GET['id'];
	$stm=$con->prepare("UPDATE sv08trmte SET sv02code='7' WHERE sv08conse=?");
	$stm->bind_param("s",$id);
	$stm->execute();
	if ($stm->error) {
		print "<script>alert(\"algo salio mal!!\");window.location='../../Visado.php';</script>";
	}
	else{
		print "<script>alert(\"Apartir de ahora el tramite esta a disposicion de los demas topografos!!\");window.location='../../Home.php';</script>";
	}
}
 ?>