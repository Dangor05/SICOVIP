<?php
   include('conexion.php');


if(!empty($_POST))
	{
		$cedpr=mysqli_escape_string($con,$_POST['Cedpr']);
		$cedcli=mysqli_escape_string($con,$_POST['cedc']);
		$conse=mysqli_escape_string($con,$_POST['conse']);
		$nfin=mysqli_escape_string($con,$_POST['fin']);
		$email=mysqli_escape_string($con,$_POST['mail']);
		$plano=$_FILES['doc'];
		$pln=$_FILES['doc']['name'];


		
$dir ="../archivos/".$cedpr."\ ";

		$stm="INSERT INTO sv04reqtos(sv04nfin,sv04doc)VALUES ('$nfin','$pln')";
		$stmt="INSERT INTO sv08trmte(sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code)VALUES ('$conse',NOW(),NOW(),'$cedcli','$cedpr','$nfin','7')";
		$exec=$con->query($stm);
		$exct=$con->query($stmt);
		if ($stm!=NULL && $stmt!=NULL){

		if(file_exists($dir)){

		move_uploaded_file($plano['tmp_name'],$dir.$pln);
		mysqli_close($con);

		include('phpmailer.php');

		     session_start();
     unset($_SESSION['Cedt']);
     unset($_SESSION['Cedp']);
     unset($_SESSION['mail']);
		header("Location:../Home.php");
		
			} else{

		mkdir($dir,7055);
		move_uploaded_file($plano['tmp_name'],$dir.$pln);
		mysqli_close($con);



		include('phpmailer.php');

		     session_start();
     unset($_SESSION['Cedt']);
     unset($_SESSION['Cedp']);
     unset($_SESSION['mail']);
		header("Location:../Home.php");
			}
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../Tramite.php';</script>";

			}
	}
	else {

		print "<script>alert(\"No se pudo realizar el tramite, por favor revise que todos los datos esten bien.\");window.location='../Tramite.php';</script>";
	}

?>