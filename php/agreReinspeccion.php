<?php 
include ('conexion.php');
if (!empty($_FILES) && !empty($_POST)) {
	if(isset($_POST['nfin'])) {
	 if (isset($_POST['cedp'])) {
	  	if (isset($_FILES['pln'])) {
	  		
	  			
	  	$path="../archivos/".$_POST['cedp']."\ ";
		
		$sv08conse=$_POST['conse'];
		$sv03cedp=$_POST['cedp'];
		$sv04nfin=$_POST['nfin'];
		$sv04apl=$_FILES['pln'];
		$pln=$_FILES['pln']['name'];

		$path ="../archivos/".$cedpr."\ ";
		 $dir=$path.$pln;
		 if (file_exists($dir)) {
		 	print "<script>alert(\"Ya existe un archivo con este nombre para este propieaterio, por favor cambiele el nombre e intente de nuevo.\");window.location='../Reinspeccion.php';</script>";
		 }
		 else{
		

		$stm=$con->prepare("UPDATE sv04reqtos SET sv04doc=? WHERE sv04nfin=?");
			$stm->bind_param("ss", $pln,$sv04nfin);
			$stm->execute();
			if ($stm->error) {
			print "<script>alert(\"Algo a sucedido, por favor revise que todo los datos, estan correctos!!\");window.location='../Home.php';</script>";
		}else{
			include("estd.php");
		move_uploaded_file($sv04apl['tmp_name'],$path.$pln);

		$stm->close();
		$con->close();
		print "<script>alert(\"Agregado exitosamente.\");window.location='../inicio.php';</script>";
		}
		  }		
	  	}else{echo "es el plano";}
	  } else{echo "es la cedula";} 
	} else{echo "es la finca";}
	
}


 ?>