<?php

if (!empty($_POST)) {
	if (isset($_POST['sv01cedc'])) {
			
			require("../lib/conexion.php");
			$mysql = new conexion();
			$con=$mysql->get_connection();

			$svcedc=$_POST["sv01cedc"];


			$stm=$con->prepare("CALL elimclnt(?);");
			$stm->bind_param("s",$svcedc);
			$stm->execute();

			if ($stm->error) {
				print "<script>alert(\"No se pudo eliminar.\");window.location='../../ClienteMostrar.php';</script>";
			}else
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../../ClienteMostrar.php';</script>";
			}
			
	}
}


 ?>