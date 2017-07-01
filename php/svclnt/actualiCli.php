<?php 
include("../lib/conexion.php");
$mysql = new conexion();

$con=$mysql->get_connection();

if (isset($_POST['sv01cdtpc']) && isset($_POST['sv01cedc']) && isset($_POST['sv01nomc']) && isset($_POST['sv01apdc']) && isset($_POST['sv01telc']) && isset($_POST['sv01emc']) && isset($_POST['sv01pass']) && isset($_POST['valpass']) ) {
	
	$ced=mysqli_real_escape_string($con,$_POST['sv01cedc']);
	$cit=mysqli_real_escape_string($con,$_POST['sv01cdtpc']);
	$nom=mysqli_real_escape_string($con,$_POST['sv01nomc']);
	$apl=mysqli_real_escape_string($con,$_POST['sv01apdc']);
	$tel=mysqli_real_escape_string($con,$_POST['sv01telc']);
	$eml=mysqli_real_escape_string($con,$_POST['sv01emc']);
	$pass=mysqli_real_escape_string($con,$_POST['sv01pass']);
	$passw=mysqli_real_escape_string($con,$_POST['valpass']);

	if ($passw==$pass) {
		$svpass=sha1($pass);
		$stm="UPDATE sv01clnte set sv01cdtpc='$cit',sv01nomc='$nom',sv01apdc='$apl',sv01emc='$eml',sv01telc='$tel',sv01pass='$svpass' WHERE sv01cedc='$ced'";
		$sen=$con->query($stm);
		if ($sen!=null) {
			$con->close();
			header("location: ../inicio.php");
		}else{
			print "<script>alert(\"No se pudo actualizar.\");window.location='../../configurar.php';</script>";
		}
	}
	else{
		print "<script>alert(\"Las contraseñas no son igual, por favor, verifique que coincidan.\");window.location='../../config.php';</script>";
	}
}
else{
	echo "Hay algo mal";
}
 ?>}
