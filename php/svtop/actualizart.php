<?php

if(!empty($_POST)){

	if (isset($_POST['sv07cdtp']) && isset($_POST['sv07cedt']) && isset($_POST['sv07nomt']) && isset($_POST['sv07apdt']) && isset($_POST['sv07estd']) && isset($_POST['sv07pass']) && isset($_POST['sv07emt']) && isset($_POST['sv05codu']) && isset($_POST['pass2']) ) {

		include "../lib/conexion.php";
		$mysql = new conexion();
			$con=$mysql->get_connection();

     $sv07cdtp=mysqli_real_escape_string($con,$_POST['sv07cdtp']);
     $sv07cedt=mysqli_real_escape_string($con,$_POST['sv07cedt']);
     $sv07nomt=mysqli_real_escape_string($con,$_POST['sv07nomt']);
     $sv07apdt=mysqli_real_escape_string($con,$_POST['sv07apdt']);
     $sv07estd=mysqli_real_escape_string($con,$_POST['sv07estd']);
     $pass=mysqli_real_escape_string($con,$_POST['sv07pass']);
     $sv05codu=mysqli_real_escape_string($con,$_POST['sv05codu']);
     $sv07emt=mysqli_real_escape_string($con,$_POST['sv07emt']);
     $pass2=mysqli_real_escape_string($con,$_POST['pass2']);

     if ($pass==$pass2) {

     	$sv07pass=sha1($pass);

     	$stm=$con->prepare("UPDATE sv07tpgfo SET sv07cedt=?,sv07nomt=?,sv07apdt=?,sv07estd=?,sv07pass=?,sv07emt=?,sv05codu=? WHERE sv07cdtp=?");
     	$stm->bind_param("ssssssis",$sv07cedt,$sv07nomt,$sv07apdt,$sv07estd,$sv07pass,$sv07emt,$sv05codu,$sv07cdtp);
     	$stm->execute();
     	if ($stm->error) {
     		print "<script>alert(\"No se pudo actualizar.\");window.location='../../UsuariosMostrar.php';</script>";
     	}
     	else{
     		print "<script>alert(\"Actualizado exitosamente.\");window.location='../../UsuariosMostrar.php';</script>";
     	}
     	$stm->close();
     	$con->close();

     }else{
     	 print "<script>alert(\"La contraseñas no son igual, por favor escriba bien sus contraseña.\");window.location='../../UsuariosMostrar.php';</script>";
     }




		}//Fin del isset

		else{
			echo "aasjdh"; 
		}
		
}


?>