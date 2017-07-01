<?php
include('../lib/conexion.php');

if(!empty($_POST))
{
$mysql = new conexion();
$con=$mysql->get_connection();
    $Cedp=mysqli_real_escape_string($con,$_POST['cedp']);
	$NomP=mysqli_real_escape_string($con,$_POST['nomp']);
	$ApelP=mysqli_real_escape_string($con,$_POST['apelp']);
	$EmailP=mysqli_real_escape_string($con,$_POST['emap']);
	$TelP=mysqli_real_escape_string($con,$_POST['telp']);
	$TipP=mysqli_real_escape_string($con,$_POST['tipro']);

		$sch="SELECT sv03cedp FROM sv03ptario WHERE sv03cedp='$Cedp'";
	$stm=$con->query($sch);
	if ($stm->num_rows>0) {
                 session_start();
                 $_SESSION['Cedp'] = $Cedp;
                 $_SESSION['mpro']= $EmailP;
                 mysqli_close($con);
				header("Location: ../../Tramite.php"); 
	}else{

	$sql2 = "INSERT INTO sv03ptario(sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp)
	VALUES ('$Cedp','$NomP','$ApelP','$EmailP','$TelP','$TipP')";

		$query2=$con->query($sql2);
		if($query2 != null){
			                
                 session_start();
                 $_SESSION['Cedp'] = $Cedp;
                 $_SESSION['mpro']= $EmailP;
                 mysqli_close($con);
                 
                 $dir ="../../archivos/".$Cedp."/ ";
                 mkdir($dir,7055);
				header("Location: ../../Tramite.php"); 
			}else{
				mysqli_close($con);
				print "<script>alert(\"Algo a sucedido, intentalo más tarde.\");window.location='../../Cliente.php';</script>";

			}
		}

}

?>