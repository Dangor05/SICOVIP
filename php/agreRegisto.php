<?php 

if(!empty($_POST))
{
	if (isset($_POST['cedt']) && isset($_POST['cit']) && isset($_POST['nomt']) && isset($_POST['apelt']) && isset($_POST['emat']) && isset($_POST['telt']) && isset($_POST['pass']) && isset($_POST['vpass'])) {
			$cedt=$_POST['cedt'];
			$cod=$_POST['cit'];
			$nom=$_POST['nomt'];
			$apel=$_POST['apelt'];
			$eml=$_POST['emat'];
			$tel=$_POST['telt'];
			$pas=$_POST['pass'];
			$vps=$_POST['vpass'];
			include('conexion.php');

			$sch="SELECT sv01cedc, sv01cdtpc FROM sv01clnte WHERE sv01cedc='$cedt' AND sv01cdtpc='$cod'";
			$stm=$con->query($sch);
			if ($stm->num_rows>0) {
				print "<script>alert(\"El usuario ya esta registrado.\");window.location='../registro.php';</script>";
			}else{
				if ($pas==$vps) {

					$pass=sha1($pas);
					$stmt=$con->prepare( "CALL AgrClient(?,?,?,?,?,?,?);");
					$stmt->bind_param("sssssis",$cedt,$cod,$nom,$apel,$eml,$tel,$pass);
					$stmt->execute();
					if ($stmt->error) {
						print "<script>alert(\"No se pudo registrar.\");window.location='../registro.php';</script>";
					}
					else{
						header("location: ../index.php");
					}
			}
				else{
					print "<script>alert(\"Las contraseñas no son igual, por favor, verifique que coincidan.\");window.location='../registro.php';</script>";
				}
				
			}
		}
	
}

?>