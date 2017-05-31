<?php 
if (!empty($_FILES['pln']) && !empty($_POST['conse']) && !empty($_POST['fin']) && !empty($_POST['pr']) && !empty($_POST['cedc']) && !empty($_POST['mail']) ) {

	if (isset($_POST['conse']) && isset($_POST['fin']) && isset($_POST['pr']) && isset($_POST['cedc']) &&isset($_POST['mail']) && isset($_FILES['pln']) ) {
		
		include ("conexion.php");

		$conse=$_POST['conse'];
		$cedpr=$_POST['pr'];
		$cedcli=$_POST['cedc'];
		$nfin=$_POST['fin'];
		$email=$_POST['mail'];
		$mpro=$_POST['pmail'];
		$pln=$_FILES['pln']['name'];
		$apln=$_FILES['pln'];

		$path ="../archivos/".$cedpr."\ ";
		 $dir=$path.$pln;
		 if (file_exists($dir)) {
		 	print "<script>alert(\"Ya existe un archivo con este nombre para este propieaterio, por favor cambiele el nombre e intente de nuevo.\");window.location='../Tramit.php';</script>";
		 }
		 else{

		$stm="INSERT INTO sv04reqtos(sv04nfin,sv04doc)VALUES ('$nfin','$pln')";
		$stmt="INSERT INTO sv08trmte(sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code)VALUES ('$conse',NOW(),NOW(),'$cedcli','$cedpr','$nfin','7')";
		$exec=$con->query($stm);
		$exct=$con->query($stmt);
		if ($stm!=NULL && $stmt!=NULL) {
		if(file_exists($path)){

		move_uploaded_file($apln['tmp_name'],$path.$pln);

		$con->close();

		include('phpmailer.php');
		/*if ($mpro!=null) {
			include("mailpro.php");
		}*/


		header("Location:../inicio.php");
		} else{

		mkdir($path,7055);
		move_uploaded_file($apln['tmp_name'],$path.$pln);

		$con->close();

		include('phpmailer.php');
		/*if ($mpro!=null) {
			include("mailpro.php");
		}*/

		     session_start();
		     unset($_SESSION['pr']);
		     unset($_SESSION['mpr']);

		     header("Location:../inicio.php");
			}
		}else{
			print "<script>alert(\"Algo a sucedido, por favor revise que todo los datos, estan correctos!!\");window.location='../Tramit.php';</script>";
		}
		}
	}else{
		echo "algo no existe";
	}
}else{
	echo "algo viene vacio";
}

 ?>