<?php

if(!empty($_POST)){

		if (isset($_POST['sv01cedc']) && isset($_POST['sv01cdtpc']) && isset($_POST['sv01nomc']) &&
			isset($_POST['sv01apdc']) && isset($_POST['sv01emc']) && isset($_POST['sv01telc'])) {
include "../lib/conexion.php";

$mysql = new conexion();

$con=$mysql->get_connection();

     $sv01cedc=mysqli_real_escape_string($con,$_POST['sv01cedc']);
     $sv01cdtpc=mysqli_real_escape_string($con,$_POST['sv01cdtpc']);
     $sv01nomc=mysqli_real_escape_string($con,$_POST['sv01nomc']);
     $sv01apdc=mysqli_real_escape_string($con,$_POST['sv01apdc']);
     $sv01emc=mysqli_real_escape_string($con,$_POST['sv01emc']);
     $sv01telc=mysqli_real_escape_string($con,$_POST['sv01telc']);

	
			

		$stm=$con->prepare("CALL ActualizarCliente(?,?,?,?,?,?);");
		$stm->bind_param("sssssi",$sv01cedc,$sv01cdtpc, $sv01nomc, $sv01apdc, $sv01emc, $sv01telc);
		$stm->execute();

		if ($stm->error) {
			echo "Fallo al agregar".$res->error;
		}

		$stm->close();
		$con->close(); 

		print "<script>alert(\"Actualizado exitosamente.\");window.location='../../ClienteMostrar.php';</script>";

	}	else{
		echo "revisa las vistas pendejo!!";
	}
}


?>