<?php 
include('../lib/conexion.php');


if(!empty($_POST))
{
	$mysql = new conexion();
	$con=$mysql->get_connection();
	
	$Cedt=mysqli_real_escape_string($con,$_POST['cedt']);
	$CodIT=mysqli_real_escape_string($con,$_POST['cit']);
	$NomT=mysqli_real_escape_string($con,$_POST['nomt']);
	$ApelT=mysqli_real_escape_string($con,$_POST['apelt']);
	$EmailT=mysqli_real_escape_string($con,$_POST['emat']);
	$TelT=mysqli_real_escape_string($con,$_POST['telt']);

	$sch="SELECT sv01cedc FROM sv01clnte WHERE sv01cedc='$Cedt'";
	$stm=$con->query($sch);
	if ($stm->num_rows>0) {
		          session_start();
                 $_SESSION['Cedt'] = $Cedt;
                 $_SESSION['mail'] = $EmailT;
                 mysqli_close($con);
                 header("Location: ../../Propietario.php");
	}else{
    

	$sql1 = "INSERT INTO sv01clnte(sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc) 
	VALUES ('$Cedt','$CodIT','$NomT','$ApelT','$EmailT','$TelT')";
	


	$query1=$con->query($sql1);

	if($query1!=null){
		                
                 session_start();
                 $_SESSION['Cedt'] =   $Cedt;
                 $_SESSION['mail'] = $EmailT;
                 mysqli_close($con);
                 header("Location: ../../Propietario.php"); 
			}else{
				mysqli_close($con);
				echo "Error";
				print "<script>alert(\"No se pudo agregar.\");window.location='../../Cliente.php';</script>";

			}
}





}

?>