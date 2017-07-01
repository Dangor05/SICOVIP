<?php

	if (isset($_POST['sv07cdtp'])) {
			
			include "../lib/conexion.php";
			$mysql = new conexion();
			$con=$mysql->get_connection();


			$id=mysqli_real_escape_string($con,$_POST["sv07cdtp"]);
			
			$sql = "UPDATE sv07tpgfo  SET sv07estd='1' WHERE sv07cdtp='$id'";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Activado exitosamente.\");window.location='../../UsuariosMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo Activado.\");window.location='../../UsuariosMostrar.php';</script>";

	}
}

?>