<?php
   include('../lib/conexion.php');
$mysql = new conexion();
$con=$mysql->get_connection();
session_start();
if(!empty($_POST))
	{
		$cedpr=mysqli_escape_string($con,$_POST['Cedpr']);
		$cedcli=mysqli_escape_string($con,$_POST['cedc']);
		$conse=mysqli_escape_string($con,$_POST['conse']);
		$nfin=mysqli_escape_string($con,$_POST['fin']);
		$email=mysqli_escape_string($con,$_POST['mail']);
		$mpro=$_POST['pmail'];
		$plano=$_FILES['doc'];
		$pln=$_FILES['doc']['name'];


		
$dir ="../../archivos/".$cedpr."\ ";

$path=$dir.$pln;
 if (file_exists($path)) {
		 	print "<script>alert(\"Ya existe un archivo con este nombre para este propieaterio, por favor cambiele el nombre e intente de nuevo.\");window.location='../../Tramit.php';</script>";
		 }else{

		$stm="INSERT INTO sv04reqtos(sv04nfin,sv04doc)VALUES ('$nfin','$pln')";
		$stmt="INSERT INTO sv08trmte(sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code)VALUES ('$conse',NOW(),NOW(),'$cedcli','$cedpr','$nfin','7')";
		$exec=$con->query($stm);
		$exct=$con->query($stmt);
		if ($stm!=NULL && $stmt!=NULL){

		if(file_exists($dir)){

		move_uploaded_file($plano['tmp_name'],$dir.$pln);
		mysqli_close($con);
		
		include('phpmailer.php');
		//include("mailpro.php");
		

		     
     unset($_SESSION['Cedt']);
     unset($_SESSION['Cedp']);
     unset($_SESSION['mail']);
     unset($_SESSION['mpro']);
		header("Location:../../Home.php");
		
			} else{

		mkdir($dir,7055);
		move_uploaded_file($plano['tmp_name'],$dir.$pln);
		mysqli_close($con);



		include('phpmailer.php');
		//include("mailpro.php");
		

		     session_start();
     unset($_SESSION['Cedt']);
     unset($_SESSION['Cedp']);
     unset($_SESSION['mail']);
     unset($_SESSION['mpro']);
		header("Location:../../Home.php");
			}
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../../Tramite.php';</script>";

			}

		}
	}
	else {

		print "<script>alert(\"No se pudo realizar el tramite, por favor revise que todos los datos esten bien.\");window.location='../../Tramite.php';</script>";
	}

?>