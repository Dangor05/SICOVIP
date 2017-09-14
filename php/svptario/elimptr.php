<?php

if (!empty($_POST)) {
	if (isset($_POST['sv03cedp'])) {
			
			require("../lib/conexion.php");
			$mysql = new conexion();
			$con=$mysql->get_connection();

			$svcedp=$_POST["sv03cedp"];


			$stm=$con->prepare("CALL elimptr(?);");
			$stm->bind_param("s",$svcedp);
			$stm->execute();

			if ($stm->error) {
				print "<script>alert(\"No se pudo eliminar.\");window.location='../../PropietarioMostrar.php';</script>";
			}else
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../../PropietarioMostrar.php';</script>";
			}
			
	}
}


 ?>