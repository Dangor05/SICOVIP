<?php

if(!empty($_POST)){
	if (isset($_POST['svcedp']) && isset($_POST['svnomp']) && isset($_POST['svapdp']) && isset($_POST['svemp']) && isset($_POST['svtelp']) && $_POST['svcodp']) 
	{
		//
				include "../lib/conexion.php";
$sv03cedp=$_POST['svcedp'];  
$sv03nomp=$_POST['svnomp'];  
$sv03apdp=$_POST['svapdp'];  
$sv03emp=$_POST['svemp'];   
$sv03telp=$_POST['svtelp'];
$sv06codp = $_POST['svcodp']; 
			
			$sql = "INSERT INTO sv03ptario (sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp) values 
                   ('$sv03cedp','$sv03nomp','$sv03apdp','$sv03emp','$sv03telp','$sv06codp')";



			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Agregado exitosamente.\");window.location='../../PropietarioMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../../PropietarioMostrar.php';</script>";

			}
	}

	}	
?>