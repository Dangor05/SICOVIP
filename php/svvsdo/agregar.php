<?php

if(!empty($_POST)){
	if (isset($_POST['svnpln']) && isset($_POST['svnfol']) && isset($_POST['svnpre']) && isset($_FILES['sv09mnt']) && isset($_POST['svfvdp']) && isset($_POST['svconse']) && isset($_POST['svcedc']) && isset($_POST['svcedp']) && isset($_POST['svnfin']) && isset($_POST['svcode']) && isset($_POST['svstd']) && isset($_POST['svcdtp']))
	 {
	 	include "conexion.php";
$sv09npln=mysqli_real_escape_string($con,$_POST['svnpln']);   
$sv09nfol=mysqli_real_escape_string($con,$_POST['svnfol']);   
$sv09npre=mysqli_real_escape_string($con,$_POST['svnpre']);   
$sv09mnt=$_FILES['sv09mnt'];    
$sv09fvdp=mysqli_real_escape_string($con,$_POST['svfvdp']);   
$sv08conse=mysqli_real_escape_string($con,$_POST['svconse']);   
$sv01cedc=mysqli_real_escape_string($con,$_POST['svcedc']);  
$sv03cedp=mysqli_real_escape_string($con,$_POST['svcedp']);	
$sv04nfin=mysqli_real_escape_string($con,$_POST['svnfin']); 
$sv02code=mysqli_real_escape_string($con,$_POST['svcode']); 		
$sv07cdtp=mysqli_real_escape_string($con,$_POST['svcdtp']); 
$sv05codu=$_POST['codu'];
$sv04apln=$_FILES['svplan'];
$sv02std=mysqli_real_escape_string($con,$_POST['svstd']);


$dir ="../archivos/".$sv03cedp."/";



$sql = "INSERT INTO sv09vsdo (sv09npln,sv09nfol,sv09npre,sv09mnt,sv09fvdp,sv09fumv,sv08conse,sv01cedc,sv03cedp,sv04nfin,sv02code,sv07cdtp,sv05codu) values ('$sv09npln','$sv09nfol','$sv09npre','".$sv09mnt['name']."','$sv09fvdp',NOW(),'$sv08conse','$sv01cedc','$sv03cedp','$sv04nfin','$sv02code','$sv07cdtp','$sv05codu')";
$consu = "UPDATE sv08trmte SET sv02code ='$sv02std' WHERE  sv08conse='$sv08conse'";


if (!empty($_FILES['svplan'])) {
	$stm ="UPDATE sv04reqtos SET sv04apln='".$sv04apln['name']."' WHERE sv04nfin='$sv04nfin'";

	$exec=$con->query($stm);
	$senten=$con->query($consu);
	$query=$con->query($sql);
		if($query!=null && $senten!=null && $exec!=null){
		move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
		move_uploaded_file($sv04apln['tmp_name'],$dir.$sv04apln['name']);		
		mysqli_close($con);

	header("Location:../../VisadoMostrar.php");
}else{
	$con->close();
	print "<script>alert(\"El cliente y propietario deben de estar registrados antes de hacer este proceso.\");window.location='../../VisadoMostrar.php';</script>";
	
}

}else{
			
			$senten=$con->query($consu);
			$query=$con->query($sql);
			
			if($query!=null && $senten!=null){
			move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
			$con->close();
			header("Location:../VisadoMostrar.php");
			}else{
			$con->close();
				print "<script>alert(\"El cliente y propietario deben de estar registrados antes de hacer este proceso.\");window.location='../VisadoMostrar.php';</script>";
			}
	}

	 }
	else { echo "vistas";}

	}
	else {

		print "<script>alert(\"No se pudo realizar el tramite.\");window.location='../VisadoMostrar.php';</script>";
	}
	
?>

	