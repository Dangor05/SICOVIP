<?php 
include('../lib/conexion.php');
$mysql = new conexion();
$con=$mysql->get_connection();
if (!empty($_FILES) && !empty($_POST)) {
	if(isset($_POST['conse']) && isset($_POST['nfin']) && isset($_POST['cedp']) && isset($_FILES['pln']) )
	{
		$path="../archivos/".$_POST['cedp']."\ ";
		
		$sv08conse=mysqli_real_escape_string($con,$_POST['conse']);
		$sv03cedp=mysqli_real_escape_string($con,$_POST['cedp']);
		$sv04nfin=mysqli_real_escape_string($con,$_POST['nfin']);
		$sv04apl=$_FILES['pln'];
		$apl=$_FILES['pln']['name'];


			$stm=$con->prepare("UPDATE sv04reqtos SET sv04doc=? WHERE sv04nfin=?");
			$stm->bind_param("ss", $apl,$sv04nfin);
			$stm->execute();
			if ($stm->error) {
			print "<script>alert(\"Intenta de nuevo!!\");window.location='../../Home.php';</script>";
		}else{
		move_uploaded_file($sv04apl['tmp_name'],$path.$apl);
		$stm->close();
		$con->close();
		print "<script>alert(\"Agregado exitosamente.\");window.location='../../Home.php';</script>";
		}
		
	}
}


 ?>